@extends('master')

@section('content')


<br>
<div class="text-center">
<h1 class="display-5"><u>Lista de Habitaciones Ocupadas</u></h1>
</div>
<br>
<div class="container">
  <div class="row">
  @foreach($reservas as $r)
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
  <h4 class="card-title">{{$r->Numero}}: {{$r->Tipo}}</h4>
  
  <!-- Text -->
 
  <p class="card-text white-text mb-4">Precio: {{$r->precio}}</p>
  <!-- Link -->
  <hr class="hr-light">
  <p class="card-text white-text mb-2"><strong>OCUPADA</strong></p>
 

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

