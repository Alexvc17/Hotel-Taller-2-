@extends('master')

@section('content')


<br>
<div class="text-center">
<h1 class="display-5"><u>Lista de Clientes</u></h1>
</div>
<br>
<div class="container">
  <div class="row">
  @foreach($clientes as $c)
    <div class="col-md-4">
    
                <!-- Card Dark -->
<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src='{{url("imagenes/$c->foto")}}'
    alt="Card image cap">
  <a>
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body unique-color white-text rounded-bottom">

  
  
  <!-- Title -->
  
  <h4 class="card-title">Nombres: {{$c->nombres}}</h4>
  <hr>
  <!-- Text -->
  <p class="card-text white-text mb-4">DNI: {{$c->DNI}}</p>
  <p class="card-text white-text mb-4">Genero: {{$c->genero}}</p>
  <p class="card-text white-text mb-4">Domicilio: {{$c->Domicilio}}</p>
  <p class="card-text white-text mb-4">Telefono: {{$c->Telefono}}</p>
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