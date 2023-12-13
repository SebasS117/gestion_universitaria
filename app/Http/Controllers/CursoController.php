<?php
namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('cursos.index', compact('cursos'));
    }

    public function create()
    {
        return view('cursos.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'codigo_curso' => 'required|unique:cursos',
            'profesor_id' => 'required|exists:profesores,id',
        ]);

        Curso::create($validatedData);
        return redirect()->route('cursos.index')->with('success', 'Curso creado con éxito.');
    }

    public function show(Curso $curso)
    {
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso)
    {
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|max:255',
            'codigo_curso' => 'required|unique:cursos,codigo_curso,' . $curso->id,
            'profesor_id' => 'required|exists:profesores,id',
        ]);

        $curso->update($validatedData);
        return redirect()->route('cursos.index')->with('success', 'Curso actualizado con éxito.');
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index')->with('success', 'Curso eliminado con éxito.');
    }
}
