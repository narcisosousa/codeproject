<?php

namespace CodeProject\Http\Controllers;

use CodeProject\Entities\Client;
use CodeProject\Repositories\ClientRepository;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * @var ClientRepository
     */
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(){
        return $this->repository->all();
    }

    public function storage(Request $request){
        return $this->repository->create($request->all());
    }

    public function show($id){
        return $this->repository->find($id);
    }

    public function destroy($id){
        $this->repository->find($id)->delete();
    }
    public function update(Request $request, $id){
        $this->repository->find($id)->update($request->all());
        return $this->show($id);
    }

}
