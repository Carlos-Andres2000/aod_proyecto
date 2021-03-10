<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
<br><br>
<div class="card">
    <div class ="card-header">
    <div class="row">
    <div class="col-md-8">
    <h2 class="card-title">Listado de mesas registradas</h2>
    </div>
    <div class="col-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning" href ="{{route('mesas.create') }}">+ Nuevo</a>
       
        </div>
        </div>
    </div>
    </div>
  <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Mesa</th>
            <th>Información</th>
            <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
        @forelse($mesa as $mesas)
            <tr>
                <td>
                    <a class="btn btn-success" href="{{ route ('mesas.show' , $mesas->id)}}">
                         <h4>{{ $mesas->brand }} {{ $mesas->model }}</h4></td>
                    </a>
                <td>
                    <p><b>Color: </b>{{ $mesas->color }}</p>
                    <p><b>Altura: </b>{{ $mesas->height}}</p>
                    <p><b>Ancho: </b>{{ $mesas->width }}</p>
                    <p><b>Tipo de Madera: </b>{{ $mesas->typeWood }}</p>
                    <p><b>Número de Patas: </b>{{ $mesas->numberLegs }}</p>
                </td>
                <td><p>{{ $mesas->description }}</p></td>
          
        @empty
            <h1>No hay datos en la base de datos</h1>
            </tr>
        @endforelse
        </tbody>
        </table>
  </div>
</div>
</div>