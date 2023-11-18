@props(['tagsCsv'])

@php
    $tags = explode(',', $tagsCsv);
@endphp



<div class="mb-5 mb-lg-6">
    @foreach ($tags as $tag)
        
    <a href="/?tag={{$tag}}" class="badge badge-light py-2 px-4 me-2 mb-2 text-700 text-uppercase fs--2">{{$tag}}</a>

    @endforeach

</div>