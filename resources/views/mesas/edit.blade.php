<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<div class="container">
    <h1 class="text-center fw-bold">Actualizar datos de la mesa <b>{{ $mesa->brand }} {{ $mesa->model }}</b></h1>
    <form action="{{route('mesas.update' , $mesa->id)}}" method="post" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Marca:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="brand" value="{{ $mesa->brand }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Modelo:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="model" value="{{ $mesa->model }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Color:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="color" value="{{ $mesa->color }}"  required>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tipo de Madera:</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" name="typeWood" value="{{ $mesa->typeWood }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de Patas:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="numberLegs" value="{{ $mesa->numberLegs }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for=""> Altura:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="height" value="{{ $mesa->height }}"  required>
            </div>
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Ancho:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="width" value="{{ $mesa->width }}"  required>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Largo:</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" name="length" value="{{ $mesa->length }}"  required>
            </div>
        </div>
        </div>
        <br>
        <div>
            <label class="col-sm-2 col-form-label text-rigth">Descripción:</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10" required>{{ $mesa->description }} </textarea>
        </div>
        <br>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <input class="btn btn-danger" type="reset" value="Restablecer">
                <input class="btn btn-success" type="submit" value="Actualizar">
            </div>
    </form>
</div>
