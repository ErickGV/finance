$(document).ready(function(){
    $("#form-contact").bind("submit", function(){
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(data){
                if(data == '1'){
                    $("#alert-div").show(1000);
                    setTimeout(function() {
                         $("#alert-div").hide(1000);
                    }, 5000 );
                    $("#alert-div").removeClass("hide").removeClass("aler-danger").removeClass("aler-success").addClass("alert-success");
                    $(".answer").html("Enviado!! ");
                    $(".alert-message").html("Gracias por contactarnos.");
                    $("#name").val("");
                    $("#email").val("");
                    $("#message-area").val("");
                }
                else{
                    $("#alert-div").show(1000);
                    setTimeout(function() {
                         $("#alert-div").hide(1000);
                    }, 5000 );
                    $("#alert-div").removeClass("hide").removeClass("aler-danger").removeClass("aler-success").addClass("alert-danger");
                    $(".answer").html("Ups!");
                    $(".alert-message").html("No se puedo enviar. Por favor, volver a intentar.");
                    $("#name").val("");
                    $("#email").val("");
                    $("#message-area").val("");
                }
            },
            error: function(){
                    $("#alert-div").show(1000);
                    setTimeout(function() {
                         $("#alert-div").hide(1000);
                    }, 5000 );
                    $("#alert-div").removeClass("hide").removeClass("aler-danger").removeClass("aler-success").addClass("alert-danger");
                    $(".answer").html("Ups!");
                    $(".alert-message").html("No se puedo enviar. Por favor, volver a intentar.");
                    $("#name").val("");
                    $("#email").val("");
                    $("#message-area").val("");
            }
        });
        return false;
    });
    
    setTimeout(function() {
      $(".alert").hide(1000);
      $(".alert").find("label").remove();
    },10000);
});