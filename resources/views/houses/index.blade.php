<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<h1 class="text-center text-success">Casas Disponibles</h1>
        @forelse ($houses as $house)
                <li class="text-center text-warning">{{ $house->home }}</li>
        @empty
                <p>No hay elementos almacenados en la base de datos</p>
        @endforelse