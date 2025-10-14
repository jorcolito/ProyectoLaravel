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
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcon' => 'required|string',
        ]);
        
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
        return view("edit", ['proyecto' => $proyectos]);
    }

    public function update(Request $request, Proyectos $proyectos)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'descripcon' => 'required|string',
        ]);
        
        $proyectos->update([
            'nombre' => $request->nombre,
            'descripcon' => $request->descripcon,
        ]);

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto actualizado satisfactoriamente.');
    }

    public function destroy(Proyectos $proyectos)
    {
        $proyectos->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto eliminado satisfactoriamente.');
    }
}
