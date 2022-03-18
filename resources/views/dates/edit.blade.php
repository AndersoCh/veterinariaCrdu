@extends('dates.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Editar  Cita</div>
  <div class="card-body">
      
      <form action="{{ url('date/' .$dates->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$dates->id}}" id="id" />
        
        <label>Cedula Dueño</label></br>
        <input type="text" name="cedula_dueño" id="cedula_dueño" value="{{$dates->cedula_dueño}}" class="form-control"></br>
       
        <label>Nombres dueño</label></br>
        <input type="text" name="nombres_dueño" id="nombres_dueño" value="{{$dates->nombres_dueño}}" class="form-control"></br>
        
        <label>Apellidos dueño</label></br>
        <input type="text" name="apellidos_dueño" id="apellidos_dueño" value="{{$dates->apellidos_dueño}}" class="form-control"></br>
        
        <label>Nombre Mascota</label></br>
        <input type="text" name="nombre_mascota" id="nombre_mascota" value="{{$dates->nombre_mascota}}" class="form-control"></br>

        <label>Fecha Cita</label></br>
        <input type="date" name="fecha_cita" id="fecha_cita" value="{{$dates->fecha_cita}}" class="form-control"></br>

        <label>Hora Cita</label></br>
        <input type="time" name="hora_cita" id="hora_cita" value="{{$dates->hora_cita}}" class="form-control"></br>

        <input type="submit" value="Actualizar" class="btn btn-success btn-lg btn-block"></br>
    </form>
   
  </div>
</div>
 
@stop