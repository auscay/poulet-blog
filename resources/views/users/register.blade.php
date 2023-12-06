<x-layout>
 <!-- Section -->
 <section class="py-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 order-lg-2">
                <div class="row minh-100vh h-100 align-items-center">
                    <form action="/users" method="POST" class="col px-lg-6 px-xl-8 px-xxl-11 py-9 py-lg-4">
                        @csrf
                        <h1>Please sign up</h1>
                        <h5 class="mb-5 text-700">Fill out the form to get started</h5>
                        <div class="form-group mb-4">
                            <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Full name" value={{old('name')}}>
                            @error('name')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Email address" value={{old('email')}}>
                            @error('email')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" value={{old('password')}}>
                            @error('password')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control form-control-lg" id="password-again" name="password_confirmation" placeholder="Confirm Password" value="{{old('password_confirmation')}}">
                            @error('password_confirmation')
                                <p class="text-danger text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        <button type="submit" name="submit" class="btn btn-lg btn-secondary w-100 mb-4" disabled>Sign Up</button>


                        <p class="text-center text-600">Already have account? <a href="/login">Sign In</a></p>
                        
                        <div class="mt-5 pt-5 border-top-centered-30 border-top-centered-faded">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-facebook w-100"><i class="zmdi zmdi-facebook"></i><span class="d-none d-lg-inline ms-3">Facebook</span></button>
                                </div>
                                <div class="col-6">
                                    <button type="button" class="btn btn-twitter w-100"><i class="zmdi zmdi-twitter"></i><span class="d-none d-lg-inline ms-3">Twitter</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-6 order-lg-1 px-0 py-9 position-relative">
                <div class="bg-container overlay overlay-10" style="background-image: url('img/default.png')"></div>
            </div>
        </div>
    </div>
</section>
<!-- End of Section -->
</x-layout>