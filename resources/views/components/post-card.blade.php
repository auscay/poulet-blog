@props(['post'])



<div class="mb-8">
    <h2 class="mb-4 text-uppercase"><a href="/posts/{{$post->id}}" class="text-body">{{$post->title}}</a></h2>
    <p class="text-700 fw-medium">{{$post->pretext}}</p>
    <div class="mt-4 d-flex justify-content-between">
        <div class="w-50">
            <img src="{{$post->photo ? asset('storage/' . $post->photo) : asset('img/no-image.png')}}" alt="" class="rounded-circle float-start me-2" width="40" height="40" />
            <p class="fs--1 lh-13 text-700">{{$post->author}}<br /><span class="fs--3">{{$post->created_at}}</span></p>
        </div>
        <a href="/posts/{{$post->id}}" class="h6 fw-bold text-uppercase text-primary pt-3">Read more<i class="zmdi zmdi-chevron-right ps-4"></i></a>
    </div>
</div>