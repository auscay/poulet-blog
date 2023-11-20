<x-layout>

@include('partials._hero')
    
<section class="pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 order-lg-2 pb-6 pb-lg-0">
                @unless (count($posts) == 0)

                @foreach ($posts as $post)
                
                <x-post-card :post="$post" />
                
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
                <x-post-tags :tagsCsv="$post->tags" />

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
<div class="pagination">
    {{ $posts->links() }}
</div>


</x-layout>