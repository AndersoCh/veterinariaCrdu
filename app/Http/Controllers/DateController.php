<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;
use App\Http\Controllers\toastr;


class DateController extends Controller
{

    public function index()
    {
        $dates = Date::paginate(3);
        return view('dates.index')->with('dates', $dates);
        
    }


    public function create()
    {
        return view('dates.create')->with('success','Cita creada correctamente!');
    }


    public function store(Request $request)
    {

        $fecha_cita = $request->fecha_cita;
        $hora_cita = $request->hora_cita;
        $check = Date::where([
            ['fecha_cita', '=', $fecha_cita]
        ])->where('hora_cita', '=', $hora_cita)->first();

        if ($check) {            
            return redirect('date/create')->with('error', 'Fecha invalida Creada!');
        }else{
            $input = $request->all();
            Date::create($input);
            return redirect('date')->with('success', 'Cita Creada!');
        }

    }


    public function show($id)
    {
        $date = Date::find($id);
        return view('dates.show')->with('dates', $date);
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            //where
            $dates = Date::where('fecha_cita', 'LIKE', "%$search")->get();
        } else {
            $dates = Date::all();
        }
        $data = compact('dates','search');
        return view('dates\index')->with($data);
    }




    public function edit($id)
    {
        $date = Date::find($id);
        return view('dates.edit')->with('dates', $date);
    }


    public function update(Request $request, $id)
    {
        $date = Date::find($id);
        $input = $request->all();
        $date->update($input);
        return redirect('date')->with('success', 'Cita Actualizada Correctamente!');
    }


    public function destroy($id)
    {
        Date::destroy($id);
        return redirect('date')->with('success', 'Cita Eliminada correctamente!');
    }
   
}
