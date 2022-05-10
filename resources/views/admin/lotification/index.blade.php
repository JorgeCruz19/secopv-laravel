@extends('admin.layout')
@push('css')
<link rel="stylesheet" href="{{asset('vendor/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
@endpush
@section('content')
<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Lotificaciones</h5>
      </div>
      <div class="card-body">
        <table id="lotifications-table" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Departamento</th>
                <th>Ciudad</th>
                <th>Precio</th>
                <th>Acciones</th>

              </tr>
            </thead>
            <tbody>
              @foreach ($lotifications as $lotification)
              <tr>
                <td>{{$lotification->id}}</td>
                <td>{{$lotification->nombre}}</td>
                <td>{{$lotification->departamento}}</td>
                <td>{{$lotification->ciudad}}</td>
                <td>{{$lotification->precio}}</td>
                <td class="text-center">
                  <a href="{{route('admin.lotification.edit', $lotification)}}" class="btn btn-sm btn-primary"><i
                      class="bx bxs-pencil"></i></a>
                  <form method="POST" action="{{route('admin.lotification.destroy', $lotification)}}"
                    style="display: inline-block">
                    @csrf @method('DELETE')
                    <button href="#" class="btn btn-sm btn-danger"><i class="bx bxs-folder-minus"></i></button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
            $("#lotifications-table").DataTable({
              "responsive": true,
              "autoWidth": false,
              language: {
                url: '//cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json'
              }
            });
          });
</script>
@endpush
