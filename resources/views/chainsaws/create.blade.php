<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1 class="text-center fw-bold">Formulario - Motosierras</h1>

        <form action="{{ route('chainsaws.store') }}" method="post">
            @csrf
            <div>
                <label for="">Marca:</label>
                <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
            </div>
            <div>
                <label for="">Modelo:</label>
                <input class="form-control"  type="text" name="model" id="" placeholder="Modelo">
            </div>
            <div>
                <label for="">Peso (kg):</label>
                <input class="form-control"  type="number" name="weight" id="" placeholder="Peso (kg)">
            </div>
            <div>
                <label for="">Tipo de cadena:</label>
                <input class="form-control"  type="text" name="chainType" id="" placeholder="Tipo de cadena">
            </div>
            <div>
                <label for="">Potencia:</label>
                <input class="form-control" type="number" name="power" id="" placeholder="Potencia">
            </div>
            <div>
            <label for="">Capacidad de Tanque (L):</label>
                <input class="form-control"  type="number" name="tankCapacity" id="" placeholder="Capacidad de Tanque (L)">
            </div>
            <div>
            <label for="">Velocidad:</label>
                <input class="form-control"  type="number" name="speed" id="" placeholder="Velocidad">
            </div>
            <div>
                <label for="">Tipo de combustible:</label>
                <input class="form-control" type="text" name="typeFuel" id="" placeholder="Tipo de combustible">
            </div>
            
                
                <input class="btn btn-warning" type="submit" value="Guardar">
                
        </form>
</div>