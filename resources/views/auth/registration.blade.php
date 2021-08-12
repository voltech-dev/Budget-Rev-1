@extends('layouts.layout')
@section('content')
    <main class="login-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="{{ url('/registration_save') }}" method="POST">
                        @csrf
                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">

                                <input type="text" id="name" class="form-control" name="name" required autofocus>

                                @if ($errors->has('name'))

                                    <span class="text-danger">{{ $errors->first('name') }}</span>

                                @endif

                            </div>

                        </div>
                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">

                                <input type="text" id="name" class="form-control" name="email" required autofocus>

                                @if ($errors->has('email'))

                                    <span class="text-danger">{{ $errors->first('email') }}</span>

                                @endif

                            </div>

                        </div>
                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">

                                <input type="password" id="name" class="form-control" name="password" required autofocus>

                                @if ($errors->has('password'))

                                    <span class="text-danger">{{ $errors->first('password') }}</span>

                                @endif

                            </div>

                        </div>
                        <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">Company</label>

                            <div class="col-md-6">

                                <input type="text" id="name" class="form-control" name="text" required autofocus>

                                @if ($errors->has('text'))

                                    <span class="text-danger">{{ $errors->first('text') }}</span>

                                @endif

                            </div>

                        </div>


                </div>
            </div>

    </main>

@endsection
