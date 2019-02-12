<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Validator;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('item.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $department = Department::find($department_id);
      // $state = State::find($department->state_id);
      // $country = Country::find($state->country_id);
      //
      // $variables = [
      //   "country" => $country,
      //   "state" => $state,
      //   "department" => $department,
      // ];
      return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->except('_token');
        $rules=[
          "code"=>"required|unique:items",
        ];
        $messages=[
          "required"=>"Ingresar el :attribute es obligatorio",
          "unique"=>"El :attribute elegido ya está en uso"
        ];
        $request->validate($rules, $messages);

        $item=\App\Item::create([
          'code'=>$request->input('code'),
          
        ]);
        return redirect('/items/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
