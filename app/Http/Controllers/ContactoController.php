<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
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
        ], [
            'nombre.required'  => 'El nombre es obligatorio.',
            'email.required'   => 'El correo es obligatorio.',
            'email.email'      => 'Ingresa un correo válido.',
            'asunto.required'  => 'El asunto es obligatorio.',
            'mensaje.required' => 'El mensaje es obligatorio.',
        ]);

        Contacto::create([
            'nombre'  => $request->nombre,
            'email'   => $request->email,
            'asunto'  => $request->asunto,
            'mensaje' => $request->mensaje,
        ]);

        return back()->with('success', '¡Mensaje enviado correctamente! Te contactaremos pronto.');
    }
}