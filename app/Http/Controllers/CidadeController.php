<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function index(){
        $cidades = [
            ['nome' => 'Guarapuava', 'id' => 1, 'estado' => 'PR', 'populacao' => '', 'area' => '', 'pais' => 'Brasil', 'imagem' => ''],
            ['nome' => 'Curitiba', 'id' => 2, 'estado' => 'PR', 'populacao' => '', 'area' => '', 'pais' => 'Brasil', 'imagem' => ''],
            ['nome' => 'Recife', 'id' => 3, 'estado' => 'PE', 'populacao' => '', 'area' => '', 'pais' => 'Brasil', 'imagem' => ''],
            ['nome' => 'São Paulo', 'id' => 4, 'estado' => 'SP', 'populacao' => '', 'area' => '', 'pais' => 'Brasil', 'imagem' => ''],
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
            'imagem' => 'Desconhecido'
            
        ];

        switch($nome){
            case 'Guarapuava':
                $c['id'] = 1;
                $c['estado'] = 'PR';
                $c['populacao'] = '188.710 habitantes';
                $c['area'] = '3.168,087 km²';
                $c['pais'] = 'Brasil';
                $c['imagem'] = 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Guarapuava_10.jpg';
                break;
            case 'Curitiba':
                $c['id'] = 2;
                $c['estado'] = 'PR';
                $c['populacao'] = '1.773.718 habitantes';
                $c['area'] = '434,892 km²';
                $c['pais'] = 'Brasil';
                $c['imagem'] = 'https://cdn.myside.com.br/base/d1e/b49/851/jardim-botanico-bairro-curitiba.jpg';
                break;
            case 'Recife':
                $c['id'] = 3;
                $c['estado'] = 'PE';
                $c['populacao'] = '1.653.461 habitantes';
                $c['area'] = ' 218.843 km²';
                $c['pais'] = 'Brasil';
                $c['imagem'] = 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/Recife_-_In%C3%ADcio_da_Avenida_Boa_Viagem.jpg/760px-Mapcarta.jpg';
                break;
            case 'São Paulo':
                    $c['id'] = 4;
                    $c['estado'] = 'SP';
                    $c['populacao'] = '11,45 milhões habitantes';
                    $c['area'] = ' 1 521,202 km²';
                    $c['pais'] = 'Brasil';
                    $c['imagem'] = 'https://www.zapimoveis.com.br/blog/wp-content/uploads/2023/12/cidade-de-sao-paulo.jpg';
                    break;
            // default:
            //     $p['capital'] = 'não encontrado';
        }

        return view('cidades.show', compact('c'));
    }
}
