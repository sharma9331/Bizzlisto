@extends('layouts.app')

@section('content')
    <div class="modall" id="exampleModal" tabindex="-1">
        <div class="modal-content mt-5 mb-5">
            <div class="modal-body">
                <form action="{{ route('password.forget.form') }}" method="POST">
                    @csrf
                    <!----------------------- Main Container -------------------------->
                    <div class="container d-flex justify-content-center align-items-center ">
                        <!----------------------- Login Container -------------------------->
                        <div class="row border rounded-5 p-3 bg-white shadow box-area">
                            <!--------------------------- Left Box ----------------------------->
                            <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box"
                                style="background: #103cbe;">
                                <div class="featured-image mb-3">
                                    <img src="{{ asset('frontend/images/reset.jpg') }}"
                                        class="img-fluid" style="width:100%;">
                                </div>
                            </div>
                            <!-------------------- ------ Right Box ---------------------------->

                            <div class="col-md-6 right-box">
                                <div class="row align-items-center">
                                    <div class="header-text mb-4">
                                        <h2>Forget Password</h2>

                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" name="email"
                                            class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                                    </div>
                                     @error('email')
                                        <div class="alert alert-danger py-1 mb-3 d-flex align-items-center"
                                            role="alert">
                                            <i class="bi bi-exclamation-circle-fill"></i>
                                            <small>{{ $message }}</small>
                                        </div>
                                    @enderror





                                    <div class="input-group mb-3">
                                        <button type="submit" class="btn btn-lg btn-primary w-100 fs-6">submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
