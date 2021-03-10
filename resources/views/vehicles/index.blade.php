<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
<br><br>
<div class="card">
    <div class ="card-header">
    <div class="row">
    <div class="col-md-8">
    <h2 class="card-title">Listado de vehiculos registrados en la base de datos</h2>
    </div>
    <div class="col-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning" href ="{{route('vehicles.create') }}">+ Nuevo</a>
       
        </div>
        </div>
    </div>
    </div>
  <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Vehiculo</th>
            <th>Información</th>
            <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
        @forelse($vehiculos as $vehicle)
            <tr>
                <td>
                    <a class="btn btn-success" href="{{ route ('vehicles.show' , $vehicle->id)}}">
                         <h4>{{ $vehicle->brand }} {{ $vehicle->model }}</h4></td>
                    </a>
                <td>
                    <p><b>Color: </b>{{ $vehicle->color }}</p>
                    <p><b>Número de Serie: </b>{{ $vehicle->serialNumber }}</p>
                    <p><b>Puertas: </b>{{ $vehicle->numberDoors }}</p>
                    <p><b>Asientos: </b>{{ $vehicle->numberOfSeats }}</p>
                    <p><b>Matrícula: </b>{{ $vehicle->carRegistration }}</p>
                </td>
                <td><p>{{ $vehicle->description }}</p></td>
          
        @empty
            <h1>No hay datos en la base de datos</h1>
            </tr>
        @endforelse
        </tbody>
        </table>
  </div>
</div>



</div>