$(document).ready(function(){
 
    var spreadsheetID = "1r78D9Iu-d41DbE2g47pkfpe5EF2juJlKZP5W8ojyGAY";
    var buy = 0;
    var sell = 0;
    // Make sure it is public or set to Anyone with link can view 
    var url = "https://spreadsheets.google.com/feeds/list/" + spreadsheetID + "/od6/public/values?alt=json";

    $.getJSON(url, function(data) {
        var entry = data.feed.entry;
        $(entry).each(function(){
            // Column names are name, age, etc.
            //$ ('.results').prepend('<h2>'+this.gsx$name.$t+'</h2><p>'+this.gsx$age.$t+'</p>');
            buy = parseFloat(this.gsx$compra.$t).toFixed(3);
            sell = parseFloat(this.gsx$venta.$t).toFixed(3);
            //console.log("Compra:" + parseFloat(buy).toFixed(3), " Venta:" + parseFloat(sell).toFixed(3));
            $("#priceText").html("Compra: " + parseFloat(buy).toFixed(3) + " - Venta: " + parseFloat(sell).toFixed(3) + '<br>*Tipo de cambio referencial' );
            var initialUsd = 100;
            $("#usdAmount").val(parseFloat(initialUsd).toFixed(3));
            $("#penAmount").val(parseFloat(initialUsd * buy).toFixed(3));
            
        });

    });

    $("#usdAmount").on('change keyup paste', function () {
        completePen();
    });
    
    $("#penAmount").on('change keyup paste', function () {
        completeUsd();
    });

    $("#currency").on('change', function() {
        var usdAmount = $("#usdAmount").val();
        usdAmount = parseFloat(usdAmount).toFixed(3)
        usdAmount = getNum(usdAmount);
        var penAmount = $("#penAmount").val();
        penAmount = parseFloat(penAmount).toFixed(3);
        penAmount = getNum(penAmount);
        if (this.value == 1){
            $("#usdAmount").val(penAmount);
            $("#penAmount").val(parseFloat(penAmount * buy).toFixed(3));
        }
        else{
            $("#penAmount").val(usdAmount);
            $("#usdAmount").val(parseFloat(usdAmount / sell).toFixed(3));
        }
    })
    
    function completePen() {
        var currency = $("#currency").val()
        var usdAmount = $("#usdAmount").val();
        usdAmount = parseFloat(usdAmount).toFixed(3);
        usdAmount = getNum(usdAmount);
        var penAmount = 0;
        if ( currency == 2){
            penAmount = usdAmount * sell;
        }
        else
            penAmount = usdAmount * buy;
        $("#penAmount").val(parseFloat(penAmount).toFixed(3));
        $("#usdAmount").val(parseFloat(usdAmount).toFixed(3));
    }
    
    function completeUsd() {
        var currency = $("#currency").val()
        var penAmount = $("#penAmount").val();
        penAmount = parseFloat(penAmount).toFixed(3);
        penAmount = getNum(penAmount);
        var usdAmount = 0;
        if ( currency == 2){
            usdAmount = penAmount / sell;
        }
        else
            usdAmount = penAmount / buy;
        $("#usdAmount").val(parseFloat(usdAmount).toFixed(3));
        $("#penAmount").val(parseFloat(penAmount).toFixed(3));
    }
    
    function getNum(val) {
        if (isNaN(val)) {
            return 0;
        }
            return val;
    }

    

    
});