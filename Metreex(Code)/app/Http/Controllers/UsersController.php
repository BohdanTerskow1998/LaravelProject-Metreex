<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function welcome() 
    {
        $users = cache()->remember('users_data' . request('name_email', 1), 1, function()
        {
            return DB::table('users')->get();
        });

        return view('welcome', compact('users'));
    }

    public function about() 
    {
        $team = cache()->remember('team_data' . request('name_bio_inst', 1), 1, function()
        {
            return DB::table('teams')->paginate(10);
        });

        return view('about', compact('team'));
    }

    public function team_table(Request $request)
    {
        if($request->ajax())
        {
            $team = cache()->remember('team_data' . request('name_bio_inst', 1), 1, function()
            {
                return DB::table('teams')->paginate(10);
            });

            return view('table', compact('team'))->render();
        }
        
    }

    public function users(Request $request)
    {
        if($request->ajax())
        {
            $users = new Users();
            $users->name = $request->name;
            $users->email = $request->email;
            $users->save();

            return response()->json(['success' => 'Data was sending!']);
        }
        
    }
}
