@extends('layouts.app')
@section('title','Usuarios')
@push('styles')

<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('public/css/data-tables.min.css')}}">
<style>
  #main .section-data-tables .dataTables_wrapper table.dataTable tbody {
    height: auto !important;
  }

  .modal {
    width: 40%;
    max-height: none;
  }
</style>
@endpush
@section('content')

<div class="container">

  <di class="col-md-12">
    <h4 class="center"><strong>Usuarios</strong></h4>
  </di>
  <div class="col-md-12 justify-content-center">
    <div class="card">
      <div class="card-content">
        <div class="row section-data-tables">
          <button data-url="{{route('user.create')}}" class="add btn mb-1 waves-effect waves-light " type="submit" name="action">Nuevo usuario
            <i class="material-icons right">add</i>
          </button>
        </div>
        <div class="row section-data-tables">
          <div class="col s12">
            <div id="page-length-option_wrapper" class="dataTables_wrapper">
              @include('user.partials.search')
              <div id="user-table">
                @include('user.partials.user-table', ['users' => collect()])
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
@push('scripts')

  <script>
    var modal = null;
    $(document).ready(function() {
      var filters={};

      $('.search').click(function() {
        filters = {
            filters: [
                {field: 'user_name', operator: 'contains', value: $("input[name=user_name]").val()},
                {field: 'name', operator: 'contains', value:  $("input[name=name]").val()},
                {field: 'state', value: $("select[name=state]").val()},
            ]
        };
      var form = $("#form-user-seach");
      $.ajax({
        url: form.attr('action'),
        method: 'get',
        data: filters,
        success: function(view) {
          $("#user-table").html(view);
        }
      });

    });

      $('.clean').click(function () {
      });

      $(document).on('click','.add', function () {
        var btn = $(this);


        $.ajax({
          url: btn.data('url'),
          success: function (view) {
            modal =  mzbox.dialog({
              dismissible: true,
              animate: true,
              size: 'large',
              title: 'Crear usuario',
              message: htmlToElement(view),
              callback: function aa() {
                return false;
              }
            });

            $(".input-document-number").inputFilter(function (value) {
              return format_numeric(value) && value.length <= 8;
            });

            $(".input-text").inputFilter(function (value) {
              return format_text(value);
            });

          }
        });
      });

      $(document).on('click','.store', function () {
        var form = $("#form-data");
        form.validate({
         rules: {
          user_name: {
            required: true
          },
         },
          errorElement: 'span'
        });

        if(!form.valid()) {
          return false;
        }

        $.ajax({
          url: form.attr('action'),
          type: 'post',
          data: form.serializeArray(),
          success: function () {
            swal({
              title: "Usuario creado",
              text: "Se ha creado el usuario sin problemas",
              icon: 'success',
              buttons: {
                ok: 'Aceptar'
              }
            });

            modal.close();
          },
          error: function (res) {
            var response = res.responseJSON;
            var keysError = Object.keys(response.errors);
            if(response && response.errors){
              keysError.forEach(function (key) {
                console.log("#input_"+key);
                $("#input_"+key).parent().find('span').remove();
                $("#input_"+key).parent().append('<span class="error">'+response.errors[key][0]+'</span>');
                console.log(response.errors[key][0]);
              })
            }
          }
        });
      });

      $(document).on('click', '.cancel', function () {
        modal.close();
      });
    });

    $(document).on('keyup', 'input[name=document_number]', function (e) {
      $("input[name=password]").val($(this).val());
      if($(this).val()) {
        $("#label-password").addClass('active');
      } else  {
        $("#label-password").removeClass('active');
      }
    });
  </script>
@endpush
