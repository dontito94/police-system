@extends('layouts.main')



  @section('content')

<div class="section">

   <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">First name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="">

                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Second name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sex" class="col-md-4 control-label">Gender:</label>
                            <div class="col-md-6">
                                <label class="radio-inline">
                                    <input type="radio" class="" name="sex"  value="ME" checked> MALE
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" class="" name="sex"  value="KE"> FEMALE
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="city" class="col-md-4 control-label">
                                City:
                            </label>
                            <div class="col-md-6">
                                <select name="city" id="city" class="form-control">
                                    <option>Dar-es-Salaam</option>
                                    <option>Arusha</option>
                                    <option>Mwanza</option>
                                    <option>Dodoma</option>
                                    <option>Tanga</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="municipal" class="col-md-4 control-label">
                                Municipal:
                            </label>
                            <div class="col-md-6">
                                <select name="municipal" id="municipal" class="form-control">
                                    <option>Kinondoni</option>
                                    <option>Ilala</option>
                                    <option>Temeke</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="ward" class="col-md-4 control-label">
                                Ward:
                            </label>
                            <div class="col-md-6">
                                <select name="ward" id="ward" class="form-control">
                                    <option>Mwenge</option>
                                    <option>Ubungo</option>
                                    <option>Kijitonyama</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="street" class="col-md-4 control-label">
                                Street:
                            </label>
                            <div class="col-md-6">
                                <select name="street" id="street" class="form-control">
                                    <option>Mlalakuwa</option>
                                    <option>Mpakani</option>
                                    <option>Lufungira</option>
                                </select>
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Phone no</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="telephone" value="{{ old('telephone') }}">

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </d

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
 
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@endsection