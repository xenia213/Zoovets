<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserCsv;
use App\Models\User;
use App\Models\Csv;

class PokazatelController extends Controller
{
    public function show(){

         $usercsvid = UserCsv::whereIn('user_id', User::find(auth()->user()->id))
         ->value('vet1_id');
           
         $user = Csv::orderBy('id','DESC')
         ->where('id', '=', $usercsvid)
         ->get();
 
     // dd($user);
      
         return view('profile.pokazatel', [
          'user' => $user,
         ]
          );



    }
      
}
