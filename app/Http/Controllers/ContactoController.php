<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        return view('contacto');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre'  => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:100'],
            'asunto'  => ['required', 'string', 'max:150'],
            'mensaje' => ['required', 'string', 'max:1000'],
        ]);

        // Aquí puedes agregar lógica para enviar email si lo necesitas
        // Mail::to('tu@correo.com')->send(new ContactoMail($request->all()));

        return back()->with('success', '¡Mensaje enviado correctamente! Te contactaremos pronto.');
    }
}