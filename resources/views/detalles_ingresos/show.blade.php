@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detalles Ingreso
        </h1>
    </section>
    <div class="content">
        <div class="x_panel">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('detalles_ingresos.show_fields')
                    <a href="{{ route('detallesIngresos.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
