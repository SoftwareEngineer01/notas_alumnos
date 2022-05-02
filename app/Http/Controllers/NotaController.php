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
        $round = $this->getpromedio($request);

        Nota::create([
            'estudiante' => $request->estudiante,
            'nota1' => $request->nota1,
            'nota2' => $request->nota2,
            'nota3' => $request->nota3,
            'promedio' => $round
        ]);

        return view('registro_notas', compact('round'));
    }

    public function edit($id)
    {
        $nota = Nota::find($id);
        return view('actualizar_nota', compact('nota'));
    }

    public function update(NotasRequest $request, $id)
    {
        $nota = Nota::find($id);

        $round = $this->getpromedio($request);

        $nota->update([
            'estudiante' => $request->estudiante,
            'nota1' => $request->nota1,
            'nota2' => $request->nota2,
            'nota3' => $request->nota3,
            'promedio' => $round
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
        Nota::destroy($id);
        return redirect('/');
    }

    public function getpromedio(NotasRequest $request): float
    {
        $promedio = ($request->nota1 +
                $request->nota2 +
                $request->nota3) / 3;

        return round($promedio, 2);
    }

}
