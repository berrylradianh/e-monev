@extends('layouts.home.master')

@section('container')
<div class="accountbg"></div>
<div class="wrapper-page">
    <div class="card card-pages shadow-none">

        <div class="card-body">
            <h5 class="font-18 text-center">Sign in</h5>

            <form class="form-horizontal m-t-30" action="#" method="POST">
                @csrf
                <div class="form-group">
                    <div class="col-12">
                        <label>Email</label>
                        <input class="form-control" name="email" type="email" placeholder="Masukkan Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-12">
                        <label>Password</label>
                        <div class="input-group">
                            <input class="form-control" name="password" id="password" type="password"  placeholder="Masukkan Password" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="togglePassword">&#128065;</button>
                            </div>
                        </div>
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

                <div class="form-group mb-0 row">
                    <div class="col-12 m-t-10 text-center">
                        <a href="{{url('register')}}" class="text-muted">Create an account</a>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<script>
    document.getElementById('togglePassword').addEventListener('click', function() {
        var passwordInput = document.getElementById('password');
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });
</script>
@endsection
