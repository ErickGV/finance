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
            $("#usdAmount").val(parseFloat(initialUsd).toFixed(2));
            $("#penAmount").val(parseFloat(initialUsd * buy).toFixed(2));
            
        });

    });

    $("#usdAmount").on('change', function () {
        completePen();
    });
    
    $("#penAmount").on('change', function () {
        completeUsd();
    });

    $("#currency").on('change', function() {
        var usdAmount = $("#usdAmount").val().replace(",","");
        usdAmount = parseFloat(usdAmount).toFixed(2)
        usdAmount = getNum(usdAmount);
        var penAmount = $("#penAmount").val().replace(",","");
        penAmount = parseFloat(penAmount).toFixed(2);
        penAmount = getNum(penAmount);
        if (this.value == 1){
            $("#usdAmount").val(numberWithCommas(penAmount));
            $("#penAmount").val(numberWithCommas(parseFloat(penAmount * buy).toFixed(2)));
        }
        else{
            $("#penAmount").val(numberWithCommas(usdAmount));
            $("#usdAmount").val(numberWithCommas(parseFloat(usdAmount / sell).toFixed(2)));
        }
    })
    
    function completePen() {
        var currency = $("#currency").val()
        var usdAmount  = $("#usdAmount").val().replace(",","");
        usdAmount = parseFloat(usdAmount).toFixed(2);
        usdAmount = getNum(usdAmount);
        var penAmount = 0;
        if ( usdAmount == 0){
            usdAmount = 100;
        }

        if ( currency == 2){
            penAmount = usdAmount * sell;
        }
        else
            penAmount = usdAmount * buy;

        penAmount = parseFloat(penAmount).toFixed(2);
        usdAmount = parseFloat(usdAmount).toFixed(2);  
        $("#penAmount").val(numberWithCommas(penAmount));
        $("#usdAmount").val(numberWithCommas(usdAmount));
    }
    
    function completeUsd() {
        var currency = $("#currency").val()
        var penAmount = $("#penAmount").val().replace(",","");
        penAmount = parseFloat(penAmount).toFixed(2);
        penAmount = getNum(penAmount);
        var usdAmount = 0;
        if ( currency == 2){
            if ( penAmount == 0){
                penAmount = 100 * sell;
            }
            usdAmount = penAmount / sell;
        }
        else{
            if ( penAmount == 0){
            penAmount = 100 * buy;
        }
            usdAmount = penAmount / buy;
        }
        penAmount = parseFloat(penAmount).toFixed(2);
        usdAmount = parseFloat(usdAmount).toFixed(2);     
        $("#penAmount").val(numberWithCommas(penAmount));
        $("#usdAmount").val(numberWithCommas(usdAmount));
    }
    
    function getNum(val) {
        if (isNaN(val)) {
            return 0;
        }
            return val;
    }

    function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
    }
    

    
});