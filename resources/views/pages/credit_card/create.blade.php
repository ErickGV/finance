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
                            Datos de tarjeta
                        </h2>
                    </div>
                </div><br>
                {{Form::open(['route' => 'credit_card.store', 'id'=>'formSuggestion'])}}
                {{ csrf_field() }}
                    <div class="row">   
                        <div class="col-lg-2">             
                        </div>                                 
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
                        <div class="col-lg-2">             
                        </div>                                                           
                    </div>     
                    <div class="row">    
                     <div class="col-lg-2">             
                        </div>                                
                        <div class="col-lg-4">
                            <div class="form-group{{ $errors->has('card_number') ? ' has-error' : '' }}">
                                <label>Número de tarjeta</label>
                                <input class="form-control" name="card_number" value="{{ old('card_number') }}" placeholder="Número de tarjeta" maxlength="16">
                                @if ($errors->has('card_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('card_number') }}</strong>
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
                        <div class="col-lg-2">
                        </div>                                   
                    </div>    
                    <br> 
                    <div class="row">  
                        <div class="col-lg-6"></div>                                              
                        <div class="col-lg-4 form-group text-center">                                    
                            <button class="btn btn-primary btn-lg" type="submit">Guardar</button>                                    
                            <a class="btn btn-default btn-lg" href="{{ route('credit_card.index') }}">Cancelar</a>                                      
                        </div>
                        <div class="col-lg-2"></div>  
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