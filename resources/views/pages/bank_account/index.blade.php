@extends('layouts.base_user')

@section('title', 'Cuentas bancarias')

@section('content')

<section class="customer-home" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap">
            <div class="text-inner"> 
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="to-animate" style="opacity: 1 !important;"> 
                            Mis cuentas bancarias
                        </h2>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-9">
                    </div> 
                    <div class="col-lg-3 form-group text-center">
                        <a href="{{route('bank_account.create')}}">
                            {{Form::button('<i class="fa fa-plus"></i> Nueva',['class'=>'btn btn-primary btn-lg'])}}
                        </a>
                    </div>                            
                </div>
                <div class="table-responsive">
                    <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                        <thead> 
                            <tr class="headings"> 
                                <th>Banco</th>                                         
                                <th>Número de cuenta</th>                                         
                                <th>Moneda</th>                                         
                                <th colspan="2">Acciones</th>
                            </tr> 
                        </thead> 
                        <tbody class="transparent"> 
                            <tr> 
                                <td>BCP</td>                                         
                                <td>2131232312</td> 
                                <td>Soles</td>                                         
                                <td>
                                    <a href="#" class="btn btn-primary btn-xs" title="Editar"><i class="fa fa-pencil"></i></a>
                                    
                                    <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#1" title="Eliminar"><i class="fa fa-remove"></i></a>
                                    
                                </td>
                            </tr> 
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>
@include('modals.delete', ['id'=> 1, 'message' => '¿Está seguro que desea eliminar esta cuenta bancaria?', 'route' => route('bank_account.index'), 'method' => 'GET' ])


@endsection