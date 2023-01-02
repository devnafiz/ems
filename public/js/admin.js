"use strict";

     // $("body")
     //  .on('click','.btn-submit',function(){


     //      alert('hi');



     //  })

        $(".btn-submit").click(function(e){
         alert('hi');

        e.preventDefault();
 
        var name = $("input[name=name]").val();
        var password = $("input[name=password]").val();
        var email = $("input[name=email]").val();
 
        $.ajax({
           type:'POST',
           url:"{{ route('ajaxRequest.post') }}",
           data:{name:name, password:password, email:email},
           success:function(data){
              alert(data.success);
           }
        });
 
    });












