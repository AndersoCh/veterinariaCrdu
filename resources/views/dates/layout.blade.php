<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Veterinaria</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

  <!-- Add icon library -->

  <!-- Add font awesome icons to buttons  -->


  <div class="d-flex flex-column flex-md-row align-items-right p-3 px-md-4 mb-3 bg-white border-bottom box-shadow navbar ">
    <!-- <h5 class="my-0 mr-md-auto font-weight-normal" >Veterinaria </h5> -->
    <a href="{{ url('/') }}" class="btn btn-outline-dark " title="Home">
      <i class="fa fa-home btn btn-dark" aria-hidden="true"></i> veterinaria
    </a>
    <nav class="my-2 my-md-0 mr-md-3 navbar-dark navbar-light bg-light">

      <a href="{{ url('/date') }}" class=" btn btn-outline-dark " title="Home">
        <i class="fa fa-calendar" aria-hidden="true"></i> Citas
      </a>
      <a href="{{ url('/date/create') }}" class="btn btn-outline-dark" title="Home">
        <i class="fa fa-plus" aria-hidden="true"></i> Nueva cita
      </a>





    </nav>


  </div>

  <div class="container">
    @yield('content')
  </div>



</body>


</html>