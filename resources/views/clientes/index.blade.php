@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Clientes</h1>
        <h1 class="pull-right">
        <!-- btn-primary pull-right -->
           <a class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('clientes.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <!-- class="box box-primary" -->
        <div class="x_panel">
            <div class="box-body">
                    @include('clientes.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $clientes])

        </div>
    </div>
@endsection

