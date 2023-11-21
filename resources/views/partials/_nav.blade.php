<ul class="spyre-nav">
    @auth
    <li class="spyre-nav-item"><p class="spyre-nav-link">Welcome {{auth()->user()->name}}</p></li>
    <li class="spyre-nav-item"><a href="/posts/manage" class="spyre-nav-link">Manage Posts</a></li>
    <form method="POST" action="/logout">
     @csrf   
    <button type="submit" style="background-color: transparent; border: none; padding: 0; margin: 0; font-family: inherit; cursor: pointer; outline: none;" name="submit" class="spyre-nav-item"><p class="spyre-nav-link">Logout</p></button>
    </form>
    <li class="spyre-nav-item"><a href="/posts/create" class="spyre-nav-link">Create Post</a></li>
    @else
    <li class="spyre-nav-item"><a href="/" class="spyre-nav-link">Homepage</a></li>
    <li class="spyre-nav-item"><a href="/register" class="spyre-nav-link">Register</a></li>
    <li class="spyre-nav-item"><a href="/login" class="spyre-nav-link">Login</a></li>
    <li class="spyre-nav-item"><a href="/posts/create" class="spyre-nav-link">Create Post</a></li>
    @endauth
</ul>