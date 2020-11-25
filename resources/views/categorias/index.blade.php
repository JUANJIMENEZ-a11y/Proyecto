@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Categorias</h1>
        <h1 class="pull-right">
           <a class="btn btn-success" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('categorias.create') }}">Add New</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="x_panel">
            <div class="box-body">
                    @include('categorias.table')
            </div>
        </div>
        <div class="text-center">
        
        @include('adminlte-templates::common.paginate', ['records' => $categorias])

        </div>
    </div>
@endsection

