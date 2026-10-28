<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function mostrar()
    {
        return view('contacto');
    }

    public function enviar(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'nullable|string|max:50',
            'asunto' => 'nullable|string|max:255',
            'mensaje' => 'required|string',
        ]);

        Mensaje::create($validated);

        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}
