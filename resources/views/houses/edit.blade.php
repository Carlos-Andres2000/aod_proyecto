<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1 class="text-center fw-bold">Actualizar datos de <b>{{ $house->home }}</b></h1>
    <form action="{{route('houses.update' , $house->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="home" value="{{ $house->home }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Color:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="color" value="{{ $house->color }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Puertas:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numDoors" value="{{ $house->numDoors }}" required>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Ventanas:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numWindows" value="{{ $house->numWindows }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Focos:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numFocus" value="{{ $house->numFocus }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Pisos:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numFloor" value="{{ $house->numFloor }}"  required>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Ancho:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="width" value="{{ $house->width }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Largo:</label>
            <div class="col-sm-10">
            <input class="form-control" type="number" name="length" value="{{ $house->length }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Altura:</label>
            <div class="col-sm-10">
            <input class="form-control" type="number" name="height" value="{{ $house->height }}"  required>
            </div>
        </div>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-danger" type="reset" value="Restablecer">
                <input class="btn btn-success" type="submit" value="Actualizar">
            </div>
    </form>
</div>