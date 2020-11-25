@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Detalles Venta
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="x_panel">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($detallesVenta, ['route' => ['detallesVentas.update', $detallesVenta->id], 'method' => 'patch']) !!}

                        @include('detalles_ventas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection