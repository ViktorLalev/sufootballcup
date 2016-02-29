@extends('layouts.app')

@section('title')
Отбори - SU Football Cup
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Отбор</th>
                    <th>Факултет</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($teams as $team)
               
                    <tr>
                        <td><a href="{{url('/teams/'.$team->team_name)}}">{{ $team->team_name }}</a></td>
                        <td>{{Lang::get('faculty.'.$team->faculty)}}</td>
                    </tr>
                 @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection
