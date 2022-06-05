<?php

namespace App\Http\Controllers;

use App\Models\Csv;
use Illuminate\Http\Request;

class CsvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $csv = Csv::orderBy('id', 'DESC')->get();

        return view('admin.csv.index', [
            'csv' => $csv
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.csv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $new_csv = new Csv();
        $new_csv->lastname = $request->lastname;
        $new_csv->firstname = $request->firstname;
        $new_csv->pitomec = $request->pitomec;
        $new_csv->pokazatel1 = $request->pokazatel1;
        $new_csv->pokazatel2 = $request->pokazatel2;
        $new_csv->pokazatel3 = $request->pokazatel3;

        $new_csv -> save();

        return redirect() -> back() ->withSuccess('Пациент добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Csv  $csv
     * @return \Illuminate\Http\Response
     */
    public function show(Csv $csv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Csv  $csv
     * @return \Illuminate\Http\Response
     */
    public function edit(Csv $csv)
    {
        return view('admin.csv.edit', [
            'csv' => $csv,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Csv  $csv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Csv $csv)
    {
            $csv->lastname = $request->lastname;
            $csv->firstname = $request->firstname;
            $csv->pitomec = $request->pitomec;
            $csv->pokazatel1 = $request->pokazatel1;
            $csv->pokazatel2 = $request->pokazatel2;
            $csv->pokazatel3 = $request->pokazatel3;
            $csv->save();
    
            return redirect()->back()->withSuccess('Данные обновлены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Csv  $csv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Csv $csv)
    {
        $csv -> delete();
        return redirect() -> back() ->withSuccess('Данные удалены');
    }
}
