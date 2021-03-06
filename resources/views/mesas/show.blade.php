<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
<br><br>
<div class="card">
    <div class ="card-header">
    <div class="row">
    <div class="col-md-8">
    <div class="card-title">
        <h2>Mesa: {{ $mesa->brand }} {{ $mesa->model }}</h2>
    </div>
    </div>
    <div class="col-md-4">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="btn btn-warning" href ="{{route('mesas.index') }}">< Regresar</a>
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
            <tr>
                <td>
                    <p>Imagen</p>
                <td>
                <p><b>Color: </b>{{ $mesa->color }}</p>
                    <p><b>Altura: </b>{{ $mesa->height}}</p>
                    <p><b>Ancho: </b>{{ $mesa->width }}</p>
                    <p><b>Tipo de Madera: </b>{{ $mesa->typeWood }}</p>
                    <p><b>Número de Patas: </b>{{ $mesa->numberLegs }}</p>
                </td>
                <td><p>{{ $mesa->description }}</p></td>
        </tbody>
        </table>
  </div>
  <div class="card-footer">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-info" href ="{{route('mesas.edit' , $mesa->id) }}">Editar</a>
                <form action="{{route('mesas.destroy' , $mesa->id)}}" method="post">
                @csrf 
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Eliminar">
                </form>
            </div>
        </div>
    </div>
</div>
</div>