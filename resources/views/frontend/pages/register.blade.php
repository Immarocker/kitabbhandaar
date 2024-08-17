@extends('frontend.layouts.master')

<<<<<<< HEAD
@section('title', 'Kitabbhandaar || Register Page')

@section('main-content')
    <!-- Breadcrumbs -->
=======
@section('title','Kitabbhandaar || Register Page')

@section('main-content')
	<!-- Breadcrumbs -->
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
<<<<<<< HEAD
                            <li><a href="{{ route('home') }}">Home<i class="ti-arrow-right"></i></a></li>
=======
                            <li><a href="{{route('home')}}">Home<i class="ti-arrow-right"></i></a></li>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
                            <li class="active"><a href="javascript:void(0);">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->
<<<<<<< HEAD

=======
            
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
    <!-- Shop Login -->
    <section class="shop login section">
        <div class="container">
            <div class="row"> 
                <div class="col-lg-6 offset-lg-3 col-12">
                    <div class="login-form">
                        <h2>Register</h2>
                        <p>Please register in order to checkout more quickly</p>
                        <!-- Form -->
<<<<<<< HEAD
                        <form class="form" method="post" action="{{ route('register.submit') }}">
=======
                        <form class="form" method="post" action="{{route('register.submit')}}">
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Name<span>*</span></label>
<<<<<<< HEAD
                                        <input type="text" name="name" placeholder="" required="required" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
=======
                                        <input type="text" name="name" placeholder="" required="required" value="{{old('name')}}">
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Email<span>*</span></label>
<<<<<<< HEAD
                                        <input type="email" name="email" placeholder="" required="required" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
=======
                                        <input type="text" name="email" placeholder="" required="required" value="{{old('email')}}">
                                        @error('email')
                                            <span class="text-danger">{{$message}}</span>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Your Password<span>*</span></label>
<<<<<<< HEAD
                                        <input type="password" name="password" placeholder="" required="required">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
=======
                                        <input type="password" name="password" placeholder="" required="required" value="{{old('password')}}">
                                        @error('password')
                                            <span class="text-danger">{{$message}}</span>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Confirm Password<span>*</span></label>
<<<<<<< HEAD
                                        <input type="password" name="password_confirmation" placeholder="" required="required">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
=======
                                        <input type="password" name="password_confirmation" placeholder="" required="required" value="{{old('password_confirmation')}}">
                                        @error('password_confirmation')
                                            <span class="text-danger">{{$message}}</span>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group login-btn">
                                        <button class="btn" type="submit">Register</button>
<<<<<<< HEAD
                                        <a href="{{ route('login.form') }}" class="btn">Login</a>
=======
                                        <a href="{{route('login.form')}}" class="btn">Login</a>
                                        OR
                                        <a href="{{route('login.redirect','facebook')}}" class="btn btn-facebook"><i class="ti-facebook"></i></a>
                                        <a href="{{route('login.redirect','github')}}" class="btn btn-github"><i class="ti-github"></i></a>
                                        <a href="{{route('login.redirect','google')}}" class="btn btn-google"><i class="ti-google"></i></a>
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--/ End Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Login -->
@endsection

@push('styles')
<style>
<<<<<<< HEAD
    .shop.login .form .btn {
        margin-right: 0;
    }
    .btn-facebook {
        background: #39579A;
    }
    .btn-facebook:hover {
        background: #073088 !important;
    }
    .btn-github {
        background: #444444;
        color: white;
    }
    .btn-github:hover {
        background: black !important;
    }
    .btn-google {
        background: #ea4335;
        color: white;
    }
    .btn-google:hover {
        background: rgb(243, 26, 26) !important;
=======
    .shop.login .form .btn{
        margin-right:0;
    }
    .btn-facebook{
        background:#39579A;
    }
    .btn-facebook:hover{
        background:#073088 !important;
    }
    .btn-github{
        background:#444444;
        color:white;
    }
    .btn-github:hover{
        background:black !important;
    }
    .btn-google{
        background:#ea4335;
        color:white;
    }
    .btn-google:hover{
        background:rgb(243, 26, 26) !important;
>>>>>>> efc5db2e52dd3c5e287448d2561fe52e57541dd7
    }
</style>
@endpush