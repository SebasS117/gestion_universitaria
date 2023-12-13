<?php
namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    // Muestra la lista de profesores
    public function index()
    {
        $profesores = Profesor::all();
        return view('profesores.index', compact('profesores'));
    }

    // Muestra el formulario para crear un nuevo profesor
    public function create()
    {
        return view('profesores.create');
    }

    // Almacena un nuevo profesor en la base de datos
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required|email|unique:profesores',
            'area_especializacion' => 'required|max:255',
        ]);

        Profesor::create($validatedData);
        return redirect()->route('profesores.index')->with('success', 'Profesor creado con éxito.');
    }

    // Muestra un profesor específico
    public function show(Profesor $profesor)
    {
        return view('profesores.show', compact('profesor'));
    }

    // Muestra el formulario para editar un profesor existente
    public function edit(Profesor $profesor)
    {
        return view('profesores.edit', compact('profesor'));
    }

    // Actualiza un profesor en la base de datos
    public function update(Request $request, Profesor $profesor)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'apellido' => 'required|max:255',
            'email' => 'required|email|unique:profesores,email,' . $profesor->id,
            'area_especializacion' => 'required|max:255',
        ]);

        $profesor->update($validatedData);
        return redirect()->route('profesores.index')->with('success', 'Profesor actualizado con éxito.');
    }

    // Elimina un profesor
    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return redirect()->route('profesores.index')->with('success', 'Profesor eliminado con éxito.');
    }
}
