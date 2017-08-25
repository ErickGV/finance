@extends('layouts.base_user')

@section('title', 'Operaciones')

@section('content')

<section class="customer-home" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap">
            <div class="text-inner"> 
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="to-animate" style="opacity: 1 !important;"> 
                            Nueva operación
                        </h2>
                    </div>
                </div><br>
            	{{Form::open(['route' => ['operations.index'], 'id'=>'formSuggestion', 'method' => 'GET'])}}
                    <div class="row">
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Envía</label>
                                <select class="form-control" name="send_currency">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" selected >Soles</option>
                                    <option value="2" >Dólares</option>
                                </select>                             
                            </div>
                        </div>       
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <div class="form-group input-group">
                                    <span style="background-color: #329998; color: #f9f6f0; border: 1px solid rgba(0, 0, 0, 0.1); border-left-width: 1px;" class="input-group-addon">PEN</span>
                                    <input type="text" class="form-control" name="send_amound" id="send_amound" placeholder="00.00">
                                </div>
                            </div>
                        </div>         
                    </div>        
                    <div class="row">
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Recibe</label>
                                <select disabled="true" class="form-control" name="recived_currency">  
                                    <option>Seleccione</option>                                       
                                    <option value="1"  >Soles</option>
                                    <option value="2" selected>Dólares</option>
                                </select>                             
                            </div>
                        </div>  
                        <div class="col-lg-6">  
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <div class="form-group input-group">
                                    <span style="background-color: #329998; color: #f9f6f0; border: 1px solid rgba(0, 0, 0, 0.1); border-left-width: 1px;" class="input-group-addon">USD</span>
                                    <input readonly="readonly" type="text" class="form-control" name="recived_amound" id="recived_amound" placeholder="00.00">
                                </div>
                            </div>  
                        </div>         
                    </div>
                    <div class="row">
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Banco de origen</label>
                                <select class="form-control" name="source_bank">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" selected >BBVA</option>
                                    <option value="2" >BCP</option>
                                    <option value="3" >INTERBANK</option>
                                    <option value="4" >SCOTIABANK</option>
                                </select>                             
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Cuenta de origen</label>
                                <select class="form-control" name="source_account">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" >19292319291329</option>
                                    <option value="2" selected >110002131333</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-6">
                            <div class="form-group">
                                <label>Banco de destino</label>
                                <select class="form-control" name="target_bank">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" >BBVA</option>
                                    <option value="2" selected >BCP</option>
                                    <option value="3" >INTERBANK</option>
                                    <option value="4" >SCOTIABANK</option>
                                </select>  
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Cuenta de origen</label>
                                <select class="form-control" name="target_account">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" selected >19292319291329</option>
                                    <option value="2" >110002131333</option>
                                </select>  
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-9"> 
                    	</div>	
                        <div class="col-lg-3 text-center">                                    
                            {{Form::submit('Guardar', ['class'=>'btn btn-primary btn-lg'])}}                                                                       
                            <a class="btn btn-danger btn-lg" href="{{ route('operations.index') }}">Cancelar</a>                                    
                        </div>
                    </div>
                    
                {{Form::close()}} 
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>



<script type="text/javascript">
	$(document).ready(function($) {
    });     
</script>

@endsection