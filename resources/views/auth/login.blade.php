<x-guest-layout>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Login
                </div>
            </div>
        </div>
        <section class="pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-6">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Login</h3>
                                        </div>
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                        <form action="{{route('login')}}" method="post">
                                            @csrf

                                            <div class="form-group">
                                                <input
                                                    id="email"
                                                    type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email"
                                                    placeholder="Email"
                                                >
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input
                                                    id="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    type="password"
                                                    name="password"
                                                    placeholder="Password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>

                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="remember_me" id="remember_me" value="">
                                                        <label class="form-check-label" for="remember_me"><span>Remember me</span></label>
                                                    </div>
                                                </div>
                                                @if (Route::has('password.request'))
                                                <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                                                @endif
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">Log in</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



</x-guest-layout>






