@extends('admin.layout')
@section('content')
<div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Crear Lotificación</h5>
      </div>
      <div class="card-body">
        <form method="POST" id="form" action="{{route('admin.lotification.store')}}" autocomplete="off">
            @csrf
          <div class="mb-3">
            <label class="form-label" for="basic-default-fullname">Nombre Lotificación</label>
            <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" class="form-control @error('nombre') is-invalid @enderror"" placeholder="Ingrese el nombre de la lotificación">
            @error('nombre')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Departamento</label>
            <input type="text" id="departamento"  name="departamento" value="{{old('departamento')}}" class="form-control @error('departamento') is-invalid @enderror"" placeholder="Ingrese el departamento">
            @error('departamento')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-company">Ciudad</label>
            <input type="text" id="ciudad"  name="ciudad" value="{{old('ciudad')}}" class="form-control @error('ciudad') is-invalid @enderror"" placeholder="Ingrese la ciudad">
            @error('ciudad')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="mb-3">
            <label class="form-label" for="basic-default-phone">Precio</label>
            <input type="text" id="precio" name="precio" value="{{old('precio')}}" class="form-control @error('precio') is-invalid @enderror" phone-mask" placeholder="Ingrese el precio">
            @error('precio')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/additional-methods.min.js" defer></script>
    <script>
      $( document ).ready(function() {
        $.extend(jQuery.validator.messages, {
          required: "Este campo es obligatorio.",
          remote: "Please fix this field.",
          email: "Por favor ingrese un correo electrónico válido.",
          url: "Por favor ingrese una URL válida.",
          date: "Please enter a valid date.",
          dateISO: "Please enter a valid date (ISO).",
          number: "Por favor ingrese un número válido.",
          digits: "Por favor ingrese solo dígitos.",
          creditcard: "Please enter a valid credit card number.",
          equalTo: "Please enter the same value again.",
          accept: "Please enter a value with a valid extension.",
          maxlength: $.validator.format("Please enter no more than {0} characters."),
          minlength: $.validator.format("Please enter at least {0} characters."),
          rangelength: $.validator.format("Please enter a value between {0} and {1} characters long."),
          range: $.validator.format("Please enter a value between {0} and {1}."),
          max: $.validator.format("Please enter a value less than or equal to {0}."),
          min: $.validator.format("Please enter a value greater than or equal to {0}.")
        });
        $("#form").validate({
          errorClass: "is-invalid",
          validClass: "is-valid",
          rules: {
            nombre:{
              required: true,
              lettersonly: true
            },
            precio:{
              required: true,
              number: true
            },
            departamento:{
              required: true,
            },
            ciudad:{
              required: true,
            },
          },
          messages: {
              nombre: {
                lettersonly: "El campo nombre solo acepta letras y espacios"
              }
          }
        });
        jQuery.validator.addMethod('lettersonly', function(value, element) {
            return this.optional(element) || /^[a-z áãâäàéêëèíîïìóõôöòúûüùçñ]+$/i.test(value);
        }, "Letters and spaces only please");
      });
    </script>
@endpush
