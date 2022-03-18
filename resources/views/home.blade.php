@extends('dates.layout')
@section('content')

<!-- Carousel wrapper -->
<div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
    <!-- Controls -->

</div>
<!-- Inner -->
<div class="carousel-inner py-2">
    <!-- Single item -->



    <div class="carousel-item active">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2013/03/09/04/44/dog-91765_960_720.jpg" class="card-img-top" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Citas</h5>
                            <a href="{{ url('/date') }}" class="btn btn-secondary btn-lg"> <i class="fa fa-calendar" aria-hidden="true"></i> Agenda</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 d-none d-lg-block">
                    <div class="card">
                        <img src="https://cdn.pixabay.com/photo/2022/03/01/18/54/calendar-7041843_960_720.png" class="card-img-top" alt="Card image cap" />
                        <div class="card-body">
                            <h5 class="card-title">Crear nueva cita </h5>
                            <a href="{{ url('/date/create') }}" class="btn btn-secondary btn-lg"> <i class="fa fa-plus" aria-hidden="true"></i> Nueva cita</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>


</div>
<!-- Inner -->
</div>
<!-- Carousel wrapper -->


@endsection