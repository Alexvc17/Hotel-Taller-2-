<ul class="nav nav-pills text-white bg-dark">

  <li class="nav-item">
    <a class="nav-link active" href="{{url('/')}}">Hotel la riviera</a>
  </li>
<!-----HOTEL----->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hotel</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('hotel/historia')}}">Historia</a>
      <a class="dropdown-item" href="{{url('hotel/mision-vision')}}">Mision y Vision</a>
      <a class="dropdown-item" href="{{url('hotel/ubicacion')}}">Ubicacion</a>
    
    </div>
  </li>
<!-----SERVICIOS----->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Servicios</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('servicios/habitaciones')}}">Habitaciones</a>
      <a class="dropdown-item" href="#">Eventos</a>
    </div>
  </li>

  <!-----CLIENTES----->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Clientes</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('clientes/visualizar')}}">Visualizar</a>
      
    </div>
  </li>
<!-----CONSULTAS----->
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Consultas</a>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="{{url('consulta/consulta1')}}">Consulta 1</a>
      <a class="dropdown-item" href="{{url('consulta/consulta2')}}">Consulta 2</a>
      
    
    </div>
  </li>

<!-----FACTURACION----->
  <li class="nav-item">
    <a class="nav-link" href="{{url('facturacion')}}">Facturacion</a>
  </li>

<!-----RESERVAS----->
  <li class="nav-item">
    <a class="nav-link" href="{{url('reservas')}}">Reservas</a>
  </li>


<!-----CONTACTOS----->
  <li class="nav-item">
    <a class="nav-link" href="{{url('contactenos')}}">Contactos</a>
  </li>
  
</ul>