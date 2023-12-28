@extends('layouts.home.master')

@section('container')
<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="card card-pages shadow-none">

        <div class="card-body">
            <h5 class="font-18 text-center">Sign in to continue</h5>

            <form class="form-horizontal m-t-30" action="#html">

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

                <!-- <div class="form-group">
                    <div class="col-12">
                        <div class="checkbox checkbox-primary">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1"> Remember me</label>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="form-group text-center m-t-20">
                    <div class="col-12">
                        <button class="btn btn-primary btn-block btn-lg waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group row m-t-30 m-b-0">
                    <div class="col-sm-5 text-right">
                        <a href="{{url('register')}}" class="text-muted">Create an account</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection
