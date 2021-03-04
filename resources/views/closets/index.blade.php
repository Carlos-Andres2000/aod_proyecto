<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<h1 class="text-center text-success">Roperos en Inventario</h1>
        @forelse ($closets as $closet)
                <li class="text-center text-warning">{{ $closet->brand }}</li>
        @empty
                <p>No hay elementos almacenados en la base de datos</p>
        @endforelse