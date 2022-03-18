@extends('dates.layout')
@section('content')

<div class="card">
  <div class="card-header">Agregar</div>
  <div class="card-body">

    <form id="form-agregar" action="{{ url('date') }}" method="post">
      {!! csrf_field() !!}
      @csrf
      <label>Cedula </label></br>
      <input type="text" name="cedula_dueño" id="cedula_dueño" class="form-control" require></br>

      <label>Nombres Dueño</label></br>
      <input type="text" name="nombres_dueño" id="nombres_dueño" class="form-control" require></br>

      <label>Apellidos Dueño</label></br>
      <input type="text" name="apellidos_dueño" id="apellidos_dueño" class="form-control" require></br>

      <label>Nombre Mascota</label></br>
      <input type="text" name="nombre_mascota" id="nombre_mascota" class="form-control" require></br>

      <label>Fecha cita</label></br>
      <input type="date" name="fecha_cita" id="fecha_cita" class="form-control" min="<?= date('Y-m-d'); ?>" require></br>

      <label>Hora cita</label></br>
      <input type="time" name="hora_cita" id="hora_cita" class="form-control" require></br>

      <input type="submit" value="Guardar" class="btn btn-success btn-lg btn-block"></br>
    </form>

  </div>
</div>
@stop
