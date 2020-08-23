$(document).ready(function(){
    $("form").submit(function(e){ 
        e.preventDefault();

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : $("body").attr('token')
            }
        });

        $.ajax({
            type : 'POST',
            url : '/testing',
            data : {
                name : $("#name").val()
            },
            success : function(response){
                alert(response);
            }
        })
     })
})