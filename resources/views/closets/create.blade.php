<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1 class="text-center fw-bold">Formulario - Roperos</h1>
    <form action="{{route('closets.store')}}" method="post" enctype="multipart/form-data">
        @csrf 

        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Marca:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="brand" id="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Modelo:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="model" id="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Color:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="color" id="">
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Puertas:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberDoors" id="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Patas:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberLegs" id="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Cajones:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberDrawers" id="">
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Vidrios:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberGlasses" id="">
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tipo de Madera:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="typeWood" id="">
            </div>
        </div>
        </div>
        <br>
            <div>
                <label for="">Descripción:</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
            </div>
            <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-danger" type="reset" value="Restablcer">
                <input class="btn btn-success" type="submit" value="Guardar">
            </div>
    </form>
</div>
