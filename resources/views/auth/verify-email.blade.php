<x-guest-layout>
    <x-auth-header/>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Verify Email
                </div>
            </div>
        </div>
        <section class="pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto d-flex justify-content-center w-50">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Verify Email</h3>
                                        </div>

                                        <div>
                                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                                        </div>
                                        @if (session('status') == 'verification-link-sent')
                                            <div class="mb-4" style="color: #9acf4f">
                                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                                            </div>
                                        @endif

                                        <div class="d-flex justify-content-between mt-3">
                                            <form method="POST" action="{{ route('verification.send') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <button type="submit" class=" btn btn-fill-out btn-block hover-up" name="login"> {{ __('Resend Verification Email') }}</button>
                                                </div>
                                            </form>

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <button type="submit" class="btn btn-fill-out btn-block hover-up" name="login">  {{ __('Log Out') }}</button>
                                                </div>

                                            </form>
                                        </div>



                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <x-footer/>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <h5 class="mb-5">Now Loading</h5>
                    <div class="loader">
                        <div class="bar bar1"></div>
                        <div class="bar bar2"></div>
                        <div class="bar bar3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>






