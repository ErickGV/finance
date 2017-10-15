@extends('layouts.base_user')

@section('title', 'Cuentas bancarias')

@section('content')

<section class="customer-home credit-card" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
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
                                <th>Tipo de cuenta</th>                                         
                                <th>Número de cuenta</th>       
                                <th>Moneda</th>                                         
                                <th>Alias</th>                                         
                                <th colspan="2">Acciones</th>
                            </tr> 
                        </thead> 
                        <tbody class="transparent"> 
                            @foreach($accounts as $key => $account) 
                            <tr> 
                                <td>{{$account->bank->name}}</td>                                         
                                <td>{{$account->accountType->name}}</td> 
                                <td>{{$account->number}}</td> 
                                <td>{{$account->currency->name}}</td>      
                                <td>{{$account->alias}}</td>                                         
                                <td>
                                    <a href="{{route('bank_account.edit', $account->id)}}" class="btn btn-primary btn-xs" title="Editar"><i class="fa fa-pencil"></i></a>
                                    
                                    <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#{{$account->id}}" title="Eliminar"><i class="fa fa-remove"></i></a>
                                    
                                </td>
                            </tr> 
                            @include('modals.delete', ['id'=> $account->id, 'message' => '¿Está seguro que desea eliminar esta cuenta bancaria?', 'route' => route('bank_account.delete', $account->id)])
                            @endforeach
                        </tbody> 
                    </table>
                </div>
                {{ $accounts->links() }}
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>


@endsection