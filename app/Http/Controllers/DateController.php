<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Table\Table;
use Response;


class DateController extends Controller
{

    public function index()
    {
        $dates = Date::all();
        return view('dates.index')->with('dates', $dates);
    }


    public function create()
    {
        return view('dates.create');
    }


    public function store(Request $request)
    {

          $input = $request->all();
        //Date::create($input);

        $checker = Date::where('fecha_cita', $request->itemid)->exists();

        if ($checker) {
            Date::create($input);
            echo "Has data";
        } else {
            echo "None data";
        }
        return redirect('date')->with('flash_message', 'Date Addedd!');
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
        $data = compact('dates');
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
}
