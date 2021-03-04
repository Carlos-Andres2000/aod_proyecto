<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
@forelse($vehiculos as $vehicle)
    <li>
        <h3>{{ $vehicle->brand }} {{ $vehicle->model }}</h3>
        <p>{{ $vehicle->description }}</p>
        <br>
    </li>
@empty
    <h1>No hay datos en la base de datos</h1>
@endforelse