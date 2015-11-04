<?php

namespace Suap\Http\Controllers;

use Illuminate\Http\Request;

use Suap\Http\Requests;
use Suap\Http\Requests\BrandRequest;
use Suap\Http\Requests\BrandUpdateRequest;
use Suap\Http\Controllers\Controller;
use Suap\Brand;

class BrandController extends Controller
{

    public function __construct() {
        $this->beforeFilter('@find', ['only' => ['show','edit','update','destroy']]);
    }

    public function find() {
        $this->brand = Brand::findOrFail($route->getParameter('brands'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        return view('brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $br = [
            'name'=> $request['name'],
            //'file_id'=> $file->id,
            'file_id'=> $request['file'],
            ];

        return $br;
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
        return view('brand.edit',['brand'=>$this->brand]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandUpdateRequest $request, $id)
    {
        $this->brand->update($request->all());
        $file = File::find($this->service->file_id);
        $file->update(['name'=> $request['file']]);
        return "Actualizado";
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
