@extends('layouts.index')

@section('content')

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

    <!-- Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.dashboard') }}">
        <i class="icon-grid menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <!-- Obat -->
    <li class="nav-item">
      <a class="nav-link" href="{{ route('admin.obat.index') }}">
        <i class="icon-layers menu-icon"></i>
        <span class="menu-title">Data Obat</span>
      </a>
    </li>

  </ul>
</nav>

@endsection
