@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Proveedores
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="x_panel">
                <div class="row" style="padding-left: 20px">
                    @include('proveedores.show_fields')
                    <a href="{{ route('proveedores.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection