<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Drink;

class PrincipalController extends Controller
{   

    public function index() {

        //Aplico valor default nos campos do form

        $_POST['bebida'] = empty($_POST['bebida']) ? '*' : $_POST['bebida'];
        $_POST['bebida_adicional'] = empty($_POST['bebida_adicional']) ? '*' : $_POST['bebida_adicional'];
        $_POST['ingrediente'] = empty($_POST['ingrediente']) ? '*' : $_POST['ingrediente'];
        $_POST['ingrediente_adicional_1'] = empty($_POST['ingrediente_adicional_1']) ? '*' : $_POST['ingrediente_adicional_1'];
        $_POST['ingrediente_adicional_2'] = empty($_POST['ingrediente_adicional_2']) ? '*' : $_POST['ingrediente_adicional_2'];
        $_POST['suco_fruta'] = empty($_POST['suco_fruta']) ? '*' : $_POST['suco_fruta'];
        $_POST['suco_fruta_adicional'] = empty($_POST['suco_fruta_adicional']) ? '*' : $_POST['suco_fruta_adicional'];

        //Cria o objeto baseado no Model Drink

        $drink = new Drink;
        
        $drink->bebida = $_POST['bebida'];
        $drink->bebida_adicional = $_POST['bebida_adicional'];
        $drink->suco_fruta = $_POST['suco_fruta'];
        $drink->suco_fruta_adicional = $_POST['suco_fruta_adicional'];
        $drink->ingrediente = $_POST['ingrediente'];
        $drink->ingrediente_adicional_1 = $_POST['ingrediente_adicional_1'];
        $drink->ingrediente_adicional_2 = $_POST['ingrediente_adicional_2'];

        //Faço a busca no Banco de dados com os filtros

        $drinks = Drink::where('suco_fruta', 'like', '%'.$drink->suco_fruta.'%')
        ->orWhere('suco_fruta', 'like', '%'.$drink->suco_fruta_adicional.'%')
        ->orWhere('suco_fruta_adicional', 'like', '%'.$drink->suco_fruta.'%')
        ->orWhere('suco_fruta_adicional', 'like', '%'.$drink->suco_fruta_adicional.'%')
        ->orWhere('bebida', 'like', '%'.$drink->bebida.'%')
        ->orWhere('bebida', 'like', '%'.$drink->bebida_adicional.'%')
        ->orWhere('bebida_adicional', 'like', '%'.$drink->bebida.'%')
        ->orWhere('bebida_adicional', 'like', '%'.$drink->bebida_adicional.'%')
        ->orWhere('ingrediente','like','%'.$drink->ingrediente.'%')
        ->orWhere('ingrediente','like','%'.$drink->ingrediente_adicional_1.'%')
        ->orWhere('ingrediente','like','%'.$drink->ingrediente_adicional_2.'%')
        ->orWhere('ingrediente_adicional_1','like','%'.$drink->ingrediente.'%')
        ->orWhere('ingrediente_adicional_1','like','%'.$drink->ingrediente_adicional_1.'%')
        ->orWhere('ingrediente_adicional_1','like','%'.$drink->ingrediente_adicional_2.'%')
        ->orWhere('ingrediente_adicional_2','like','%'.$drink->ingrediente.'%')
        ->orWhere('ingrediente_adicional_2','like','%'.$drink->ingrediente_adicional_1.'%')
        ->orWhere('ingrediente_adicional_2','like','%'.$drink->ingrediente_adicional_2.'%')->get();

        //Retorno a view

        return view('index', compact('drinks'));
    }
}
