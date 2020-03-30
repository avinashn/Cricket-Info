@extends('layouts.app')
@section('title', 'Team')
@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-footer"><h1>{{$team->name}}</h1></div>
			  <div class="panel-body">

				<ul class="nav nav-pills">
					<li class="active"><a data-toggle="pill" href="#match-fixtures">Match Fixtures</a></li>
					<li><a data-toggle="pill" href="#players">Players</a></li>
				</ul>

				<div class="tab-content">
					<div id="match-fixtures" class="tab-pane fade in active">
					  <h3>Match fixtures</h3>
					  <table class="table table-striped">
						    <thead>
						      <tr>
						      	<th>#</th>
						        <th>Team 1</th>
						        <th>Team 2</th>
						        <th>Winner</th>
						        <th>Date</th>
						      </tr>
						    </thead>
						    <tbody>
						    	@foreach($matches as $key => $match)
							      <tr>
							      	<td>{{ $key + 1 }}</td>
							        <td><a href="{{URL::to('team')}}/{{$team1_id[$key]->id}}"> {{ $match->team1 }}</a></td>
							        <td><a href="{{URL::to('team')}}/{{$team2_id[$key]->id}}">{{ $match->team2 }}</td>
							        <td>{{ $match->winner }}</td>
							        <td>{{ $match->date }}</td>
							      </tr>
							    @endforeach
							    
						    </tbody>
						  </table>
					</div>
					<div id="players" class="tab-pane fade">
					 	<h3>Players</h3>
			  			<table class="table table-striped">
						    <thead>
						      <tr>
						      	<th>#</th>
						        <th>First Name</th>
						        <th>Last Name</th>
						        <th>Image</th>
						      </tr>
						    </thead>
						    <tbody>
						    	@foreach($players as $key => $player)
							      <tr>
							      	<td>{{ $key + 1 }}</td>
							        <td><a href="{{URL::to('player')}}/{{$player->id}}">{{ $player->firstName }}</a></td>
							        <td>{{ $player->lastName }}</td>
							        <td><img width=100 height=100 src="{{ $player->imageUri }}"></td>
							      </tr>
							    @endforeach
						    </tbody>
						  </table>
					</div>
				</div>
			  </div>
			  <div class="panel-footer">Cricket Info Test</div>
		</div>
	</div>
@endsection