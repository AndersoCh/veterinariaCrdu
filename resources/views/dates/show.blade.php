@extends('dates.layout')
@section('content')


<div class="card">
  <div class="card-header">Página Citas</div>
  <div class="card-body">


    <div class="card-body">
      <h5 class="card-title">Cedula Dueño : {{ $dates->cedula_dueño }}</h5>
      <p class="card-text">Nombres Dueño : {{ $dates->nombres_dueño }}</p>
      <p class="card-text">Apellidos Dueño : {{ $dates->apellidos_dueño }}</p>
      <p class="card-text">Nombre Mascota : {{ $dates->nombre_mascota }}</p>
      <p class="card-text">Fecha Cita : {{ $dates->fecha_cita }}</p>
      <p class="card-text">Hora Cita : {{ $dates->hora_cita }}</p>

      <?php

       use function PHPSTORM_META\type;

      $horaActual =  date('H:i:s');
      $carbon1 = Carbon\Carbon::now();
      $dateCita= ($dates->fecha_cita); 
      $timeCita= ($dates->hora_cita); 
      $cita= $dateCita." ".$timeCita;
      $minutesDiff = $carbon1->diffInHours($cita);
      ?>
      <p class="card-text">Tiempo Restante cita : {{ $minutesDiff}} Horas</p>
    </div>

    </hr>

  </div>

</div>
<p class="card-text">Hora Actual : {{ $horaActual}}</p>

<script>
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Your work has been saved',
      showConfirmButton: false,
      timer: 1500
    })
  </script>