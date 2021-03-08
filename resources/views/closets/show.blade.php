<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
<br><br>
<div class="card">
    <div class ="card-header">
    <div class="row">
    <div class="col-md-8">
    <div class="card-title">
        <h2>Ropero: {{ $closet->brand }} {{ $closet->model }}</h2>
    </div>
    </div>
    <div class="col-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning" href ="{{route('closets.index') }}">< Regresar</a>
        </div>
        </div>
    </div>
    </div>
  <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Ropero</th>
            <th>Información</th>
            <th>Descripción</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p>Imagen</p>
                <td>
                    <p><b>Color: </b>{{ $closet->color }}</p>
                    <p><b>Número de Puertas: </b>{{ $closet->numberDoors}}</p>
                    <p><b>Tipo de Madera: </b>{{ $closet->typeWood }}</p>
                    <p><b>Número de Patas: </b>{{ $closet->numberLegs }}</p>
                    <p><b>Número de Vidrios: </b>{{ $closet->numberGlasses }}</p>
                </td>
                <td><p>{{ $closet->description }}</p></td>
        </tbody>
        </table>
  </div>
  <div class="card-footer">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-info" href ="{{route('closets.edit' , $closet->id) }}">Editar</a>
                <a class="btn btn-danger" href ="{{route('closets.destroy' , $closet->id)}}">Eliminar</a>
            </div>
        </div>
    </div>
</div>
</div>