<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //Aqui se mostrara todos los post
    public function index(){
        return 'Aqui se mostrara el listado de los post';
    }
    public function create(){
        return 'Aqui se mostrara el formulario para crear un nuevo post';
    }
    public function store(){
        return 'Aqui se procesara el post';
    }
    public function show($post){
        return "Aqui se mostrara el post $post";
    }
    public function edit($post){
        return "Aqui se mostrara el formulario para editar el post $post";
    }
    public function update($post){
        return "Aqui se actualizara el post $post";
    }
    public function destroy($post){
        return "Aqui se borrara el post $post";
    }
}
