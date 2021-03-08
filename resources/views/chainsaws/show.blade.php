<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
<br><br>
<div class="card">
    <div class ="card-header">
    <div class="row">
    <div class="col-md-8">
    <div class="card-title">
        <h2>Motosierra: {{ $chainsaw->brand }} {{ $chainsaw->model }}</h2>
    </div>
    </div>
    <div class="col-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning" href ="{{route('chainsaws.index') }}">< Regresar</a>
        </div>
        </div>
    </div>
    </div>
  <div class="card-body">
    <table class="table table-striped">
        <thead>
            <tr>
            <th>Motosierra</th>
            <th>Información</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <p>Imagen</p>
                <td>
                <p><b>Tipo de Cadena: </b>{{ $chainsaw->chainType }}</p>
                    <p><b>Potencia: </b>{{ $chainsaw->power}}</p>
                    <p><b>Capacidad del tanque: </b>{{ $chainsaw->tankCapacity }}</p>
                    <p><b>Velocidad: </b>{{ $chainsaw->speed }}</p>
                    <p><b>Tipo de Gasolina: </b>{{ $chainsaw->typeFuel }}</p>
                </td>
        </tbody>
        </table>
  </div>
  <div class="card-footer">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-info" href ="{{route('chainsaws.edit' , $chainsaw->id) }}">Editar</a>
                <a class="btn btn-danger" href ="{{route('chainsaws.destroy' , $chainsaw->id)}}">Eliminar</a>
            </div>
        </div>
    </div>
</div>
</div>