<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\JadwalAcara;
use App\Models\PenugasanSe;
use App\Models\User;

class DashboardController extends Controller
{
    private $user;

    function __construct()
    {
        $this->user = new User();
        $this->feedback =  new Feedback();
        $this->jadwalAcara = new JadwalAcara();
        $this->penugasanSe = new PenugasanSe();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        $jadwalAcara = $this->jadwalAcara->getJadwalAcara();
        if(auth()->user()->peran ==='peserta')
        {
            $feedback = $this->feedback->getFeedbackWithStatus($id);
            $oldFeedback = $this->feedback->oldFeedback($id);
            return view('peserta.dashboard',
            [   
            'menu' => 'Dashboard',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'feedback' => $feedback,
            'oldFeedback' => $oldFeedback,
            'jadwalAcara' => $jadwalAcara
            ]);
        }
        elseif (auth()->user()->peran ==='evaluator') {
            $dataSe = $this->penugasanSe->getPenugasanByIdEvaluator($id);
            return view('evaluator.dashboard',
            [  
            'menu' => 'Dashboard',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'jadwalAcara' => $jadwalAcara
            ]);
        }
        else {
            return view('admin.dashboard',
            [
            'menu' => 'Dashboard',
            'data' => $data,
            'peran' => auth()->user()->peran
            ]);
        }
    }
}
