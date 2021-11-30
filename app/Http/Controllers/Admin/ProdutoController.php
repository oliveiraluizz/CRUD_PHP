<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    // metodo index que faz listagem dos produtos
    public function index(){

        $registros = Produto::all();

        return json_encode($registros);


    }
    // metodo para adicionar produto

    // metodo para salvar produto
    public function salvar(Request $req){

        $dados = $req->all();
       
        

        if(isset($dados['status'])){
            $dados['status'] = 'Em estoque';
        }else{
            $dados['status'] = 'Sem estoque';
        }

        $produto = Produto::create($dados);     
        return json_encode($produto);
    }

    public function date($id){


        $produto = Produto::find($id);     
        return json_encode($produto);
    }

    public function atualizar(Request $req, $id){

        $dados = $req->all();

        $produto = Produto::find($id)->update($dados);     
        return json_encode($produto);
    }

    public function deletar($id){

        $produto = Produto::find($id)->delete($id);
        return json_encode($produto);
    }
}
