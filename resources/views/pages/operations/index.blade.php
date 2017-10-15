@extends('layouts.base_user')

@section('title', 'Operaciones')

@section('content')

<section class="operation-home" style="background-image: url(/elate/images/dolares.jpg); " data-stellar-background-ratio="0.5">   
    <div class="gradient"></div>
    <div class="container">
        <div class="text-wrap">
            <div class="text-inner"> 
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="to-animate" style="opacity: 1 !important;"> 
                            Nueva operación 
                        </h2><br>
                        <h2 id="operationTitle" class="to-animate" style="opacity: 1 !important;"> 
                            
                        </h2>
                    </div>
                </div><br>

                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Paso 1">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Paso 2">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-check"></i>
                                    </span>
                                </a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                        <i class="glyphicon glyphicon-ok"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                


                	<!-- {{Form::open(['route' => ['operations.index'], 'id'=>'formNewOperation', 'method' => 'GET'])}} -->
                    <form class="form-operation" role="form"> 
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <h3>Inicio de operación</h3>
                                <div class="row">
                                    <div class="col-lg-6">                                    
                                        <div class="form-group">
                                            <label>Envía</label>
                                            <select class="form-control" id="sendCurrency" name="sendCurrency"> 
                                                <option  value="1" @if($calculator==1) selected @endif >Dólares</option>                  
                                                <option  value="2" @if($calculator==2) selected @endif >Soles</option>    
                                            </select>                             
                                        </div>
                                    </div>     
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="form-group input-group">
                                                <span id="sendCurrency_span" style="background-color: #329998; color: #f9f6f0; border: 1px solid rgba(0, 0, 0, 0.1); border-left-width: 1px;" class="input-group-addon">
                                                    @if($calculator==1) 
                                                        USD 
                                                    @else 
                                                        PEN
                                                    @endif
                                                </span>
                                                <input type="text" class="form-control" name="sendAmount" id="sendAmount" placeholder="00.000" maxlength="7">
                                            </div>
                                        </div>
                                    </div>         
                                </div>        
                                <div class="row">
                                    <div class="col-lg-6">                                    
                                        <div class="form-group">
                                            <label>Recibe</label>
                                            <select disabled="true" class="form-control" id="receivedCurrency" name="receivedCurrency"> 
                                                <option  value="1" @if($calculator==2) selected @endif >Dólares</option>                  
                                                <option  value="2" @if($calculator==1) selected @endif >Soles</option>    
                                            </select>                             
                                        </div>
                                    </div>  
                                    <div class="col-lg-6">  
                                        <div class="form-group">
                                            <label>&nbsp;</label>
                                            <div class="form-group input-group">
                                                <span id="receivedCurrency_span" style="background-color: #329998; color: #f9f6f0; border: 1px solid rgba(0, 0, 0, 0.1); border-left-width: 1px;" class="input-group-addon">
                                                    @if($calculator==2) 
                                                        USD 
                                                    @else 
                                                        PEN
                                                    @endif
                                                </span>
                                                <input readonly="readonly" type="text" class="form-control" name="receivedAmount" id="receivedAmount" placeholder="00.000">
                                            </div>
                                        </div>  
                                    </div>         
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">                                    
                                        <div class="form-group">
                                            <label>Banco de origen</label>
                                            <select class="form-control" id="source_bank" name="source_bank"> 
                                            </select>                             
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Cuenta de origen</label>
                                            <select class="form-control" id="source_account" name="source_account">  
                                            </select>  
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Banco de destino</label>
                                            <select class="form-control" id="target_bank" name="target_bank"> 
                                            </select>  
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Cuenta de origen</label>
                                            <select class="form-control" id="target_account" name="target_account">  
                                            </select>  
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-lg-8"></div>
                                    <div class="col-lg-4">
                                        <div class="form-group text-center">
                                            <ul class="list-inline">
                                                <li><button type="button" class="btn btn-primary next-step">Continuar</button></li>
                                            </ul>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <h3>Confirmar los datos de operacion</h3>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Acepto los términos y condiciones</label>
                                            <input type="checkbox" id="acceptTerms" name="acceptTerms" required="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-8"> 
                                	</div>	
                                    <div class="col-lg-4 form-group text-center">
                                        <ul class="list-inline">
                                            <li><button type="button" class="btn btn-default prev-step">Anterior</button></li>                                    
                                            <li><button type="button" class="btn btn-primary next-step">Confirmar</button></li>                                        
                                    </div>
                                </div>
                            </div>   
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <h3>Se confirmo la operación</h3>
                            </div>   
                            <div class="clearfix"></div>     
                        </div>
                    </form>
                    <!-- {{Form::close()}}  -->
                </div>
            </div>
        </div>
    </div>
    <div class="slant"></div>
