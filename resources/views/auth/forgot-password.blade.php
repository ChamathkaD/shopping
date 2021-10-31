<x-guest-layout>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Forgot Password
                </div>
            </div>
        </div>
        <section class="pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto d-flex justify-content-center w-50">
                        <div class="row">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-12">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-10">Forgot Password</h3>
                                        </div>

                                        <x-auth-session-status class="mb-4" :status="session('status')" />

                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <p class="mb-3 font-sm">
                                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                                        </p>

                                                                               <form action="{{route('password.email')}}" method="post">
                                            @csrf

                                            <div class="form-group">
                                                <input
                                                    id="email"
                                                    type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email"
                                                    placeholder="Email"
                                                    value="{{ old('email') }}"
                                                >
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-fill-out btn-block hover-up" >{{ __('Email Password Reset Link') }}</button>
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






