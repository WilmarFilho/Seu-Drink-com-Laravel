<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Drink;
use \App\Models\Options;


class PrincipalController extends Controller
{

    public function index() {
        return view('index');
    }

    public function consulta() {
        return view('consultaFruta');
    }

    public function escolheFruta(Request $request) {
        return view('consultaBebida', ['fruta' => $request->input('fruta')]);
    }

    public function escolheBebida(Request $request) {
        return view('consultaIngrediente', [
            'fruta' => $request->input('fruta'),
            'bebida' => $request->input('bebida')
        ]);
    }

    public function resultado(Request $request) {

        //Recupero as options dos select no banco de dados

        if( strlen($request->input('bebida')) == 0 and strlen($request->input('suco_fruta')) == 0 and strlen($request->input('ingrediente')) == 0 ) {
            return redirect()->route('site.index');
        }

        else {
           //Cria o objeto baseado no Model Drink

            $drinks = Drink::where(
                function($query) use($request) {
                    $query->where('suco_fruta', 'like', '%'.$request->input('suco_fruta').'%')->orWhere('suco_fruta_adicional', 'like', '%'.$request->input('suco_fruta').'%');
                }
            )->where(
                function($query) use($request) {
                    $query->where('bebida', 'like', '%'.$request->input('bebida').'%')->orWhere('bebida_adicional', 'like', '%'.$request->input('bebida').'%');
                }
            )->where(
                function($query) use($request) {
                    $query->where('ingrediente','like','%'.$request->input('ingrediente').'%')->orWhere('ingrediente_adicional_1','like','%'.$request->input('ingrediente').'%') ->orWhere('ingrediente_adicional_2','like','%'.$request->input('ingrediente').'%');
                }
            )->get();

            //Retorno a view

            return view('index', compact('drinks'));

        }

    }

    public function nomeDrink() {
        return view('consultaNome');
    }

    public function resultadoNomeDrink(Request $request) {

        //Recupero as options dos select no banco de dados

        if( strlen($request->input('nome')) == 0) {
            return redirect()->route('site.index');
        }

        else {
           //Cria o objeto baseado no Model Drink

            $drinks = Drink::where('nome', $request->input('nome'))->get();

            //Retorno a view

            return view('index', compact('drinks'));

        }

    }

    public function ajax($tipo, $valor) {

        if($tipo == 'nome') {
            $opcoes = Drink::where($tipo, 'like', '%'.$valor.'%')->get();
        } else {
            $opcoes = Options::where($tipo, 'like', '%'.$valor.'%')->get();
        }

        return $opcoes;
    }
}
