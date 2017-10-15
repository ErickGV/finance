@extends('layouts.base_login')

@section('content')
<section class="register-home" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap" style="height:400px !important;">
            <div class="text-inner" style="height:400px !important;"> 
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="to-animate" style="opacity: 1 !important;"> 
                            Resgistro
                        </h2>
                    </div>
                </div><br>
                <form role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Nombre</label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombre">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('fatherLastname') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Apellido paterno</label>
                                <input id="fatherLastname" type="text" class="form-control" name="fatherLastname" value="{{ old('fatherLastname') }}" placeholder="Apellido parterno" maxlength="50">

                                @if ($errors->has('fatherLastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fatherLastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('motherLastname') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Apellido materno</label>
                                <input id="motherLastname" type="text" class="form-control" name="motherLastname" value="{{ old('motherLastname') }}" placeholder="Apellido materno" maxlength="50">

                                @if ($errors->has('motherLastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('motherLastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="control-label">Correo electrónico</label>
                                <input placeholder="correo@ftransfer.pe" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Teléfono fijo</label>
                                <input id="telephone" type="text" class="form-control" name="telephone" value="{{ old('telephone') }}" placeholder="01 555 5555" maxlength="12">

                                @if ($errors->has('telephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('mobilephone') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Celular</label>
                                <input id="mobilephone" type="text" class="form-control" name="mobilephone" value="{{ old('mobilephone') }}" placeholder="999 999 999" maxlength="12">

                                @if ($errors->has('mobilephone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobilephone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('doc_type') ? ' has-error' : '' }}">
                                <label for="doc_type" class="control-label">Tipo de documento</label>
                                <select id="doc_type" class="form-control" name="doc_type"> 
                                </select>   

                                @if ($errors->has('doc_type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('doc_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('doc_code') ? ' has-error' : '' }}">
                                <label for="doc_code" class="control-label">Número de documento</label>
                                <input id="doc_code" type="text" class="form-control" name="doc_code" value="{{ old('doc_code') }}" placeholder="77777777" maxlength="15">

                                @if ($errors->has('doc_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('doc_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Fecha de nacimiento</label>
                                <div class="input-group date" id="birthday">
                                    <input type="text" class="form-control input-date" name="birthday" value="{{ old('birthday') }}" placeholder="aaaa-mm-dd" maxlength="10">
                                    <span style="background-color: #329998; color: #f9f6f0; border: 2px solid rgba(0, 0, 0, 0.1); border-left-width: 0px;" class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>    

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender" class="control-label">Sexo</label>
                                    <select class="form-control" id="gender" name="gender">
                                            <option value="1" selected >Masculino</option>
                                            <option value="2" >Femenino</option>
                                    </select>   

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('gender') }}</strong>
                                        </span>
                                    @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="control-label">Contraseña</label>
                                <input placeholder="**********" id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="control-label">Confirmar contraseña</label>
                                <input placeholder="**********" id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-lg-8"> 
                        </div>  
                        <div class="col-lg-4 text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fa fa-btn fa-user"></i> Registrar
                            </button>
                            <a class="btn btn-default btn-lg" href="{{ route('home.index') }}">Cancelar</a>  
                        </div>
                    </div>
                </form>
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
        $('#birthday').datepicker('setStartDate', '1930-01-01');
        $('#birthday').datepicker('setEndDate', '2000-12-31');
        //Para select de tipo documento      
        $.ajax({
            method: 'GET',
            url: "{{ route('home.findDocTypes')}}",  
            success: function(response) {
                $('#doc_type').html(response['html']);
            }
         });
        //Para select de genero
        $.ajax({
            method: 'GET',
            url: "{{ route('home.findGenders')}}",  
            success: function(response) {
                $('#gender').html(response['html']);
            }
         });
    });     
    
</script>

@endsection
