<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1>Formulario para crear un nuevo registro</h1>

        <form action="{{ route('vehicles.store') }}" method="post">
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
                <label for="">Color:</label>
                <input class="form-control"  type="text" name="color" id="" placeholder="Color" required>
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Número de serie:</label>
                <input class="form-control"  type="text" name="serialNumber" id="" placeholder="Número de serie" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Matrícula:</label>
                <input class="form-control" type="number" name="carRegistration" id="" placeholder="Matrícula" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de puertas:</label>
                <input class="form-control"  type="number" name="numberDoors" id="" placeholder="Número de puertas" required>
            </div>
            </div>
            <br>
            <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de asientos:</label>
                <input class="form-control"  type="number" name="numberOfSeats" id="" placeholder="Número de asientos" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Kilometraje:</label>
                <input class="form-control" type="number" name="miliage" id="" placeholder="Kilometraje" required>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
                <label for="">Capacidad de cilindro:</label>
                <input class="form-control" type="number" name="cylinderCapacity" id="" placeholder="Capacidad de cilindro" required>
            </div>
            </div>
            <br>
            <div>
                <label for="">Descripción:</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
            </div>
            <br>
            <div>
                <label for="">Comentario:</label>
                <input class="form-control" type="text" name="coment" id="" placeholder="Comentario">
            </div>
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-info" type="reset" value="Restablcer">
                <input class="btn btn-warning" type="submit" value="Guardar">
            </div>
        </form>
</div>