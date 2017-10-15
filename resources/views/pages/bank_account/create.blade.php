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
                            Datos de cuenta bancaria
                        </h2>
                    </div>
                </div><br>
                {{Form::open(['route' => 'bank_account.store', 'id'=>'formSuggestion'])}}
                {{ csrf_field() }}
                    <div class="row">                                
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('bank') ? ' has-error' : '' }}">
                                <label>Banco</label>
                                <select class="form-control" name="bank" id="bank"> 
                                    <option value="">Seleccione</option>
                                    @foreach($banks as $bank)                                            
                                        <option value="{{$bank->id}}" @if( old('bank') == $bank->id ) selected @endif  >{{$bank->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('bank'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bank') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                   
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('accountType') ? ' has-error' : '' }}">
                                <label>Tipo de cuenta</label>
                                <select class="form-control" name="accountType" id="accountType">                                           
                                    <option value="">Seleccione</option>
                                    @foreach($accountTypes as $accountType)                                            
                                        <option value="{{$accountType->id}}" @if( old('accountType') == $accountType->id ) selected @endif >{{$accountType->name}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('accountType'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accountType') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                                                               
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('currency') ? ' has-error' : '' }}">
                                <label>Moneda</label>
                                <select class="form-control" name="currency" id="currency">                                           
                                    <option value="">Seleccione</option>
                                    @foreach($currencies as $currency)                                            
                                        <option value="{{$currency->id}}" @if( old('currency') == $currency->id ) selected @endif >{{$currency->name}}</option>
                                    @endforeach                                          
                                </select>
                                @if ($errors->has('currency'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('currency') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>                                                                 
                    </div>     
                    <div class="row">                                
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('account_number') ? ' has-error' : '' }}">
                                <label>Número de cuenta</label>
                                <input class="form-control" name="account_number" value="{{ old('account_number') }}" placeholder="Número de cuenta" maxlength="20">
                                @if ($errors->has('account_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_number') }}</strong>
                                    </span>
                                @endif
                            </div>                               
                        </div>                                                                                        
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
                                <label>Alias</label>
                                <input class="form-control" name="alias" value="{{ old('alias') }}" placeholder="Alias" maxlength="20">
                                @if ($errors->has('alias'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alias') }}</strong>
                                    </span>
                                @endif
                            </div>                               
                        </div>                                                           
                        <div class="col-lg-4">
                        </div>                                   
                    </div>     
                    <br>
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