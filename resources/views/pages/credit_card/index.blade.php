@extends('layouts.base_user')

@section('title', 'Tarjetas de crédito')

@section('content')

<section class="customer-home credit-card" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap">
            <div class="text-inner"> 
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="to-animate" style="opacity: 1 !important;"> 
                            Mis tarjetas
                        </h2>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-9">
                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                <strong>{{ session()->get('success') }}</strong>
                            </div>
                        @endif
                        @if(session()->has('warning'))
                            <div class="alert alert-danger">
                                <strong>{{ session()->get('warning') }}</strong>
                            </div>
                        @endif
                    </div> 
                    <div class="col-lg-3 form-group text-center">
                        <a href="{{route('credit_card.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nueva',['class'=>'btn btn-primary btn-lg'])}}
                        </a>
                    </div>                            
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead> 
                            <tr class="headings"> 
                                <th>Banco</th>                                         
                                <th>Número de tarjeta</th>                                         
                                <th>Moneda</th>  
                                <th>Alias</th>                                        
                                <th colspan="2">Acciones</th>
                            </tr> 
                        </thead> 
                        <tbody class="transparent"> 
                            @foreach($credit_cards as $key => $credit_card) 
                            <tr> 
                                <td>{{$credit_card->bank->name}}</td>                                         
                                <td>{{$credit_card->number}}</td> 
                                <td>{{$credit_card->currency->name}}</td>      
                                <td>{{$credit_card->alias}}</td>                                                
                                <td>
                                    <a href="{{route('credit_card.edit', $credit_card->id)}}" class="btn btn-primary btn-xs" title="Editar"><i class="fa fa-pencil"></i></a>
                                    
                                    <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#{{$credit_card->id}}" title="Eliminar"><i class="fa fa-remove"></i></a>
                                    
                                </td>
                            </tr> 
                            @include('modals.delete', ['id'=> $credit_card->id, 'message' => '¿Está seguro que desea eliminar esta tarjeta de crédito?', 'route' => route('credit_card.delete', $credit_card->id)])
                            @endforeach
                        </tbody> 
                    </table>
                </div>
                {{ $credit_cards->links() }}
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>

@endsection