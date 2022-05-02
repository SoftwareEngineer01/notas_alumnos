<?php

namespace App\Http\Controllers;

use App\Http\Requests\NotasRequest;
use Illuminate\Http\Request;
use App\Models\Nota;

class NotaController extends Controller
{

    public function index()
    {
        $notas = Nota::all();
        return view('index', compact('notas'));
    }

    public function create()
    {
        return view('registro_notas');
    }

    public function store(NotasRequest $request)
    {
        $promedio = ($request->nota1 +
                $request->nota2 +
                $request->nota3) / 3;

        $round = round($promedio, 2);

        Nota::create([
            'estudiante' => $request->estudiante,
            'nota1' => $request->nota1,
            'nota2' => $request->nota2,
            'nota3' => $request->nota3,
            'promedio' => $round
        ]);

        return view('registro_notas', compact('round'));
    }

    public function destroy($id)
    {
        Nota::destroy($id);
        return redirect('/');
    }
}
