<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return Client::all();
    }

    public function storage(Request $request){
        return Client::create($request->all());
    }

    public function show($id){
        return Client::find($id);
    }

    public function destroy($id){
        Client::find($id)->delete();
    }
    public function update(Request $request, $id){
       Client::find($id)->update($request->all());
        return $this->show($id);
    }

}
