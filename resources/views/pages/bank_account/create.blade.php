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
                            Datos de cuenta bancaria
                        </h2>
                    </div>
                </div><br>
                {{Form::open(['route' => 'bank_account.store', 'id'=>'formSuggestion'])}}
                    <div class="row">                                
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Banco</label>
                                <select class="form-control" name="bank" id="bank">                                           
                                    <option value="1" selected>BBVA</option>
                                    <option value="2">INTERBANK</option>
                                    <option value="3">BCP</option>
                                    <option value="4">SCOTIABANK</option>
                                </select>
                            </div>
                        </div>                                   
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Moneda</label>
                                <select class="form-control" name="currency" id="currency">                                           
                                    <option value="1" selected>Soles</option> 
                                    <option value="2">Dólares</option>                                            
                                </select>
                            </div>
                        </div>                                                                                           
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Número de cuenta</label>
                                <input class="form-control" name="account_number" placeholder="Número de cuenta" maxlength="15">
                            </div>                               
                        </div>                                                           
                    </div>     
                    <div class="row">  
                        <div class="col-lg-8"></div>                                              
                        <div class="col-lg-4 form-group text-center">                                    
                            <button class="btn btn-primary btn-lg" type="submit">Guardar</button>                                    
                            <a class="btn btn-default btn-lg" href="{{ route('bank_account.index') }}">Cancelar</a>                                      
                        </div>
                    </div>    
                {{Form::close()}}
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>

<script type="text/javascript">
    

</script>
@endsection