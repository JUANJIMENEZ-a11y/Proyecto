@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Detalles Ventas</h1>
        <h1 class="pull-right">
           <a class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('detallesVentas.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="x_panel">
            <div class="box-body">
                    @include('detalles_ventas.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $detallesVentas])

        </div>
    </div>
@endsection

