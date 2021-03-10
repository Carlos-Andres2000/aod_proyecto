<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1 class="text-center fw-bold">Actualizar datos del <b>{{ $closet->model }}</b></h1>
    <form action="{{route('closets.update' , $closet->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method ('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Marca:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="brand" value="{{ $closet->brand }}" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Modelo:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="model" value="{{ $closet->model }}" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Color:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="color" value="{{ $closet->color }}" required>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Puertas:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberDoors" value="{{ $closet->numberDoors }}" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Patas:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberLegs" value="{{ $closet->numberLegs }}" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Cajones:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberDrawers" value="{{ $closet->numberDrawers }}" required>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Vidrios:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberGlasses" value="{{ $closet->numberGlasses }}" required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tipo de Madera:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="typeWood" value="{{ $closet->typeWood }}" required>
            </div>
        </div>
        </div>
        <br>
            <div>
                <label for="">Descripción:</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $closet->description }}</textarea>
            </div>
            <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-danger" type="reset" value="Restablecer">
                <input class="btn btn-success" type="submit" value="Actualizar">
            </div>
    </form>
</div>