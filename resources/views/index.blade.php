@extends('default')

@section('my-content')

<form class="m-5">
@csrf

<input type="text" name="name" id="name" class="form-control w-50 mb-4" placeholder="Enter your name">
<button type="submit" class="btn btn-primary">Submit</button>
</form>


<!--external js -->
<script src="js/testing.js"></script>


<!-- Internal js -->
<!-- <script>
$(document).ready(function(){
    $("form").submit(function(e){ 
        e.preventDefault();

        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN' : '{{csrf_token()}}'
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

</script> -->



@endsection