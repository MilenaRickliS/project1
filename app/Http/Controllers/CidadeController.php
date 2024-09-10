<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index(){
        $cidades = [
            ['nome' => 'Guarapuava', 'id' => 1, 'estado' => 'PR', 'populacao' => '', 'area' => '', 'pais' => 'Brasil'],
            ['nome' => 'Curitiba', 'id' => 2, 'estado' => 'PR', 'populacao' => '', 'area' => '', 'pais' => 'Brasil'],
            ['nome' => 'Recife', 'id' => 3, 'estado' => 'PE', 'populacao' => '', 'area' => '', 'pais' => 'Brasil'],
        ];
        return view('cidades.index', compact('cidades'));

        // Identificador
        // Nome
        // Estado
        // População (habitantes)
        // Área em km2
        // País
    }
    public function show($nome){

        $c = [
            'id' => 'Desconhecido',
            'nome' => $nome,
            'estado' => 'Desconhecido',
            'populacao' => 'Desconhecido',
            'area' => 'Desconhecido',
            'pais' => 'Desconhecido',
            
        ];

        switch($nome){
            case 'Guarapuava':
                $c['id'] = 1;
                $c['estado'] = 'PR';
                $c['populacao'] = '';
                $c['area'] = '';
                $c['pais'] = 'Brasil';
                break;
            case 'Curitiba':
                $c['id'] = 2;
                $c['estado'] = 'PR';
                $c['populacao'] = '';
                $c['area'] = '';
                $c['pais'] = 'Brasil';
                break;
            case 'Recife':
                $c['id'] = 3;
                $c['estado'] = 'PE';
                $c['populacao'] = '';
                $c['area'] = '';
                $c['pais'] = 'Brasil';
                break;
            // default:
            //     $p['capital'] = 'não encontrado';
        }

        return view('cidades.show', compact('c'));
    }
}
