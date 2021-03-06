@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Categorias
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('categorias.show_fields')
                    <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
