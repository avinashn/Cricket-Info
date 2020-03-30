<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Player;
use App\Models\Match;
use App\Models\Stats;


class MainController extends Controller
{
    public function index(){

    	$teams = Team::all();
    	return view('pages.index', compact('teams'));

    }

    public function team($team_id){

    	$team = Team::find($team_id);
    	$players = Player::where('team_id', $team_id)->get();
    	$matches = Match::where('team1', $team->name)->orWhere('team2', $team->name)->orderBy('date', 'desc')->get();

    	foreach($matches as $match){
	    	$team1_id[] = Team::where('name', $match->team1)->select('id')->first();
	    	$team2_id[] = Team::where('name', $match->team2)->select('id')->first();
	    }

    	return view('pages.team', compact('team', 'players', 'matches', 'team1_id', 'team2_id'));
    }

    public function player($player_id){

    	$player = Player::find($player_id)->select('firstName', 'lastName', 'team_id')->first();
    	$team_name = Team::where('id', $player->team_id)->select('name')->first();
    	$stats = Stats::where('player_id', $player_id)->first();
    	return view('pages.player', compact('stats','player','team_name'));
    	
    }
}
