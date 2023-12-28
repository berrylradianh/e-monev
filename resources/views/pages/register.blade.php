@extends('layouts.home.master')

@section('container')
<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="card card-pages shadow-none">

        <div class="card-body">
            <h5 class="font-18 text-center">Register</h5>

            <form class="form-horizontal m-t-30" action="#">

                <div class="form-group">
                    <div class="col-12">
                        <label>Email</label>
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>Username</label>
                        <input class="form-control" type="text" required="" placeholder="Username">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>Password</label>
                        <input class="form-control" type="password" required="" placeholder="Password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label font-weight-normal" for="customCheck1">I accept <a href="#" class="text-primary">Terms and Conditions</a></label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Register</button>
                    </div>
                </div>

                <div class="form-group mb-0 row">
                    <div class="col-12 m-t-10 text-center">
                        <a href="{{url('login')}}" class="text-muted">Already have account?</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
