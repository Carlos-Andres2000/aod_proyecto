<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1>Formulario para crear un nuevo registro</h1>

        <form action="{{ route('vehicles.store') }}" method="post">
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
                <label for="">Color:</label>
                <input class="form-control"  type="text" name="color" id="" placeholder="Color">
            </div>
            <div>
                <label for="">Número de serie:</label>
                <input class="form-control"  type="text" name="serialNumber" id="" placeholder="Número de serie">
            </div>
            <div>
                <label for="">Matrícula:</label>
                <input class="form-control" type="number" name="carRegistration" id="" placeholder="Matrícula">
            </div>
            <div>
            <label for="">Número de puertas:</label>
                <input class="form-control"  type="number" name="numberDoors" id="" placeholder="Número de puertas">
            </div>
            <div>
            <label for="">Número de asientos:</label>
                <input class="form-control"  type="number" name="numberOfSeats" id="" placeholder="Número de asientos">
            </div>
            <div>
                <label for="">Kilometraje:</label>
                <input class="form-control" type="number" name="miliage" id="" placeholder="Kilometraje">
            </div>
            <div>
                <label for="">Capacidad de cilindro:</label>
                <input class="form-control" type="number" name="cylinderCapacity" id="" placeholder="Capacidad de cilindro">
            </div>
            <div>
                <label for="">Descripción:</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
            </div>
            <div>
                <label for="">Comentario:</label>
                <input class="form-control" type="text" name="coment" id="" placeholder="Comentario">
            </div>
                
                <input class="btn btn-warning" type="submit" value="Guardar">
                
        </form>
</div>