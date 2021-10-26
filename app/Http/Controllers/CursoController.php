<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursoController extends Controller
{
    public function index(){

        $cursos = Curso::all();
        return view('cursos.listarcurso', compact('cursos'));


    }

    public function create(){
        return view('cursos.create');
    }




    public function store(Request $request){

      $curso=new Curso();
      $curso->name=$request->name;
      $curso->descripcion=$request->descripcion;
      $curso->save();

    }

    public function show($curso){
        // return view('cursos.show',['pedro'=>$curso]);

        return view('cursos.show',compact('curso'));
    }

   public function destroy (Curso $curso){
       $curso->delete();
       return redirect()->route('cursos.index');
   }

    // public function show($curso,$param2=null){

    //     if($param2){
    //         return "hola desde $curso de $param2";
    //     }
    //     else
    //     return "hola desde $curso";
    // }


    public function edit($id){

 $curso =Curso::find($id);
return view('cursos.edit',compact('curso'));
    }


    public function update(Request $request,Curso $curso){
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->save();
        return redirect()->route('cursos.index');


           }

}
