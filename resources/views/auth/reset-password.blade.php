<x-guest-layout>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Reset Password
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
                                            <h3 class="mb-30">Reset Password</h3>
                                        </div>
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                                        <form action="{{route('password.update')}}" method="post">
                                            @csrf
                                            <!-- Password Reset Token -->
                                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                            <div class="form-group">
                                                <input
                                                    id="email"
                                                    type="text"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ $email ?? old('email') }}"
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
                                                    required
                                                    type="password"
                                                    name="password"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <input
                                                    id="password_confirmation"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    type="password"
                                                    name="password_confirmation"
                                                    placeholder="Confirm password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                @enderror
                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox">
                                                        <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox12" value="">
                                                        <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                                    </div>
                                                </div>
                                                <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                            </div>
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-fill-out btn-block hover-up" > {{ __('Reset Password') }}</button>
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






