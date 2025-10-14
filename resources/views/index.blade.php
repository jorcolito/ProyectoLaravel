<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyectos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-4">

      @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        
      <div class="row mb-4">
        <div class="col">1 of 3</div>
        <div class="col-6">
          <h1>Proyectos</h1>
          <a href="{{ route('proyectos.create') }}" class="btn btn-primary">Nuevo Proyecto</a>
        </div>
        <div class="col">3 of 3</div>
      </div>

      <div class="row">
        <div class="col">1 of 3</div>
        <div class="col-9">
          <table class="table table-bordered">
            <thead class="table-light">
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha creación</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($proyectos as $proyecto)
                <tr>
                  <th scope="row">{{ $proyecto->id }}</th>
                  <td>{{ $proyecto->nombre }}</td>
                  <td>{{ $proyecto->descripcon }}</td>
                  <td>{{ $proyecto->created_at }}</td>
                  <td>
                    <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar el proyecto: {{ $proyecto->nombre }}?')">Eliminar</button>
                    </form>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="col">3 of 3</div>
      </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>