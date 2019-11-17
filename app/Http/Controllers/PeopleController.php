<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function form_register(){
        return view('people/form_register_users');
    }
    public function save_dates_user(Request $request){
        //$results = \DB::select('select * from people where id_people = :id', ['id' => 7]);
        //return $results;


        $request->validate([
            'foto_perfil' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nombres' => 'required',
            'apellidos' => 'required',
            'cedula' => 'required',
            'fecha_nacimiento' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'gmail' => 'required',
            'contrasena' => 'required',
            're_contrasena' => 'required',

        ]);
        $file = $request->file('foto_perfil');
        $nombre = $file->getClientOriginalName();
        //\Storage::disk('local')->put($nombre,  \File::get($file));
        $image = base64_encode(file_get_contents($request->file('foto_perfil')));
        \DB::insert('insert into people (name,last_name,address,phone,birth_date,nro_ci,profile_photo,state_user,token) values (?,?,?,?,?,?,?,?,?)', 
            [
                $request->nombres,
                $request->apellidos,
                $request->direccion,
                $request->telefono,
                $request->fecha_nacimiento,
                $request->cedula,
                $image,
                'active',
                '$2y$10$1.UmvY8xTmlJrmxbWKNFdO8/rm3xwFH3pUA8w72B2BCQPK9cMHfqG'
            ]);
    }
}