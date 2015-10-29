<?php

namespace Suap\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Suap\Http\Requests;
use Suap\Http\Controllers\Controller;

use Suap\Client;
use Suap\File;

use Session;
use Redirect;

class ClientController extends Controller
{

    public function __construct(){
        $this->beforeFilter('@find',['only' =>['show','edit','update','destroy']]);
    }

    public function find(Route $route){
        $this->client = Client::findOrFail($route->getParameter('clients'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        return view('client.index',compact('clients'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file = File::create(['name'=> $request['file']]);

        $client = ['name'=> $request['name'],'address'=> $request['address'],'phone'=> $request['phone'],'work'=> $request['work'],'description'=> $request['description'],'file_id'=> $file->id,];
        //return $client;
        Client::create($client);
        Session::flash('message','Cliente Creado Correctamente.');
        return Redirect::to('/clients');
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
    public function edit()
    {
        return view('client.edit',['client'=>$this->client]);
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
        $this->client->update($request->all());
        $file = File::find($this->client->file_id);
        $file->update(['name'=> $request['file']]);
        Session::flash('message','Cliente Actualizado Correctamente.');
        return Redirect::to('/clients');
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
