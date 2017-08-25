@extends('layouts.base_user')

@section('title', 'Mis Movimientos')

@section('content')

<section class="customer-home" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap">
            <div class="text-inner"> 
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="to-animate" style="opacity: 1 !important;"> 
                            Mis movimientos
                        </h2>
                    </div>
                </div><br>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead> 
                            <tr class="headings"> 
                                <th>Banco</th>                                         
                                <th>Número de cuenta</th>                                         
                                <th>Moneda</th>                                         
                                <th>Monto</th>
                                <th>Fecha</th>
                            </tr> 
                        </thead> 
                        <tbody class="transparent"> 
                            <tr> 
                                <td>BCP</td>                                         
                                <td>2131232312</td> 
                                <td>Soles</td>                                         
                                <td>100.00</td>
                                <td>10/05/2017</td>
                            </tr> 
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>


@endsection