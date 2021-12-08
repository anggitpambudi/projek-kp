<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Member;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $member = Member::all();
        return view('dashboard',compact('member'));
    }

    public function table()
    {
        $member = Member::all();
        return view('table',compact('member'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'office' => 'required',
            'age' => 'required'
        ]);
        Member::create([
            "name" => $request["name"],
            "job" => $request["job"],
            "office" => $request["office"],
            "age" => $request["age"]
        ]);
        return redirect('/table');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $member = Member::find($id);
        return view('table',compact('member'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Member::find($id);
        return view('edit',compact('member'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'office' => 'required',
            'age' => 'required'
        ]);

        $member = Member::find($id)->update([
        "name" => $request['name'],
        "job" => $request['job'],
        "office" => $request['office'],
        "age" => $request['age'],
        ]);
        
        return redirect('/table');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect('table');
    }
}
