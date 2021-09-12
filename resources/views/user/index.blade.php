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
</style>
@endpush
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="col s12">
        <div class="card">
          <div class="card-content">
            <h4 class="card-title">Usuarios</h4>
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
  </div>
</div>
@endsection
@push('scripts')

  <script>
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

    });
  </script>
@endpush
