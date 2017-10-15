@extends('layouts.base_user')

@section('title', 'Mis Movimientos')

@section('content')

<section class="customer-home credit-card" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
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
                                <th>Operación</th>   
                                <th>Fecha</th>
                                <th>Banco origen</th>                                         
                                <th>Monto enviado</th>       
                                <th>Banco destino</th>                                         
                                <th>Monto recibido</th>                                
                                <th>TC</th>
                            </tr> 
                        </thead> 
                        <tbody class="transparent"> 
                            @foreach($operations as $key => $operation) 
                            <tr> 
                                <td>{{$operation->number}}</td>                                         
                                <td>{{$operation->date}}</td> 
                                @if ( $operation->operationType == 1)
                                    <td>{{$operation->sourceAccount->bank->name}}</td> 
                                    <td>$ {{number_format($operation->sendAmount, 2 )}}</td>      
                                    <td>{{$operation->targetAccount->bank->name}}</td>                                         
                                    <td>S/ {{number_format($operation->receivedAmount, 2)}}</td>      
                                @else 
                                    <td>{{$operation->sourceAccount->bank->name}}</td> 
                                    <td>S/ {{number_format($operation->sendAmount, 2 )}}</td>      
                                    <td>{{$operation->targetAccount->bank->name}}</td>                                         
                                    <td>$ {{number_format($operation->receivedAmount, 2)}}</td>  
                                @endif
                                <td>{{$operation->changePrice}}</td>  
                            </tr> 
                            @endforeach
                        </tbody> 
                    </table>
                </div>
                {{ $operations->links() }}
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>


@endsection