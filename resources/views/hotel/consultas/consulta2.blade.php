@extends('master')

@section('content')


<br>
<div class="text-center">
<h1 class="display-5"><u>Lista de clientes con habitacion 1 y 2</u></h1>
</div>
<br>
<div class="container">
  <div class="row">
  @foreach($habitaciones as $r)
    <div class="col-md-4">
    
                <!-- Card Dark -->
<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src='{{url("imagenes/$r->foto")}}'
    alt="Card image cap">
  <a>
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body default-color-dark white-text rounded-bottom">

  
  
  <!-- Title -->
  
  
  <!-- Text -->
  <p class="card-text white-text mb-4">Nombre: {{$r->nombres}}</p>
  <p class="card-text white-text mb-4">Tipo: {{$r->Tipo}}</p>
  <p class="card-text white-text mb-4">Precio: {{$r->precio}}</p>
  <!-- Link -->
  
  
 

</div>

</div>
<!-- Card Dark -->
<br><br>


    
                
    </div>
    @endforeach
  </div>
  
</div>


<br>

@stop
