$(document).ready(function () {
    $("form").submit(function (event) {
        // $("#error").removeClass("has-error");
        // $(".error-msg").remove();
        var formData = {
            login: $("#login").val(),
            email: $("#email").val(),
            pwd1: $("#pwd1").val(),
            pwd2: $("#pwd2").val(),
          };
        $.ajax({
        type: "POST",
        url: "register.php",
        data: formData,
        dataType: "json",
        encode: true,
        }).done(function (data) {
        console.log(data);
        // if (data.success) {
            
        //     $("form").html(
        //       '<div class="error-msg">' + success_msg + "</div>"
        //     );
        // }
        });
    
        event.preventDefault();
    });
})