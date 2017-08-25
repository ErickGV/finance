@extends('layouts.base_user')

@section('title', 'Cliente')

@section('content')
<section class="customer-home" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap">
            <div class="text-inner"> 
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="to-animate" style="opacity: 1 !important;"> 
                            Mis datos personales
                        </h2>
                    </div>
                </div><br>
                {{Form::open(['route' => ['customer.index'], 'id'=>'formSuggestion', 'method' => 'GET'])}}
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" name="name" placeholder="Nombre" maxlength="50">
                            </div>
                        </div>                                      
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Apellido paterno</label>
                                <input class="form-control" name="lastname" placeholder="Apellido parterno" maxlength="50">
                            </div>
                        </div> 
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Código de área</label>
                                <input class="form-control" name="area_code" placeholder="Código de area" maxlength="2">
                            </div>
                        </div> 
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>Número telefónico</label>
                                <input class="form-control" name="teplephone" placeholder="999 999 999" maxlength="12">
                            </div>
                        </div> 
                    </div>        
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Dirección</label>
                                <input class="form-control" name="address" placeholder="Dirección" maxlength="200">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Dirección opcional</label>
                                <input class="form-control" name="optional_address" placeholder="Dirección opcional" maxlength="200">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Tipo documento</label>
                                <select class="form-control" name="doc_type">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" selected >DNI</option>
                                    <option value="2" >PASAPORTE</option>
                                    <option value="3" >C.E.</option>
                                    <option value="4" >OTRO</option>
                                </select>                             
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Número de documento</label>
                                <input class="form-control" name="doc_code" placeholder="Número de documento" maxlength="15" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>País</label>
                                <select class="form-control" name="country">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" selected >Lima</option>
                                    <option value="2" >Huacho</option>
                                    <option value="3" >Cañete</option>
                                    <option value="4" >Chiclayo</option>
                                </select>                             
                            </div>
                        </div> 
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Ciudad</label>
                                <select class="form-control" name="city">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" selected >Lima</option>
                                    <option value="2" >Ica</option>
                                    <option value="3" >Ancash</option>
                                    <option value="4" >Trujillo</option>
                                </select>                             
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Provincia</label>
                                <select class="form-control" name="province">  
                                    <option>Seleccione</option>                                       
                                    <option value="1" selected >Lima</option>
                                    <option value="2" >Huacho</option>
                                    <option value="3" >Cañete</option>
                                    <option value="4" >Chiclayo</option>
                                </select>                             
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Código postal</label>
                                <input class="form-control" name="postal_code" placeholder="Código Postal" maxlength="8">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            {{Form::label('Fecha de nacimiento ',null, ['class'=>'control-label'] )}}                                    
                            <div class="input-group date" id="birthday">
                                <input type="text" class="form-control input-date" name="birthday" placeholder="aaaa-mm-dd" maxlength="10" required/>
                                <span style="background-color: #329998; color: #f9f6f0; border: 2px solid rgba(0, 0, 0, 0.1); border-left-width: 0px;" class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>                                      
                        </div>
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Sexo</label>
                                <select class="form-control" name="gender">                                           
                                    <option>Seleccione</option>
                                    <option value="1" selected >Masculino</option>
                                    <option value="2" >Femenino</option>
                                </select>                              
                            </div>
                        </div>
                    </div>    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="form-control" name="password" placeholder="Contraseña" maxlength="20">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Repetir contraseña</label>
                                <input type="password" class="form-control" name="repeated_password" placeholder="Repetir contraseña" maxlength="20">
                            </div>
                        </div>
                    </div>                    
                    <div class="row">
                        <div class="col-lg-8"> 
                        </div>  
                        <div class="col-lg-4 text-center">                                    
                            {{Form::submit('Guardar', ['class'=>'btn btn-primary btn-lg'])}}                                                                       
                            <a class="btn btn-default btn-lg" href="{{ route('customer.index') }}">Cancelar</a>                                    
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
		$("#birthday").datepicker({
            format: "yyyy-mm-dd",
            language: "es",
            autoclose: true,
            todayHighlight: true
    	});
    });     
</script>

@endsection