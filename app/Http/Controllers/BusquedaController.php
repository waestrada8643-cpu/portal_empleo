<?php

namespace App\Http\Controllers;

use App\Models\Vacante;
use Illuminate\Http\Request;

class BusquedaController extends Controller
{
    public function index(Request $request)
    {
        $q = trim((string) $request->input('q', ''));

        $vacantes = Vacante::query()
            ->when($q !== '', function ($query) use ($q) {
                $term = '%' . strtolower($q) . '%';

                $query->where(function ($subQuery) use ($term) {
                    $subQuery->whereRaw('LOWER(titulo) LIKE ?', [$term])
                        ->orWhereRaw('LOWER(empresa) LIKE ?', [$term])
                        ->orWhereRaw('LOWER(descripcion) LIKE ?', [$term])
                        ->orWhereRaw('LOWER(ubicacion) LIKE ?', [$term]);
                });
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('buscar', compact('vacantes', 'q'));
    }
}
