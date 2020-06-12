@extends('layouts.app')

@section('content')

<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Al-Mishkah<span></span></a>
        
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
          <li><a href="{{ route('login') }}">Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <br>
  <br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="Firstname" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Last-Name" class="col-md-4 col-form-label text-md-right">{{ __('LastName') }}</label>

                            <div class="col-md-6">
                                <input id="LastName" type="text" class="form-control" name="LastName">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$" class="col-md-4 col-form-label text-md-right">{{ __('Parent E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,}$" type="email" class="form-control @error('email') is-invalid @enderror" name="ParentEmail" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Student PhoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('PhoneNumber') }}</label>

                            <div class="col-md-6">
                                <input id="PhoneNum" type="text" class="form-control" name="phonenum">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Parent PhoneNumber" class="col-md-4 col-form-label text-md-right">{{ __('Parents PhoneNumber') }}</label>

                            <div class="col-md-6">
                                <input id="ParentNum" type="text" class="form-control" name="parentnum">
                            </div>
                        </div>
                        <!----- Education Year -------------->
                        <div class="form-group row">
                            <label for="Education">Choose a Education Year:</label>
                            <select id="Education" name="selected">
                                <option value="1">1 Secondary</option>
                                <option value="2">2 Secondary</option>
                                <option value="3">3 Secondary</option>
                            </select>
                                     &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp;


                                    <fieldset data-role="controlgroup" name="Gender">
        <label for="male" >Male</label>
        <input type="radio" name="gender" id="male" value="male" checked>
        <label for="female">Female</label>
        <input type="radio" name="gender" id="female" value="female">
        <label for="Helicopter">Helicopter</label>
        <input type="radio" name="gender" id="Helicopter" value="Helicopter">
      </fieldset>
                                
                                </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
