<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Proyecto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container text-center mt-4">
      <div class="row mb-4">
        <div class="col">1 of 3</div>
        <div class="col-6">2 of 3 (wider)</div>
        <div class="col">3 of 3</div>
      </div>
      <div class="row">
        <div class="col">1 of 3</div>
        <div class="col-5">
          <form action="{{ route('proyectos.store') }}" method="post">
            @csrf
            <input class="form-control mb-3" name="nombre" id="nombre" type="text" placeholder="Ingrese el título del proyecto.">

            <div class="mb-3">
              <label for="descripcon" class="form-label">Descripción del proyecto</label>
              <textarea class="form-control" name="descripcon" id="descripcon" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Crear Proyecto</button>
          </form>
        </div>
        <div class="col">3 of 3</div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
