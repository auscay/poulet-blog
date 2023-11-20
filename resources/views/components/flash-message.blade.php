@if (session()->has('message'))
<div x-data="{show: true}" x-init="setTimeout(() => show = false, 4000)" x-show="show" class="fixed-top left-1/2 translate-x-n1 bg-danger text-white px-5 py-3">
    <p>
        {{session('message')}}
    </p>
</div>
@endif