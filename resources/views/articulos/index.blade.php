@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Articulos</h1>
        <h1 class="pull-right">
           <a class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('articulos.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="x_panel">
            <div class="box-body">
                    @include('articulos.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $articulos])

        </div>
    </div>
@endsection
