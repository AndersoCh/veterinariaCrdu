@extends('dates.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Página Citas</div>
  <div class="card-body">
      
      <form action="{{ url('date') }}" method="post">
        {!! csrf_field() !!} 
        @csrf 
        {{ $errors }}
        <label>Cedula </label></br>
        <input type="text" name="cedula_dueño" id="cedula_dueño" class="form-control"  ></br>
        
        <label>Nombres Dueño</label></br>
        <input type="text" name="nombres_dueño" id="nombres_dueño" class="form-control" ></br>
       
        <label>Apellidos Dueño</label></br>
        <input type="text" name="apellidos_dueño" id="apellidos_dueño" class="form-control" ></br>
        
        <label>Nombre Mascota</label></br>
        <input type="text" name="nombre_mascota" id="nombre_mascota" class="form-control" ></br>
   
        <label>Fecha cita</label></br>
        <input type="date" name="fecha_cita" id="fecha_cita" class="form-control" ></br>
       
        <label>Hora cita</label></br>
        <input type="time" name="hora_cita" id="hora_cita" class="form-control" ></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop