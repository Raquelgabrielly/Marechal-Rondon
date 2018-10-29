<?php

namespace App\Http\Controllers;

use App\User;
use App\Evento;
use Illuminate\Http\Request;

class Participar extends Controller
{
   public function upando(Request $request, $id) {
        /*Pega a model pelo id e coloca tudo que vem pelo request.*/
        $evento = Evento::find($id)->update($request->all());

        $participar                    = new ParticiparEvento;
        $participar->user_id           = $request->user()->id;
        $participar->user_id           = $request->evento()->id;
        $participar->checking          = false;
        $participar->save();
        return view('participar', compact('participar'));
      }
}
