@extends('layouts.app')
@section('title')
{{$team[0]->team_name}} - SU Football Cup
@endsection
@section('content')
  @if (Auth::user()->id===$team[0]->id)
  <div class="container">
      <div class="row">
           <div class="col-sm-6">
            <h2>Информация за отбора:</h2>
              <ul>
                <li>Отбор:<b> {{$team[0]->team_name}}</b></li>
                <li>Капитан: {{$team[0]->name}}</li>
                <li>Фалултет: {{Lang::get('faculty.'.$team[0]->faculty)}}</li>        
                <li>Телефон: {{$team[0]->phone}}</li>        
                <li>Е-mail:  {{$team[0]->email}}</li>        
              </ul>
              <h2>Състав</h2>
               <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Име</th>
                      <th>Факултетен Номер</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                   
                  @foreach ($players as $player)
                 
                      <tr>
                           <td>1</td>
                          <td>{{ $player->name }}</a></td>
                          <td>{{ $player->fn }}</a></td>
                          
                      </tr>
                  
                    @endforeach
                 
                    
                  </tbody>
                </table>
           </div> 
           <div class="col-sm-6">
              <div class="panel panel-default">
                  <div class="panel-heading">Добави Играч</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="POST" 
                      action="{{ url('/teams/'.Auth::user()->team_name.'/create') }}">
                          {!! csrf_field() !!}

                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Име</label>

                              <div class="col-md-6">
                                  <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                                  @if ($errors->has('name'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('name') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                           <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Факултетен Номер</label>

                              <div class="col-md-6">
                                  <input type="text" class="form-control" name="fn" value="{{ old('fn') }}">

                                  @if ($errors->has('fn'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('fn') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>
                          
                             

                              <div class="col-md-6">
                                  <input type="hidden" class="form-control" name="team_id" value="{{$team[0]->id}}">

                              </div>
                              <div class="col-md-6">
                                  <input type="hidden" class="form-control" name="team_name" value="{{$team[0]->team_name}}">

                              </div>
                          
                          

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      <i class="fa fa-btn fa-user"></i>Добави
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading">Изтрий Играч</div>
                  <div class="panel-body">
                      <form class="form-horizontal" role="form" method="post" 
                      action="{{ url('/teams/'.Auth::user()->team_name.'/delete') }}">
                          {!! csrf_field() !!}

                          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Име</label>

                              <div class="col-md-6">
                                  
                                  <select class="form-control" name='player'>
                                  @foreach ($players as $player)
                                        <option value="{{ $player->id }}">{{ $player->name }}</option>
                                    @endforeach
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      <i class="fa fa-btn fa-user"></i>Изтрий
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
  @else
   <div class="container">
      <div class="row">
           <div class="alert alert-danger">
               <strong>Внимание!</strong> Нямате достъп до тази страница.
          </div>
      </div>
  </div>
  @endif
@endsection
