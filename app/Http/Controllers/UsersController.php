<?php

namespace App\Http\Controllers;

use App\Users;
use App\Skill;
use Illuminate\Http\Request;
use DB;
use Auth;

class UsersController extends Controller
{

  public function afficher()
  {

  $users = auth()->user();
  return $users;

    return view('users', [
    'users' => $users, 
    ]);

  }

  public function afficher_users()
  {
    $users_admin = User::all();
    return view('users_admin', [
      'users'=> $users_admin, 
      ]);
  }

  public function btn_skill()
    {
      $skills = Skill::all();
      return view('skills', [
        'skills' => $skills,
       ]);
        
    }

  public function btn_skill_admin()
    {
      $skills = Skill::all();
      return view('skills_admin', [
        'skills' => $skills,
       ]);
        
    }
  public  function update(Request $req)
    {
        DB::table('skill_user')->where('user_id', Auth::user()->id)->where('skill_id', $req->id)->update(['level' => $req->level ]);
        return redirect()->route('current_user');
    }
    public  function delete(Request $req)
    {
        DB::table('skill_user')->where('user_id', Auth::user()->id)->where('skill_id', $req->id)->delete();
        return redirect()->route('current_user');
    }
}