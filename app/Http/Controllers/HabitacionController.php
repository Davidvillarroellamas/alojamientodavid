<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function index()
    {
        $habitaciones = Habitacion::all();
        return view('habitacion.index', compact('habitaciones'));
    }

    public function create()
    {
        return view('habitacion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipo' => 'required|string|max:50',
            'numero' => 'required|integer',
            'precio' => 'required|numeric',
            'fotografias' => 'required|string|max:100',
        ]);

        Habitacion::create($request->all());

        return redirect()->route('habitacion.index')
                         ->with('success', 'Habitación creada exitosamente.');
    }

    public function show(Habitacion $habitacion)
    {
        return view('habitacion.show', compact('habitacion'));
    }

    public function edit(Habitacion $habitacion)
    {
        return view('habitacion.edit', compact('habitacion'));
    }

    public function update(Request $request, Habitacion $habitacion)
    {
        $request->validate([
            'tipo' => 'required|string|max:50',
            'numero' => 'required|integer',
            'precio' => 'required|numeric',
            'fotografias' => 'required|string|max:100',
        ]);

        $habitacion->update($request->all());

        return redirect()->route('habitacion.index')
                         ->with('success', 'Habitación actualizada exitosamente.');
    }

    public function destroy(Habitacion $habitacion)
    {
        $habitacion->delete();

        return redirect()->route('habitacion.index')
                         ->with('success', 'Habitación eliminada exitosamente.');
    }
}
