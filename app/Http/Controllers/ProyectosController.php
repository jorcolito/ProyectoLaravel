<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProyectosController extends Controller
{
    public function index()
    {
        $proyectos = DB::table('proyectos')->get();
        return view("index", ['proyectos' => $proyectos]);
    }

    public function create()
    {
        return view("new");
    }

    public function store(Request $request)
    {
        Proyectos::create([
            'nombre' => $request->nombre,
            'descripcon' => $request->descripcon,
        ]);

        return redirect('proyectos/')
            ->with('success', 'Proyecto creado satisfactoriamente.');
    }

    public function show(Proyectos $proyectos)
    {
        //
    }

    public function edit(Proyectos $proyectos)
    {
        //
    }

    public function update(Request $request, Proyectos $proyectos)
    {
        //
    }

    public function destroy(Proyectos $proyectos)
    {
        //
    }
}
