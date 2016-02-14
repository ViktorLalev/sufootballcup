@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Регистрация</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}
                         <div class="form-group{{ $errors->has('team_name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Име на отбор</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="team_name" value="{{ old('team_name') }}">

                                @if ($errors->has('team_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('team_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Капитан</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Адрес</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Телефон</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('faculty') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Факултет</label>

                            <div class="col-md-6">
                                
                                 <select class="form-control" name='faculty' value="{{ old('faculty') }}">
                                      <option value="1">ИСТОРИЧЕСКИ ФАКУЛТЕТ</option>
                                      <option value="2">ФИЛОСОФСКИ ФАКУЛТЕТ</option>
                                      <option value="3">ФАКУЛТЕТ ПО КЛАСИЧЕСКИ И НОВИ ФИЛОЛОГИИ</option>
                                      <option value="4">ФАКУЛТЕТ ПО СЛАВЯНСКИ ФИЛОЛОГИИ</option>
                                      <option value="5">ЮРИДИЧЕСКИ ФАКУЛТЕТ</option>
                                      <option value="6">ФАКУЛТЕТ ПО ПЕДАГОГИКА</option>
                                      <option value="7">ФАКУЛТЕТ ПО НАЧАЛНА И ПРЕДУЧИЛИЩНА ПЕДАГОГИКА</option>
                                      <option value="8">ФАКУЛТЕТ ПО ЖУРНАЛИСТИКА И МАСОВА КОМУНИКАЦИЯ</option>
                                      <option value="9">БОГОСЛОВСКИ ФАКУЛТЕТ</option>
                                      <option value="10">СТОПАНСКИ ФАКУЛТЕТ</option>
                                      <option value="11">ФАКУЛТЕТ ПО МАТЕМАТИКА И ИНФОРМАТИКА</option>
                                      <option value="12">ФИЗИЧЕСКИ ФАКУЛТЕТ</option>
                                      <option value="13">ФАКУЛТЕТ ПО ХИМИЯ И ФАРМАЦИЯ</option>
                                      <option value="14">БИОЛОГИЧЕСКИ ФАКУЛТЕТ</option>
                                      <option value="15">ГЕОЛОГО-ГЕОГРАФСКИ ФАКУЛТЕТ</option>
                                      <option value="16">МЕДИЦИНСКИ ФАКУЛТЕТ</option>
                                </select> 
                          </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Парола</label>

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
                            <label class="col-md-4 control-label">Потвърдете паролата</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i>Регистрация
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
