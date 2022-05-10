@extends('admin.layout')
@section('content')
<div class="col-lg-12 mb-4 order-0">
    <div class="card">
        <div class="d-flex align-items-end row">
        <div class="col-sm-7">
            <div class="card-body">
            <h5 class="card-title text-primary">Versículo del día! 🎉</h5>
            <p class="mb-4">
                «Bendito el hombre que confía en el <span class="fw-bold">Señor</span> y pone su confianza en él. Será como un árbol plantado junto al agua, que extiende sus raíces hacia la corriente; no teme que llegue el calor, y sus hojas están siempre verdes. En época de sequía no se angustia, y nunca deja de dar fruto.»</p>
            </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
            <img src="{{"images/man-with-laptop-light.png"}}" height="140" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
            </div>
        </div>
        </div>
    </div>
</div>
<div class="col-lg-12 mb-4 order-0">
    <div class="d-flex w-100 justify-content-evenly flex-wrap">
        <div class="col-12 col-md-5 mb-4 ">
            <div class="card bg-info text-white mb-3">
                <div class="card-header">
                    <i class="bx bxs-user"></i>
                </div>
                <div class="card-body">
                <h5 class="card-title text-white">Lotificaciones</h5>
                <p class="card-text">{{$lotifications->count()}}</p>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-5 mb-4">
            <div class="card bg-warning text-white mb-3">
                <div class="card-header">
                    <i class="bx bxs-user"></i>
                </div>
                <div class="card-body">
                <h5 class="card-title text-white">Usuarios</h5>
                <p class="card-text">{{$users->count()}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
