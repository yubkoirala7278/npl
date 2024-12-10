<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeamRequest;
use App\Models\Season;
use App\Models\Team;
use App\Models\TeamUser;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $playerWithTeam=TeamUser::with('user','team','season')->latest()->get();
        $players=User::latest()->get();
        $teams=Team::latest()->get();
        $seasons=Season::latest()->get();
        return view('welcome',compact('playerWithTeam','players','teams','seasons'));
    }

    public function store(TeamRequest $request){
        try{
            TeamUser::create([
                'user_id'=>$request['player'],
                'team_id'=>$request['team'],
                'season_id'=>$request['season']
            ]);
            return back()->with('success','Player added to the team successfully!');
        }catch(\Throwable $th){
            return back()->with('error',$th->getMessage());
        }
    }
}
