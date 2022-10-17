@extends('layouts.app')

<!-- prettier-ignore -->
@section('content')
<div class="login-container">
    <div class="header mt-5">
        <div class="img-container d-flex justify-content-center">
            <img
                src="{{ URL::asset('images/eudc_1.svg') }}"
                class="w-5"
                alt="LMS LOGO"
            />
        </div>
        <div class="text-container text-center text-light">
            <div class="d-flex justify-content-center">
                <div
                    class="alert-message alert alert-danger w-sm-100 mt-3"
                    role="alert"
                >
                    <small>Incorrect IDN or Password</small>
                </div>
            </div>
            <!-- <p class="lead mt-4">Sign in to <span class="text">LMS</span></p> -->
        </div>
        <div class="login-form d-flex justify-content-center">
            <div class="card rounded text-light" style="width: 24rem">
                <form action="#" method="post" class="card-body">
                    <div class="input-group mt-1">
                        <label for="email" class="form-label label-text"
                            >IDN</label
                        >
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-contol rounded mt-1 form-control-sm w-100"
                        />
                    </div>
                    <div class="input-group mt-3">
                        <div class="d-flex justify-content-around">
                            <label for="password" class="form-label label-text"
                                >Password</label
                            >

                            <a class="text text-decoration-none" href="#"
                                >Forgot password?</a
                            >
                        </div>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-contol rounded mt-1 form-control-sm w-100"
                        />
                    </div>
                    <div class="input-group mt-3">
                        <input
                            type="submit"
                            value="Sign in"
                            class="btn submit-btn rounded mt-2 mb-2 w-100"
                        />
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="footer mt-5">
        <div class="d-flex others justify-content-center">
            <a href="#" class="text text-decoration-none others-text">Terms</a>
            <a href="#" class="text text-decoration-none others-text"
                >Privacy</a
            >
            <a href="#" class="text text-decoration-none others-text"
                >Security</a
            >
            <small class="text-secondary mx-4">Contact US</small>
        </div>
    </div>
</div>
@endsection
