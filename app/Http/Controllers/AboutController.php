<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //mostrar about page
    public function __invoke()
    {
        return "En esta pagina se muestra la informacion de la empresa";
    }
}