</section>

<script type="text/javascript" src="/build/js/operations.js"></script>    


<script type="text/javascript">
	$(document).ready(function($) {

        var spreadsheetID = "1r78D9Iu-d41DbE2g47pkfpe5EF2juJlKZP5W8ojyGAY";
        var buy = 0;
        var sell = 0;
        // Make sure it is public or set to Anyone with link can view 
        var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";
        var sendAmount = parseFloat({{$sendAmount}}).toFixed(3);
        var receivedAmount = parseFloat({{$receivedAmount}}).toFixed(3);;
        $.getJSON(url, function(data) {
            var entry = data.feed.entry;
            $(entry).each(function(){
                // Column names are name, age, etc.
                //$ ('.results').prepend('<h2>'+this.gsx$name.$t+'</h2><p>'+this.gsx$age.$t+'</p>');
                buy = parseFloat(this.gsx$compra.$t).toFixed(3);
                sell = parseFloat(this.gsx$venta.$t).toFixed(3);
                //console.log("Compra:" + parseFloat(buy).toFixed(3), " Venta:" + parseFloat(sell).toFixed(3));
                if ( {{$calculator}} == 1){
                    receivedAmount = parseFloat( buy * sendAmount ).toFixed(3);
                }
                else if  ( {{$calculator}} == 2){
                    sendAmount = receivedAmount;
                    receivedAmount = parseFloat(  sendAmount / sell ).toFixed(3);
                }
                $("#sendAmount").val(sendAmount);
                $("#receivedAmount").val(receivedAmount);
                $("#operationTitle").html("Compra: " + parseFloat(buy).toFixed(3) + " - Venta: " + parseFloat(sell).toFixed(3) );
                
            });

        });

        $("#sendCurrency").on('change',  function(){    
            var select = "";
            var sendSpan = "";
            var receivedSpan = "";
            if ( $("#sendCurrency").val() == 1){
                select = "<option  value=1 >Dólares</option>" +
                "<option  value=2 selected >Soles</option>";
                sendSpan = "USD"; receivedSpan = "PEN";
            }
            else if ( $("#sendCurrency").val() == 2){
                select = "<option  value=1 selected>Dólares</option>" +
                "<option  value=2 >Soles</option>";
                sendSpan = "PEN"; receivedSpan = "USD";
            }
            if ( $("#sendCurrency").val() > 0){
                $("#receivedCurrency").html(select);
                $("#sendCurrency_span").html(sendSpan);
                $("#receivedCurrency_span").html(receivedSpan);
                completeReceivedAmount();
            }
        });

        $("#sendAmount").on('change keyup paste', function () {
            completeReceivedAmount();
        });

        function completeReceivedAmount() {
            var currency = $("#sendCurrency").val();
            var receivedAmount_input = 0;
            var sendAmount_input = $("#sendAmount").val();
            sendAmount_input = parseFloat(sendAmount_input).toFixed(3);
            sendAmount_input = getNum(sendAmount_input);
            if ( currency == 1){
                receivedAmount_input = sendAmount_input * buy;
            }
            else
                receivedAmount_input = sendAmount_input / sell;
            $("#receivedAmount").val(parseFloat(receivedAmount_input).toFixed(3));
            $("#sendAmount").val(parseFloat(sendAmount_input).toFixed(3));

        }    
        //Funcion para obtener numero de texto
        function getNum(val) {
            if (isNaN(val)) {
                return 0;
            }
                return val;
        }
        //Para banco de origen al inicio
        $.ajax({
            method: 'GET',
            url: "{{ route('operations.findCustomerBanks')}}",            
            data: {
                option: $('#sendCurrency').val(),                
            },
            success: function(response) {
                $('#source_bank').html(response['html']);
                 //Para cuenta de origen al inicio
                $.ajax({
                    method: 'GET',
                    url: "{{ route('operations.findCustomerAccounts')}}",            
                    data: {
                        option: $('#source_bank').val(),    
                        currency: $('#sendCurrency').val(),                 
                    },
                    success: function(response) {
                        $('#source_account').html(response['html']);
                    }
                 });
            }
         });

        //Para banco de destino al inicio
        $.ajax({
            method: 'GET',
            url: "{{ route('operations.findCustomerBanks')}}",            
            data: {
                option: $('#receivedCurrency').val(),                      
            },
            success: function(response) {
                $('#target_bank').html(response['html']);
                //Para cuenta de destino al inicio
                $.ajax({
                    method: 'GET',
                    url: "{{ route('operations.findCustomerAccounts')}}",            
                    data: {
                        option: $('#source_bank').val(),   
                        currency:$('#receivedCurrency').val(),                     
                    },
                    success: function(response) {
                        $('#target_account').html(response['html']);

                    }
                 });
            }
         });


        

        //Para el select de envio de moneda
        $('#sendCurrency').change(function(){            
            $.ajax({
                method: 'GET',
                url: "{{ route('operations.findCustomerBanks')}}",            
                data: {
                    option: $('#sendCurrency').val(),                
                },
                success: function(response) {
                    $('#source_bank').html(response['html']);
                     //Para cuenta de origen al inicio
                    $.ajax({
                        method: 'GET',
                        url: "{{ route('operations.findCustomerAccounts')}}",            
                        data: {
                            option: $('#source_bank').val(),    
                            currency: $('#sendCurrency').val(),                 
                        },
                        success: function(response) {
                            $('#source_account').html(response['html']);
                        }
                     });
                }
            });

            $.ajax({
                method: 'GET',
                url: "{{ route('operations.findCustomerBanks')}}",            
                data: {
                    option: $('#receivedCurrency').val(),                      
                },
                success: function(response) {
                    $('#target_bank').html(response['html']);
                    //Para cuenta de destino al inicio
                    $.ajax({
                        method: 'GET',
                        url: "{{ route('operations.findCustomerAccounts')}}",            
                        data: {
                            option: $('#source_bank').val(),   
                            currency:$('#receivedCurrency').val(),                     
                        },
                        success: function(response) {
                            $('#target_account').html(response['html']);

                        }
                     });
                }
            });
        });

        //Para el select de banco origen
        $('#source_bank').change(function(){            
            $.ajax({
                method: 'GET',
                url: "{{ route('operations.findCustomerAccounts')}}",            
                data: {
                    option: $('#source_bank').val(),  
                    currency: $('#sendCurrency').val(),                    
                },
                success: function(response) {
                    $('#source_account').html(response['html']);
                }
             });
        });

        //Para el select de banco destino
        $('#target_bank').change(function(){            
            $.ajax({
                method: 'GET',
                url: "{{ route('operations.findCustomerAccounts')}}",            
                data: {
                    option: $('#target_bank').val(),   
                    currency: $('#receivedCurrency').val(),                   
                },
                success: function(response) {
                    $('#target_account').html(response['html']);
                }
             });
        });
    });     
</script>

@endsection