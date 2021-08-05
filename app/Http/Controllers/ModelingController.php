<?php

namespace App\Http\Controllers;

use App\Modeling;
use App\Product;
use Illuminate\Http\Request;

class ModelingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.model.index', [
            'models' => Modeling::paginate(5),
            'products' => Product::orderBy('name', 'ASC')->pluck('id', 'name')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attr = $this->validate(request(), [
            'name' => 'required',
            'img' => 'required',
            'product_id' => 'required'
        ]);
        $img_req = request('img');
        $ekstName = time() . rand(100, 999) . "." . $img_req->getClientOriginalName();
        $img_req->move(public_path() . '/model_images', $ekstName);
        $attr['img'] = $ekstName;
        Modeling::create($attr);
        return back()->with('success', 'Data berhasil di buat!');
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
        Modeling::findOrFail($id)->delete();
        return back()->with('success', 'Data di hapus!');
    }
}
