@extends('layouts.app')
@section('title', 'Cricket Info')
@section('content')
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-footer">Teams</div>
			  <div class="panel-body">
			  	<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Team Name</th>
				        <th>Club State</th>
				        <th>Logo</th>
				      </tr>
				    </thead>
				    <tbody>
				    	@foreach($teams as $team)
					      <tr>
					        <td><a href="{{URL::to('team')}}/{{$team->id}}">{{ $team->name }}</a></td>
					        <td>{{ $team->clubState }}</td>
					        <td><img  width=100 height=100 src="{{ $team->logoUri }}"></td>
					      </tr>
					    @endforeach
				    </tbody>
				  </table>
			  </div>
			  <div class="panel-footer">Cricket Info Test</div>
		</div>
	</div>
@endsection