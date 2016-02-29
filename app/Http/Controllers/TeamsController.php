<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Player;
use Maatwebsite\Excel\Facades\Excel;
use DB;

class TeamsController extends Controller
{
    public function index()
    {
    	$teams = User::all();

    	return view('teams.index', ['teams' => $teams]);
    }
    public function show($team_name)
    {
    	$team = DB::table('users')->where('team_name', '=', $team_name)->get();

    	$players=DB::table('players')->where('team_id','=',$team[0]->id)->get();

    	return view('teams.show', ['team' => $team,'players'=>$players]);

    }
    public function edit($team_name)
    {
    	$team = DB::table('users')->where('team_name', '=', $team_name)->get();

    	$players=DB::table('players')->where('team_id','=',$team[0]->id)->get();

    	return view('teams.edit', ['team' => $team,'players'=>$players]);

    }
    protected function create(Request $request)
    {
    	
        Player::create([
            'name' => $request->name,
            'fn' => $request->fn,
            'team_id' => $request->team_id,
        ]);

        return redirect()->action('TeamsController@edit',$request->team_name);
    }
     protected function delete(Request $request)
    {
     	
        $user = Player::find($request->player);

		$user->delete();
        return redirect()->action('TeamsController@edit',$request->team_name);
    }
     protected function export()
    {
        $teams = User::all();
        
       
        $data = array();
        foreach ($teams as $team) {
            $data[]=array($team->team_name);
        }
            

        Excel::create('SUFC-Teams-2016', function($excel) use($data) {

            $excel->sheet('Отбори', function($sheet) use($data) {

                $sheet->fromArray($data);

            });

        })->export('xls');
        
    }
            
}
