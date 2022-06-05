<?php

namespace App\Http\Controllers;

use App\Models\UserCsv;
use App\Models\User;
use App\Models\Csv;
use Illuminate\Http\Request;

class UserCsvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $users = User::orderBy('id', 'DESC')
         ->whereNotIn('id', UserCsv::get('user_id')) ->get();
          
       
        $csvs = Csv::orderBy('id', 'DESC')
        ->whereNotIn('id', UserCsv::get('vet1_id')) ->get();

        return view('admin.usercsv.create', [
            'users' => $users,
            'csvs' => $csvs,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       

        $userCsv = new UserCsv();
        $userCsv -> user_id = $request->user_id;
        $userCsv -> vet1_id = $request->vet1_id;
        $userCsv -> save();

        return redirect() ->back() ->withSuccess('Добавлено');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCsv  $userCsv
     * @return \Illuminate\Http\Response
     */
    public function show(UserCsv $userCsv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCsv  $userCsv
     * @return \Illuminate\Http\Response
     */
    public function edit(UserCsv $userCsv)
    {   
        
        $users = User::orderBy('created_at', 'DESC')
            ->get();
        $csvs = Csv::orderBy('id', 'DESC')
             ->get();

        return view('admin.usercsv.edit', [
            'users' => $users,
            'userCsv' => $userCsv,
            'csvs' => $csvs,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserCsv  $userCsv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserCsv $userCsv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserCsv  $userCsv
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserCsv $userCsv)
    {
        //
    }
}
