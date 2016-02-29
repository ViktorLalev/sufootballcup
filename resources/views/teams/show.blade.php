@extends('layouts.app')
@section('title')
{{$team[0]->team_name}} - SU Football Cup
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
          
            <h2>Информация за отбора:</h2>
            <ul>
              <li>Име: {{$team[0]->team_name}}</li>
              <li>Капитан: {{$team[0]->name}}</li>
              <li>Фалултет: {{Lang::get('faculty.'.$team[0]->faculty)}}</li>        
            </ul>
           
            <h2>Състав</h2>
             <ol class="list-group">
            @foreach ($players as $player)
               <li>{{ $player->name }}</li>
             @endforeach
            </ol>
            
           
        </div>
        <!--
         <div class="col-sm-6">
         <h2>Класиране - Група А</h2>
           <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Отбор</th>
                    <th>Победи</th>
                    <th>Равенства</th>
                    <th>Загуби</th>
                    <th>Точки</th>
                  </tr>
                </thead>
                <tbody>
                 
               
                    <tr>
                        <td>1</td>
                        <td>Donatix</td>
                        <td>1</td>
                        <td>1</td>
                        <td>1</td>
                        <td>4</td>
                    </tr>
               
                  
                </tbody>
              </table>
         <h2>Програма</h2>
           <table class="table table-hover">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Дата</th>
                    <th colspan ="2">Домакин</th>
                    <th colspan ="2">Гост</th>
                    <th>Група</th>
                  </tr>
                </thead>
                <tbody>
                 
               
                    <tr>
                        <td>1</td>
                        <td>13.02.2016 18:00</td>
                        <td>Donatix</td>
                        <td>2</td>
                        <td>0</td>
                        <td>Лошите</td>
                        <td>А</td>
                    </tr>
               
                  
                </tbody>
              </table>
      </div>-->
    </div>
</div>
@endsection