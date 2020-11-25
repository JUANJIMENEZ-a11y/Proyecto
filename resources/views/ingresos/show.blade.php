@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ingresos
        </h1>
    </section>
    <div class="content">
        <div class="x_panel">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('ingresos.show_fields')
                    <a href="{{ route('ingresos.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
