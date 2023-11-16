@extends('layout')

@section('content')

@include('partials._hero')
    
<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2 pb-6 pb-lg-0">
                @unless (count($posts) == 0)

                @foreach ($posts as $post)
                <div class="mb-8">
                    <h2 class="mb-4 text-uppercase"><a href="/posts/{{$post->id}}" class="text-body">{{$post->title}}</a></h2>
                    <p class="text-700 fw-medium">{{$post->pretext}}</p>
                    <div class="mt-4 d-flex justify-content-between">
                        <div class="w-50">
                            <img src="{{asset('img/no-image.png')}}" alt="" class="rounded-circle float-start me-2" width="40" height="40" />
                            <p class="fs--1 lh-13 text-700">{{$post->author}}<br /><span class="fs--3">{{$post->created_at}}</span></p>
                        </div>
                        <a href="/posts/{{$post->id}}" class="h6 fw-bold text-uppercase text-primary pt-3">Read more<i class="zmdi zmdi-chevron-right ps-4"></i></a>
                    </div>
                </div>
                
                @endforeach

                

                @else
                    <p>No posts found</p>
                @endunless
            </div>
            <div class="col-lg-4 order-lg-1">
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

@endsection