<?php

namespace App\Http\Controllers;

use App\covid19;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;



class covid19InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Http::get('https://coronavirus-19-api.herokuapp.com/countries')->json();
        foreach($data as $item) {
            covid19::create($item);
        }
        $covid19 = Covid19::all();
        return view('CRUD.index', compact('covid19'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'country' => 'required|max:255',
            'cases' => 'required',
            'todayCases' => 'required|max:255',
            'deaths' => 'required',
            'todayDeaths' => 'required|max:255',
            'recovered' => 'required',
            'active' => 'required|max:255',
            'critical' => 'required',
            'casesPerOneMillion' => 'required',
            'deathsPerOneMillion' => 'required',
            'totalTests' => 'required',
            'testsPerOneMillion' => 'required'
        ]);
        Covid19::create($request->all());
        return redirect()->route('fill_data.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\covid19  $covid19
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $covid19 = Covid19::find($id);
        return view('CRUD.show', compact('covid19'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\covid19  $covid19
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $covid19 = Covid19::find($id);
        return view('CRUD.edit', compact('covid19'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\covid19  $covid19
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Covid19 $covid19, $id)
    {
        $validatedData = $request->validate([
            'country' => 'required|max:255',
            'cases' => 'required',
            'todayCases' => 'required|max:255',
            'deaths' => 'required',
            'todayDeaths' => 'required|max:255',
            'recovered' => 'required',
            'active' => 'required|max:255',
            'critical' => 'required',
            'casesPerOneMillion' => 'required',
            'deathsPerOneMillion' => 'required',
            'totalTests' => 'required',
            'testsPerOneMillion' => 'required'
        ]);
        
        $covid19 = Covid19::find($id);
        $covid19->update($request->all());
        return redirect()->route('fill_data.index'); 
    }

}
