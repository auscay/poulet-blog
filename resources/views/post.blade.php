@extends('single-layout')

@section('content')

@include('partials._single-hero')

 <!-- Section -->
 <section id="section-2" class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2 pb-6 pb-lg-0">
                <h2 class="mb-5 text-uppercase">{{$post->title}}</h2>
                <figure class="figure mb-4">
                    <img src="img/img-24.jpg" class="pt-2 figure-img img-fluid w-100" alt="" />
                    <figcaption class="figure-caption text-end fst-italic">{{$post->pretext}}</figcaption>
                </figure>
                <p class="mb-4 text-800 fw-medium">{{$post->content}}</p>
                
                <div class="row mb-4">
                    <div class="col-lg-4 mb-4">
                        <a data-fancybox="gallery" href="../assets/img/img-25.jpg"><img src="../assets/img/img-25.jpg" class="img-fluid w-100" alt="" /></a>
                    </div>
                    <div class="col-lg-8 mb-4">
                        <a data-fancybox="gallery" href="../assets/img/img-26.jpg"><img src="../assets/img/img-26.jpg" class="img-fluid w-100" alt="" /></a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a data-fancybox="gallery" href="../assets/img/img-27.jpg"><img src="../assets/img/img-27.jpg" class="img-fluid w-100" alt="" /></a>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <a data-fancybox="gallery" href="../assets/img/img-28.jpg"><img src="../assets/img/img-28.jpg" class="img-fluid w-100" alt="" /></a>
                    </div>
                </div>
                
            </div>

            <div class="col-lg-4 ps-lg-5 order-lg-1">
                <img src="../assets/img/profiles/profile-thumbnal-02.jpg" alt="" class="rounded-circle float-start me-2" width="55" height="55" />
                <p class="mb-5 mb-lg-6 text-700">{{$post->author}}<br /><span class="fs--1">Sept 16, 2018</span></p>

                <h5 class="mb-4 text-uppercase text-600">Share</h5>
                <div class="mb-5 mb-lg-6">
                    <a href="#" class="btn btn-light btn-sm me-2 mb-2 text-700"><i class="zmdi zmdi-facebook zmdi-hc-fw"></i></a>
                    <a href="#" class="btn btn-light btn-sm me-2 mb-2 text-700"><i class="zmdi zmdi-twitter zmdi-hc-fw"></i></a>
                    <a href="#" class="btn btn-light btn-sm me-2 mb-2 text-700"><i class="zmdi zmdi-google-plus zmdi-hc-fw"></i></a>
                    <a href="#" class="btn btn-light btn-sm me-2 mb-2 text-700"><i class="zmdi zmdi-email zmdi-hc-fw"></i></a>
                </div>

                <h5 class="mb-4 text-uppercase text-600">Tags</h5>
                <div class="mb-5 mb-lg-6">
                    <a href="#" class="badge badge-light py-2 px-4 me-2 mb-2 text-700 text-uppercase fs--2">Security</a>
                    <a href="#" class="badge badge-light py-2 px-4 me-2 mb-2 text-700 text-uppercase fs--2">Vestibulum</a>
                    <a href="#" class="badge badge-light py-2 px-4 me-2 mb-2 text-700 text-uppercase fs--2">Dolor</a>
                    <a href="#" class="badge badge-light py-2 px-4 me-2 mb-2 text-700 text-uppercase fs--2">Suspendisse</a>
                    <a href="#" class="badge badge-light py-2 px-4 me-2 mb-2 text-700 text-uppercase fs--2">Consectetur</a>
                </div>

                <h5 class="mb-4 text-uppercase text-600">Categories</h5>
                <ul class="mb-5 mb-lg-6 ps-4 text-600">
                    <li class="mb-1"><a href="#" class="text-600">Strategy</a></li>
                    <li class="mb-1"><a href="#" class="text-600">Development</a></li>
                    <li class="mb-1"><a href="#" class="text-600">Consulting</a></li>
                    <li class="mb-1"><a href="#" class="text-600">Financial</a></li>
                    <li class="mb-1"><a href="#" class="text-600">Architecture</a></li>
                    <li class="mb-1"><a href="#" class="text-600">Investment</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of Section -->

@endsection