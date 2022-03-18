<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veterinaria</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <div class="d-flex flex-column flex-md-row align-items-right p-3 px-md-4 mb-3 bg-white border-bottom box-shadow navbar ">
    <h5 class="my-0 mr-md-auto font-weight-normal">Veterinaria </h5>
    <nav class="my-2 my-md-0 mr-md-3 navbar-dark navbar-light bg-light">
      <a class="p-2 text-dark" href="{{ url('/date') }}">Citas</a>
      <a class="p-2 text-dark" href="{{ url('/date/create') }}">Nueva cita</a>
    </nav>
  </div>

  <div class="container">
    @yield('content')
  </div>



</body>


</html>