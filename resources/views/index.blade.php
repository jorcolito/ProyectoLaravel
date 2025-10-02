<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
    <body>
      <div class="container text-center">
    <div class="row">
      <div class="col">
        1 of 3
      </div>
      <div class="col-6">
        <h1>Hello, world!</h1>
      </div>
      <div class="col">
        3 of 3
      </div>
    </div>
    <div class="row">
      <div class="col">
        1 of 3
      </div>
      <div class="col-9">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nombre</th>
              <th scope="col">Descripcion</th>
              <th scope="col">Fecha creacion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($proyectos as $proyecto)
            <tr>
              <th scope="row">{{$proyecto->id}}</th>
              <td>{{$proyecto->nombre}}</td>
              <td>{{$proyecto->descripcon}}</td>
              <td>{{$proyecto->created_at}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>