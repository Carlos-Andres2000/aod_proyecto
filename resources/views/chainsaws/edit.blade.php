<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1 class="text-center">Actualizar datos de la motosierra <b>{{ $Chainsaw->brand }} {{ $Chainsaw->model }}</b></h1>

        <form action="{{ route('chainsaws.update' , $Chainsaw->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Marca:</label>
                    <input class="form-control" type="text" name="brand" value="{{ $Chainsaw->brand }}" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Modelo:</label>
                    <input class="form-control"  type="text" name="model" value="{{ $Chainsaw->model }}" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Peso (kg):</label>
                    <input class="form-control"  type="number" name="weight" value="{{ $Chainsaw->weight }}" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Tipo de cadena:</label>
                    <input class="form-control"  type="text" name="chainType" value="{{ $Chainsaw->chainType }}" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Potencia:</label>
                    <input class="form-control" type="number" name="power" value="{{ $Chainsaw->power }}" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Capacidad de Tanque (L):</label>
                    <input class="form-control"  type="number" name="tankCapacity" value="{{ $Chainsaw->tankCapacity }}" required> 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Velocidad:</label>
                    <input class="form-control"  type="number" name="speed" value="{{ $Chainsaw->speed }}" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Tipo de combustible:</label>
                    <input class="form-control" type="text" name="typeFuel" value="{{ $Chainsaw->typeFuel }}" required>
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-danger" type="reset" value="Restablecer">
                <input class="btn btn-success" type="submit" value="Guardar">
            </div>
        </form>
</div>