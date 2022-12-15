<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Recuperar as veiculos do banco de dados
        $marcas = Marca::all();
        // retorna a index passando a variavel $marcas
        return view('marcas.index')->with('marcas', $marcas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //retorna o formulario de criação da aplicacao
        return view('marcas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //criar uma instancia de um novo modelo Marca

        // Setando os Elementos
        // $marca = new Marca();
        // recupera os dados vindos do forma e aplica ao modelo
        // $marca->nome = $request->input('nome');
        // Salvar modelo
        // $marca.save();


        //Recuperando todos os items da request
        $data = $request->only(['nome']);
        $marca = Marca::Create($data);

        //retornar para o index
        return redirect()->route('marcas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Marca $marca)
    {
        return view('marcas.show')->with('marca', $marca);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Marca $marca)
    {
        //redireciona para o editar
        return view('marcas.edit')->with('marca', $marca);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marca $marca)
    {
        //Captura todos os elementos da request
        $data = $request->only(['nome']);
        //Atualiza a marca
        $marca->update($data);
        //Volta para o index
        return redirect()->route('marcas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marca $marca)
    {
        //Verifica se o conteudo e valido
        //Destroi registro
        if (isset($marca)) {
            $marca->delete();
        }
        return redirect()->route('marcas.index');
    }
}
