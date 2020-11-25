@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="build/css/custom.min.css" rel="stylesheet">
@endpush

@section('content')
    <section class="content-header">
        <h1>
            Clientes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="x_panel">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($clientes, ['route' => ['clientes.update', $clientes->id], 'method' => 'patch']) !!}

                        @include('clientes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>




@endsection