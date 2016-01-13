<?php
$dashboard_elems = [
        "#" => ["add_database", "Crear productos o servicios"],
        "#productos" => ["shop", "Productos y servicios"],
        "#proyectos" => ["opened_folder", "Proyectos"],
        "#nuevo_proyecto" => ["idea", "Crear proyecto"],
        "#clientes" => ["contacts", "Agenda"],
        "#nuevo_cliente" => ["good_decision", "Nuevo cliente"],
        "#facturas" => ["filing_cabinet", "Ver facturas"],
        "#nueva_factura" => ["invite", "Nueva factura"],
        "#usuarios" => ["address_book", "Mis usuarios"],
        "#nuevo_usuario" => ["key", "Nuevo usuario"],

];
$i=1;
?>
@extends('main')

@section('title')
    Dashboard
@endsection

@section('content')
    @include('_nav')
    <div class="container">
        <div class="row padded">
            <div class="col s12">
                <div class="row">
                    <div class="col s12">
                        <h1 class="grey-text text-darken-4">Bienvenido a tu panel, Pablo</h1>
                        <h5 class="grey-text text-darken-1">¿Qué deseas hacer?</h5>
                    </div>
                </div>
                <div class="row">
                    @foreach($dashboard_elems as $url => $elem)
                        @if($i%4 == 0)<div class="row"> @endif
                        <a href="{!! $url !!}">
                            <div class="col s12 m4 l3 dashboard-item">
                                <div class="dashboard-item-icon">
                                    <img src="/components/flat-color-icons/svg/{{ $elem[0] }}.svg">
                                </div>
                                <div class="dashboard-item-text center-align uppercase">
                                    {{ $elem[1] }}
                                </div>
                            </div>
                        </a>
                        @if($i%4 == 0) </div> @endif
                        <?php $i++; ?>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('_footer')
@endsection

@section('scripts')
    <script>
        initHome();
    </script>
@endsection