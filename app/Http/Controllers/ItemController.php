<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;
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
      $items=\App\Item::paginate(10);
      return view('item.index',compact('items'));

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
          "qtyProvPresentation"=>"required|integer",
          "providerPrice"=>"required|numeric",
          "standardPrice"=>"required|numeric",
          "name"=>"required",
        ];
        $messages=[
          "required"=>"Ingresar el :attribute es obligatorio",
          "integer"=>"El :attribute debe ser un número",
          "unique"=>"El :attribute elegido ya está en uso"
        ];
        $request->validate($rules, $messages);
        // var_dump($request);
        // exit;
        $item=\App\Item::create([
          'code'=>$request->input('code'),
          'name'=>$request->input('name'),
          'qtyProvPresentation'=>$request->input('qtyProvPresentation'),
          'providerPrice'=>$request->input('providerPrice'),
          'standardPrice'=>$request->input('standardPrice'),
          'status'=>1,
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
