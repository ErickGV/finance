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
                <div class="row">
                    <div class="col-lg-12">
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
                </div>
                {{Form::open(['route' => ['customer.update', $customer->id], 'id'=>'formSuggestion'])}}
                {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Nombre</label>
                                <input disabled="true" class="form-control" value="{{ $customer->name }}" name="name" placeholder="Nombre" maxlength="50">
                            </div>
                        </div>                                      
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Apellido paterno</label>
                                <input disabled="true" class="form-control" value="{{ $customer->fatherLastname }}" name="fatherLastname" placeholder="Apellido parterno" maxlength="50">
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Apellido materno</label>
                                <input disabled="true" class="form-control" value="{{ $customer->motherLastname }}" name="motherLastname" placeholder="Apellido materno" maxlength="50">
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                <input disabled="true" class="form-control" value="{{ $customer->user->email }}" type="email" name="email" placeholder="persona@ftransfer.pe" maxlength="30">
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                <label>Número Fijo</label>
                                <input class="form-control" value="{{ $customer->telephone }}" name="telephone" placeholder="01 555 5555" maxlength="12">
                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> 
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('mobilephone') ? ' has-error' : '' }}">
                                <label>Número Celular</label>
                                <input class="form-control" name="mobilephone" value="{{ $customer->mobilephone }}" placeholder="999 999 999" maxlength="12">
                                @if ($errors->has('mobilephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobilephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>        
                    <div class="row">
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Tipo documento</label>
                                <select disabled="true" class="form-control" name="doc_type">                         
                                    <option value="{{ $customer->docType->id }}" selected >{{ $customer->docType->name }}</option>
                                </select>                             
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Número de documento</label>
                                <input disabled="true" value="{{ $customer->docCode }}" class="form-control" name="doc_code" placeholder="Número de documento" maxlength="15" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            {{Form::label('Fecha de nacimiento ',null, ['class'=>'control-label'] )}}                                    
                            <div class="input-group date" id="birthday">
                                <input disabled="true" value="{{ $customer->birthday }}" type="text" class="form-control input-date" name="birthday" placeholder="aaaa-mm-dd" maxlength="10" required/>
                                <span  style="background-color: #329998; color: #f9f6f0; border: 2px solid rgba(0, 0, 0, 0.1); border-left-width: 0px;" class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                            </div>                                      
                        </div>
                        <div class="col-lg-6">                                    
                            <div class="form-group">
                                <label>Sexo</label>
                                <select disabled="true" class="form-control" name="gender">   
                                    <option value="{{ $customer->gender->id }}" selected >{{ $customer->gender->name }}</option>
                                </select>                              
                            </div>
                        </div>
                    </div>    
                    <!-- <div class="row">
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
                    <br>                 -->  
                    <br>
                    <div class="row">
                        <div class="col-lg-8"> 
                        </div>  
                        <div class="col-lg-4 text-center">                                    
                            {{Form::submit('Guardar', ['class'=>'btn btn-primary btn-lg'])}}                                                                       
                            <a class="btn btn-default btn-lg" href="{{ route('operations.index') }}">Cancelar</a>                                    
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