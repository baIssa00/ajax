$(document).ready(function () {
    
    $('#btn-inscrits').click(function(event){
        event.preventDefault();
        //alert("button");
        $.ajax({
            url: 'register.php',
            type: 'POST',
            data: $("form").serialize(),
            success: function (data) {
                $("#msg").html(data);
            }
        })
    });
});