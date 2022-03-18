@extends('dates.layout')
@section('content')

<div class="container">

    <div class="row">
        @include('dates.alert')
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Citas</div>

                <div class="card-body">
                    {{-- Alert Message --}}
                    <a href="{{ url('/date/create') }}" class="btn btn-success btn-lg active" title="Add New Date">
                        <i class="fa fa-plus" aria-hidden="true"></i> Agregar Nueva Cita
                    </a>
                    </a>
                    <br />
                    <br />
                    <div class="container">
                        <div class="row m-2">
                            <form action="" class="row m-1">
                                <div class="col">
                                    <input placeholder="XD" type="date" name="search" id="" class="form-control" placeholder="Search by name or email" value="{{$search}}">
                                </div>
                                <div class="col">
                                    <button class="btn btn-secondary btn-lg active  "><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                                </div>

                                <div class="col">
                                    <a href="{{ url('/date') }}">
                                        <button class="btn btn-secondary btn-lg active"><i class="fa fa-eye" aria-hidden="true"></i> Ver todas las Citas</button>
                                    </a>
                                </div>
                            </form>


                        </div>



                        <div id="search_list" class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>cedula dueño</th>
                                        <th>Nombres completo</th>
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
                                        <td>{{ $date->nombres_dueño }} {{ $date->apellidos_dueño }}</td>
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
                                            @if(!($minutesDiff <= 2)) <a href="{{ url('/date/' . $date->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                <form method="POST" action="{{ url('/date' . '/' . $date->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return (&quot;Confirm; delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Cancelar</button>
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