<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
    $datos['usuarios']= Usuario::paginate(4);
    return view('usuario.usuarios', $datos);

    }


    public function create()
    {
        return view('usuario.crear_usuario');
    }


    public function edit($id_user)
    {
        $usuario=Usuario::findOrFail($id_user);
        return view('usuario.editar_usuario', compact('usuario'));
        // return response()->json($libro); 

    }


    public function store(Request $request)
    {
        $libro = request()->except('_token', 'enviar');
        Usuario::insert($libro);

        //  return response()->json($libro); 
        $datos['usuarios']= Usuario::paginate(7);
        return view('usuario.usuarios', $datos);
    }


    public function update(Request $request, $id_e) {
        $libro = request()->except(['_token', 'enviar','_method']);
        Usuario::where('id','=',$id_e)->update($libro);
        $datos['usuarios']= Usuario::paginate(7);
        return view('usuario.usuarios', $datos);

    }
    public function destroy($id){
        Usuario::destroy($id);
        return redirect('usuarios');

    }
}
