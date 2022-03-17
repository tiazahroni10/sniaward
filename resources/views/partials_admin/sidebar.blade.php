 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a  href="{{ route('dashboard') }}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Beranda</span></a>
                        <ul aria-expanded="false">
                        <li><a href="{{ route('frontpage.edit',1) }}">Frontpage</a></li>
                        <li><a href="{{ route('faq.index') }}">FaQ</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('showDataPeserta') }}" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Peserta</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="/admin/evaluator" aria-expanded="false">
                        <i class="flaticon-381-notepad"></i>
                        <span class="nav-text">Evaluator</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="/admin/berita" aria-expanded="false">
                        <i class="flaticon-381-news"></i>
                        <span class="nav-text">Berita</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('dokumentasi.index') }}" aria-expanded="false">
                        <i class="flaticon-381-picture"></i>
                        <span class="nav-text">Dokumentasi</span>
                        </a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Dokumen</span></a>
                        <ul aria-expanded="false">
                        <li><a href="{{ route('persyaratan.index') }}">Persyaratan SNI Award</a></li>
                        <li><a href="{{ route('capacitybuilding.index') }}">Materi Capacity Building</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Penjadwalan</span></a>
                        <ul aria-expanded="false">
                        <li><a href="{{ route('penjadwalanacara.index') }}">Penjadwalan Acara</a></li>
                        <li><a href="{{ route('penugasanse.index') }}">Penjadwalan Se</a></li>
                        <li><a href="{{ route('penugasande.index') }}">Penjadwalan Se</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Data Master</span></a>
                        <ul aria-expanded="false">
                        <li><a href="{{ route('masterpertanyaan.index') }}">Master Pertanyaan</a></li>
                        <li><a href="{{ route('masterdokumen.index') }}">Master Dokumen</a></li>
                        </ul>
                    </li>
				<div class="copyright">
					<p><strong>SNI AWARD</strong> © 2022 All Rights Reserved</p>
					
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->