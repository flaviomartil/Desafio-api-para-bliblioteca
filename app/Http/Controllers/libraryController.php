<?php

namespace App\Http\Controllers;

use App\library;
use Illuminate\Http\Request;

class libraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $model = library::all();

    if(!$model){
        echo "Livro não encontrado";
    }else{
       echo $model;
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $model = library::create($request->all());
    if($model){
        echo "Livro Criado com sucesso";
    }else{
        echo "Erro ao criar livro";
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    $model = library::find($id);
    if($model){
    echo $model;
        }else{
            echo "erro ao localizar livro";
}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    $model = library::find($id);
    $model->titulo = $request->titulo;
    $model->editora = $request->editora;
    $model->foto = $request->foto;
    $model->autores = $request->autores;
    if($model->save($request->all())){
        echo "Livro atualizado com sucesso";
    }else {
        echo "woops, erro ao atualizar registro";
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $model = library::findOrFail($id);
    if($model){
    $model->destroy($id);
    echo "Livro deletado com sucesso";
    }else {
    echo "Erro ao deletar Livro";
    }
}
}