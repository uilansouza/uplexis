<?php

namespace estoque\Http\Controllers;
use estoque\artigo;
use Illuminate\Support\Facades\DB;
use Auth;

use Illuminate\Http\Request;
use estoque\Http\Requests\ConsultaRequest;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consulta()
    {
        return view('consulta');
    }

    public function pesquisaResultado(ConsultaRequest $data){

       
        $titulo = preg_replace('/[ -]+/' , '+' , $data->consulta);

        


       $url = file_get_contents("https://www.uplexis.com.br/blog/?s=$titulo");

       preg_match_all('/col-md-6(.+)<div>/s', $url, $conteudo);
             
       $string = implode(',',$conteudo[0]);
       $string = explode('Continue Lendo',$string);

       $parte = substr($string[0],16);

       if(!$parte){

        echo "<h1></h1>não foi encontrado artigo com sua pesquisa</h1>";
        exit();
       }

         
       $id_user = Auth::id();
       
             
       $consulta = DB::insert('insert into artigos  (id_usuario, titulo) values (?,?)',array($id_user, $parte));

       echo '<h1>O Titulo do Artigo foi inserido no banco de dados</h1>';
       echo '<li><a href="/consulta" class="navbar-brand" >Voltar</a></li>';

       



        
    }

}
