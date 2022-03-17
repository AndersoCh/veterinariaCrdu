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
        return view('dates.create')->with('success','Item created successfully!');
    }


    public function store(Request $request)
    {

        $fecha_cita = $request->fecha_cita;
        $hora_cita = $request->hora_cita;
        $yesterday = date("Y-m-d", strtotime( '-1 days' ));
        $yesterday;
        $check = Date::where([
            ['fecha_cita', '=', $fecha_cita]
        ])->where('hora_cita', '=', $hora_cita)->first();

        if ($check) {            
            return redirect('date/create');
        }else{
            $input = $request->all();
            Date::create($input);
            return redirect('date')->with('alert', 'Date Addedd!');
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
        return redirect('date')->with('flash_message', 'date Updated!');
    }


    public function destroy($id)
    {
        Date::destroy($id);
        return redirect('date')->with('flash_message', 'date deleted!');
    }

    public static $rules = [
        'email' => 'required|unique:users,email'
    ];
}
