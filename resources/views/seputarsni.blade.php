@extends('layouts.frontend.master')
@section('content')
        <!-- Start Page Title Area -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Seputar SNI Award</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="default-shape">
                <div class="shape-1">
                    <img src="{{ asset('assets') }}/img/shape/1.png" alt="image">
                </div>

                <div class="shape-2 rotateme">
                    <img src="{{ asset('assets') }}/img/shape/2.png" alt="image">
                </div>

                <div class="shape-3">
                    <img src="{{ asset('assets') }}/img/shape/3.svg" alt="image">
                </div>

                <div class="shape-4">
                    <img src="{{ asset('assets') }}/img/shape/4.svg" alt="image">
                </div>

                <div class="shape-5">
                    <img src="{{ asset('assets') }}/img/shape/5.png" alt="image">
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Single Blog Area -->
        <section class="single-blog-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details-desc">
                            <div class="article-image">
                                <img src="" alt="image">
                            </div>
                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li>
                                            <span>Diterbitkan :</span> 
                                            <a href="index.html"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-5">
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <!-- End Single Blog Area -->

@endsection