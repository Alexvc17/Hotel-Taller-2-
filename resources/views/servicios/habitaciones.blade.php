@extends('master')

@section('content')


<br>
<div class="text-center">
<h1 class="display-5"><u>Lista de Habitaciones</u></h1>
</div>
<br>
<div class="container">
  <div class="row">
  @foreach($habitaciones as $h)
    <div class="col-md-4">
    
                <!-- Card Dark -->
<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src='{{url("imagenes/$h->foto")}}'
    alt="Card image cap">
  <a>
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body default-color-dark white-text rounded-bottom">

  
  
  <!-- Title -->
  <h4 class="card-title">{{$h->Numero}}: {{$h->Tipo}}</h4>
  <hr class="hr-light">
  <!-- Text -->
  <p class="card-text white-text mb-4">Descripcion: {{$h->descripcion}}</p>
  <p class="card-text white-text mb-4">Num Camas: {{$h->numCamas}}</p>
  <p class="card-text white-text mb-4">Precio: {{$h->precio}}</p>
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