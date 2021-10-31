<x-guest-layout>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Pages
                    <span></span> Register
                </div>
            </div>
        </div>
        <section class="pt-20 pb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto d-flex justify-content-center w-50">
                        <div class="row">

                            <div class="col-lg-12">
                                <div class="login_wrap widget-taber-content p-30 background-white border-radius-5">
                                    <div class="padding_eight_all bg-white">
                                        <div class="heading_s1">
                                            <h3 class="mb-30">Create an Account</h3>
                                        </div>
                                        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                                        <p class="mb-50 font-sm">
                                            Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy
                                        </p>

                                        <form action="{{route('register')}}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input
                                                    id="name"
                                                    type="text"
                                                    name="name"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    placeholder="Username"

                                                >
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>
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
                                                    type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password"
                                                    placeholder="Password">
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input
                                                        id="password_confirmation"
                                                        type="password"
                                                        name="password_confirmation"
                                                        placeholder="Confirm password">

                                            </div>
                                            <div class="login_footer form-group">
                                                <div class="chek-form">
                                                    <div class="custome-checkbox ">
                                                        <input class="form-check-input form-control @error('terms_policy') is-invalid @enderror" type="checkbox" name="terms_policy" id="terms_policy" value="1" >
                                                        <label class="form-check-label" for="terms_policy"><span>I agree to terms &amp; Policy.</span></label>
                                                        @error('terms_policy')
                                                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                                        @enderror

                                                    </div>

                                                </div>

                                                <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                            </div>
                                            <div class="form-group">
                                                <x-button type="submit" name="login"/>
                                            </div>
                                        </form>
                                        <div class="divider-text-center mt-15 mb-15">
                                            <span> or</span>
                                        </div>
                                        <ul class="btn-login list_none text-center mb-15">
                                            <li><a href="#" class="btn btn-facebook hover-up mb-lg-0 mb-sm-4">Login With Facebook</a></li>
                                            <li><a href="#" class="btn btn-google hover-up">Login With Google</a></li>
                                        </ul>
                                        <div class="text-muted text-center">Already have an account? <a href="{{ route('login') }}">Sign in now</a></div>
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






