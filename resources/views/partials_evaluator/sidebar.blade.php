 <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="has-arrow ai-icon" href="{{ route('dashboard') }}" aria-expanded="false">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('showCapacityBuildingDownload') }}" aria-expanded="false">
							<i class="flaticon-381-television"></i>
							<span class="nav-text">Unduh Berkas</span>
						</a>
                    </li>
                    <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Tugas</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="table-bootstrap-basic.html">Tugas Verifikasi</a></li>
                        <li><a href="{{ route('penugasanSe') }}">Tugas SE</a></li>
                        <li><a href="{{ route('berkasDokumen') }}">Tugas DE</a></li>
                    </ul>
                    </li>
                    <li><a class="has-arrow ai-icon" href="{{ route('berkasDokumen') }}" aria-expanded="false">
							<i class="fa fa-file"></i>
							<span class="nav-text">Berkas Peserta</span>
						</a>
                    </li>
                    
				<div class="copyright">
					<p><strong>SNI AWARD</strong> © 2022 All Rights Reserved</p>
					
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->