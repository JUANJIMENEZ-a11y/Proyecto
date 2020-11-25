@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ventas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="x_panel">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ventas, ['route' => ['ventas.update', $ventas->id], 'method' => 'patch']) !!}

                        @include('ventas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection