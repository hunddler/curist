@extends('frontend.layouts.layout')
@section('title','Signup')

@section('content')
    <!-- sign up form section start-->
    <section class="service-section bg-color-grey section-gap-login">
        <div class="container mt-4">
            <div class="col-md-6 mx-auto">
                <div class="card box-shadow-vendor p-3">
                    <div class="card-body">
                        <div class="become-form">
                            <form method="POST" action="{{ url('doctor/register') }}">
                                @csrf
                                        <!-- <div class="gmz-loader ">
                                <div class="loader-inner">
                                    <div class="spinner-grow text-info align-self-center loader-lg"></div>
                                </div>
                            </div> -->
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <h2 class="title login-title mb-0 mt-1">Create New Account</h2>
                                        <p>Enter your credentials to create new account.</p>
                                    </div>
                                </div>
                                <div class="row mb-2">
                                    <div class="col-md-6 col-12 mb-2">
                                        <div class="google-btn">
                                            <a href="#"><span class="fab fa-google"></span> &nbsp;Google</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 mb-2">
                                        <div class="facebook-btn">
                                            <a href="#"><span class="fab fa-facebook"></span> &nbsp;Facebook</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                            <label for="first-name">Name</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12">
                                        <label for="first-name">Email address</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Password<span class="required">*</span> </label>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="password">Confirm Password<span class="required">*</span> </label>

                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>
                                </div>

                                <button type="submit" class="template-btn wow fadeInUp w-100">Sign Up</button>

                                <div class="row mt-3">
                                    <div class="col-md-12 text-center">Have an account? <a href="/login">Sign In</a></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sign up form section end-->
@endsection