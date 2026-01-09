<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HealTack</title>

  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('UI/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('UI/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('UI/vendors/css/vendor.bundle.base.css') }}">

  <!-- plugin css -->
  <link rel="stylesheet" href="{{ asset('UI/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('UI/js/select.dataTables.min.css') }}">

  <!-- main css -->
  <link rel="stylesheet" href="{{ asset('UI/css/vertical-layout-light/style.css') }}">
  <link rel="shortcut icon" href="{{ asset('UI/images/favicon.png') }}" />
</head>

<body>
<div class="container-scroller">

  {{-- NAVBAR --}}
  @auth
    @if (auth()->user()->role === 'admin')
      @include('layout.admin.navbar')
    @endif
  @endauth

  <div class="container-fluid page-body-wrapper">

    {{-- SIDEBAR --}}
    @auth
      @if (auth()->user()->role === 'admin')
        @include('layout.admin.sidebar')
      @endif
    @endauth

    {{-- CONTENT --}}
    <div class="main-panel">
      <div class="content-wrapper">
        @yield('content')
      </div>
    </div>

  </div>
</div>

<!-- JS -->
<script src="{{ asset('UI/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('UI/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('UI/vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('UI/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>

<script src="{{ asset('UI/js/off-canvas.js') }}"></script>
<script src="{{ asset('UI/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('UI/js/template.js') }}"></script>
<script src="{{ asset('UI/js/settings.js') }}"></script>
<script src="{{ asset('UI/js/todolist.js') }}"></script>

<script src="{{ asset('UI/js/dashboard.js') }}"></script>
<script src="{{ asset('UI/js/Chart.roundedBarCharts.js') }}"></script>
</body>
</html>
