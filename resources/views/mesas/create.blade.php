<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1 class="text-center fw-bold">Formulario - Mesas</h1>
    <form action="{{route('mesas.store')}}" method="post" enctype="multipart/form-data">
        @csrf 

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth">Marca:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="brand" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth">Modelo:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="model" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth">Color:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="color" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth">Tipo de Madera:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="typeWood" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth">Número de Patas:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberLegs" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth"> Altura:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="height" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth">Ancho:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="width" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth">Largo:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="length" id="">
            </div>
        </div>
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label text-rigth">Descripción:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <div class = "d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-warning text-left" type="submit" value="Guardar">
        </div>
    </form>
</div>
