<?php

namespace Suap\Http\Controllers;

use Illuminate\Http\Request;

use Suap\Http\Requests;
use Suap\Http\Requests\ServiceRequest;
use Suap\Http\Controllers\Controller;
use Suap\Service;
use File;

class ServiceController extends Controller
{

    public function __construct(){
        $this->beforeFilter('@find',['only' =>['show','edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->service = Service::findOrFail($route->getParameter('services'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('service.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        //$file = File::create(['name'=> $request['file']]);

        $serv = [
            'name'=> $request['title'],
            'description'=> $request['description'],
            //'file_id'=> $file->id,
            'file_id'=> $request['file'],
            ];

        return $serv;
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
        return view('service.edit',['service'=>$this->service]);
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
        $this->service->update($request->all());
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
