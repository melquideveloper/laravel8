<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //Classe request
use PhpParser\Node\Expr\FuncCall;

class ProdutoController extends Controller
{
   public function index(Request $request)
   {  //Os dados vindo da requisão $_REQUEST são tratados atravês da classe REQUEST

      //OPÇÃO 1 DE RECEBER REQUEST - "all"
      // $dados = $request->all();

      // if (isset($dados) and count($dados)!=0) {         
      //    $data=['produto' => $dados['produto'], 'categoria' => $dados['categoria'], 'preco' => $dados['preco']];
      //    return view('produto',$data);
      // }else{     
      //    return view('produto');         
      // }

      //OPÇÃO 2 DE RECEBER REQUEST TIPO GET - "query"
      // $produto = $request->query('produto');
      // $categoria = $request->query('categoria');
      // $preco = $request->query('preco');

      // if ($produto != null) {
      //    $data = ['produto' => $produto, 'categoria' => $categoria, 'preco' => $preco];
      //    return view('produto',$data);        
      // } else {
      //    return view('produto');
      // }

      //OPÇÃO 3 DE RECEBER O REQUEST TIPO POST "inuput" 
      $produto = $request->input('produto');
      $categoria = $request->input('categoria');
      $preco = $request->input('preco');

      // dd($request);
      if ($produto != null) {
         $data = ['produto' => $produto, 'categoria' => $categoria, 'preco' => $preco];
         return view('produto',$data);        
      } else {
         return view('produto');
      }
   }

   public function excluir($id){     
     dd($id);
   }
}
