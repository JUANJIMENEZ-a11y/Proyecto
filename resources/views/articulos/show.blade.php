@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Articulos
        </h1>
    </section>
    <div class="content">
        <!-- <div class="box box-primary"> -->
        <div class="x_panel">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('articulos.show_fields')
                    <a href="{{ route('articulos.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
