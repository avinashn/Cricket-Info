@extends('layouts.app')
@section('title', 'Player')
@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-footer"><h1>{{$player->firstName}} {{$player->lastName}}</h1> </div>
			  <div class="panel-body" >
			  	<h3 style="margin: 1% 8%;">Team - {{$team_name->name}}</h3>
				<ul class="list-group" style="margin: 2% 10%;">
				  <li class="list-group-item  btn-success">Matches <span class="badge">{{$stats->matches}}</span></li>
				  <li class="list-group-item">Runs <span class="badge">{{$stats->runs}}</span></li>
				  <li class="list-group-item btn-success">Fifties <span class="badge">{{$stats->fifties}}</span></li>
				  <li class="list-group-item">Hundreds <span class="badge">{{$stats->hundreds}}</span></li>
				  <li class="list-group-item btn-success">Highest Score <span class="badge">{{$stats->highestScore}}</span></li>
				</ul>
			  <div class="panel-footer">Cricket Info Test</div>
		</div>
	</div>
	<style type="text/css">
		.list-group-item{
			background-color: none !important;
			    background-color: #5cb85c;
    		border-color: #4cae4c;
    		color:#FFF;
		}
	</style>
@endsection
