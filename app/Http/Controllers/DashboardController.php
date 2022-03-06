<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\Peserta;
use App\Models\User;

class DashboardController extends Controller
{
    private $user;

    function __construct()
    {
        $this->user = new User();
        $this->feedback =  new Feedback();
    }
    public function index()
    {
        $id = auth()->user()->id;
        $data = $this->user->getUser($id);
        if(auth()->user()->peran ==='peserta')
        {
            $feedback = $this->feedback->getFeedbackWithStatus($id);
            $oldFeedback = $this->feedback->oldFeedback($id,0);
            return view('peserta.dashboard',
            [   
            'menu' => 'Dashboard',
            'data' => $data,
            'peran' => auth()->user()->peran,
            'feedback' => $feedback,
            'oldFeedback' => $oldFeedback            ]);
        }
        elseif (auth()->user()->peran ==='evaluator') {
            return view('evaluator.dashboard',
            [  
            'menu' => 'Dashboard',
            'data' => $data,
            'peran' => auth()->user()->peran
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
