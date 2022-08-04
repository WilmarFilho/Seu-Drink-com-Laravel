<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Drink;
use \App\Models\Options;

class PrincipalController extends Controller
{   

    public function index(Request $request) {

        //Cria o objeto baseado no Model Drink

        $drink = new Drink;

        $drink->bebida =  empty($request->input('bebida')) ? '*' : $request->input('bebida') ;
        $drink->bebida_adicional = empty($request->input('bebida_adicional')) ? '*' : $request->input('bebida_adicional');
        $drink->ingrediente = empty($drink->ingrediente) ? '*' : $drink->ingrediente;
        $drink->ingrediente_adicional_1 = empty($drink->ingrediente_adicional_1) ? '*' : $drink->ingrediente_adicional_1;
        $drink->ingrediente_adicional_2 = empty($drink->ingrediente_adicional_2) ? '*' : $drink->ingrediente_adicional_2;
        $drink->suco_fruta = empty($request->input('suco_fruta')) ? '*' : $request->input('suco_fruta');
        $drink->suco_fruta_adicional = empty($request->input('suco_fruta_adicional')) ? '*' : $request->input('suco_fruta_adicional');

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

        //Recupero as options dos select no banco de dados

        $options = Options::all();

        //Retorno a view
        return view('index', compact('drinks', 'options'));
    }
}
