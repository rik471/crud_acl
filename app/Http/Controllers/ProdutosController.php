<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;
use App\Repositories\Repository;
use Illuminate\Contracts\Routing\ResponseFactory;

class ProdutosController extends Controller
{
    public function __construct(Produtos $model, ResponseFactory $response)
    {
        $this->model = $model;
        $this->response = $response;
    }

    public function index()
    {
       $produtos = $this->model->all();
        return view('index', compact('produtos'));
    }

    public function list()
    {
       $produtos = $this->model->first();
        return $this->response->view('index', compact('produtos'));
    }

    public function store()
    {
        $this->validate();
        return $this->model->create($request->only($this->model->fillable));
    }

    public function update($id)
    {
        $this->model->update($request->only($this->model->fillable), $id);
        return $this->model->find($id);
    }

    public function delete($id)
    {   
        $this->model->find($id);
        return $this->model->delete($id);
    }
}
