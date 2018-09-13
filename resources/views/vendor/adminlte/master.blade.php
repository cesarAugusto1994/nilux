<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel='shortcut icon' type='image/x-icon' href="{{asset('dashboard/images/n-colorido.ico')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title_prefix', config('adminlte.title_prefix', ''))
@yield('title', config('adminlte.title', 'ImobiNavalha'))
@yield('title_postfix', config('adminlte.title_postfix', ''))</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link href="{{ asset('dashboard/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard/css/style.css') }}" rel="stylesheet" type="text/css" />

    @if(config('adminlte.plugins.select2'))
        <!-- Select2 -->
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css">
    @endif

    <!-- Theme style -->

    @if(config('adminlte.plugins.datatables'))
        <!-- DataTables with bootstrap 3 style -->
        <link rel="stylesheet" href="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css">
    @endif



    @yield('adminlte_css')

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition @yield('body_class')">

@yield('body')

<script src="{{ asset('dashboard/js/jquery.min.js') }}"></script>
<script src="{{ asset('dashboard/js/popper.min.js') }}"></script>
<script src="{{ asset('dashboard/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('dashboard/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('dashboard/js/waves.js') }}"></script>
<script src="{{ asset('dashboard/js/jquery.slimscroll.js') }}"></script>

<script src="{{ asset('dashboard/js/jquery.core.js') }}"></script>
<script src="{{ asset('dashboard/js/jquery.app.js') }}"></script>

@if(config('adminlte.plugins.select2'))
    <!-- Select2 -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@endif

@if(config('adminlte.plugins.datatables'))
    <!-- DataTables with bootstrap 3 renderer -->
    <script src="//cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
@endif

@if(config('adminlte.plugins.chartjs'))
    <!-- ChartJS -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js"></script>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.pt-BR.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.26.23/dist/sweetalert2.all.min.js"></script>

<script>

  $(".btnRemoveItem").click(function(e) {
      var self = $(this);

      swal({
        title: 'Remover este item?',
        text: "Não será possível recuperá-lo!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.value) {

          e.preventDefault();

          $.ajax({
            headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
            url: self.data('route'),
            type: 'POST',
            dataType: 'json',
            data: {
              _method: 'DELETE'
            }
          }).done(function(data) {

            self.parents('tr').hide();

            const toast = swal.mixin({
              toast: true,
              position: 'top-end',
              showConfirmButton: false,
              timer: 3000
            });

            toast({
              type: 'success',
              title: data.message
            })

          });


        }
      });

  });

</script>

<script>
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('.date').mask('00/00/0000');
</script>

@yield('adminlte_js')

</body>
</html>
