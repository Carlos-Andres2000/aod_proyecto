<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
<br><br>
<div class="card">
    <div class ="card-header">
    <div class="row">
    <div class="col-md-8">
    <h2 class="card-title">Listado de casas registradas</h2>
    </div>
    <div class="col-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning" href ="{{route('houses.create') }}">+ Nuevo</a>
       
        </div>
        </div>
    </div>
    </div>
  <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Casa</th>
            <th>Información</th>
            </tr>
        </thead>
        <tbody>
        @forelse($houses as $house)
            <tr>
                <td>
                    <a class="btn btn-success" href="{{ route ('houses.show' , $house->id)}}">
                         <h4>{{ $house->home }}</h4></td>
                    </a>
                <td>
                    <p><b>Color: </b>{{ $house->color }}</p>
                    <p><b>Número de Puertas: </b>{{ $house->numDoors}}</p>
                    <p><b>Número de ventanas: </b>{{ $house->numWindows }}</p>
                    <p><b>Número de Focos: </b>{{ $house->numFocus }}</p>
                    <p><b>Número de Plantas: </b>{{ $house->numFloor }}</p>
                </td>
          
        @empty
            <h1>No hay datos en la base de datos</h1>
            </tr>
        @endforelse
        </tbody>
        </table>
  </div>
</div>
</div>