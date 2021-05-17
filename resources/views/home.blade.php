@extends('layout.template')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content w-75">
        <router-view></router-view>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection