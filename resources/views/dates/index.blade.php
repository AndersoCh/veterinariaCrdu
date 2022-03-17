@extends('dates.layout')
@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Contacts</div>
                <div class="card-body">
                    <a href="{{ url('/date/create') }}" class="btn btn-success btn-sm" title="Add New Date">
                        <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nueva Cita
                    </a>
                    </a>
                    <br />
                    <br />
                    <div class="container">
                        <div class="row m-3">
                            <form action="" class="col-4">
                                <div class="form-group">
                                    <input type="date" name="search" id="" class="form-control" placeholder="Search by name or email" value="{{$search}}">
                                </div>
                                <div class="col-3">
                                    <button class="btn btn-primary">Buscar</button>
                            </form>


                        </div>
                    </div>
                </div>



                <div id="search_list" class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>cedula dueño</th>
                                <th>Nombres Dueño</th>
                                <th>Apellido Dueños</th>
                                <th>Nombre Mascota</th>
                                <th>Fecha Cita</th>
                                <th>Hora Cita</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($dates as $date)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $date->cedula_dueño }}</td>
                                <td>{{ $date->nombres_dueño }}</td>
                                <td>{{ $date->apellidos_dueño }}</td>
                                <td>{{ $date->nombre_mascota }}</td>
                                <td>{{ $date->fecha_cita }}</td>
                                <?php
                                $horaActual =  date('H:i:s');
                                $carbon1 = Carbon\Carbon::now();
                                $dateCita = ($date->fecha_cita);
                                $timeCita = ($date->hora_cita);
                                $cita = $dateCita . " " . $timeCita;
                                $minutesDiff = $carbon1->diffInHours($cita);
                                ?>
                                <td>{{ $date->hora_cita  }}</td>

                                <td>
                                    @if($minutesDiff <= 2) <a href="{{ url('/date/' . $date->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                        <form method="POST" action="{{ url('/date' . '/' . $date->id) }}" accept-charset="UTF-8" style="display:inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Cancelar</button>
                                        </form>
                                        @endif
                                        <a href="{{ url('/date/' . $date->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Ver</button></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
</div>



@endsection