<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1 class="text-center fw-bold">Formulario - Motosierras</h1>

        <form action="{{ route('chainsaws.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Marca:</label>
                    <input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Modelo:</label>
                    <input class="form-control"  type="text" name="model" id="" placeholder="Modelo" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Peso (kg):</label>
                    <input class="form-control"  type="number" name="weight" id="" placeholder="Peso (kg)" required>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Tipo de cadena:</label>
                    <input class="form-control"  type="text" name="chainType" id="" placeholder="Tipo de cadena" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Potencia:</label>
                    <input class="form-control" type="number" name="power" id="" placeholder="Potencia" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Capacidad de Tanque (L):</label>
                    <input class="form-control"  type="number" name="tankCapacity" id="" placeholder="Capacidad de Tanque (L)" required> 
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Velocidad:</label>
                    <input class="form-control"  type="number" name="speed" id="" placeholder="Velocidad" required>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                    <label for="">Tipo de combustible:</label>
                    <input class="form-control" type="text" name="typeFuel" id="" placeholder="Tipo de combustible" required>
                </div>
            </div>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-danger" type="reset" value="Restablcer">
                <input class="btn btn-success" type="submit" value="Guardar">
            </div>
        </form>
</div>