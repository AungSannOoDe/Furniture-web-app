$(document).ready(function(){
  const  error=[]
    const csrf=$('meta[name="csrf-token"]').attr('content');
    const width=$('#width')
    const height=$('#height')
    const model=$('#model')
    const  war=$('#war')
    const m1=$('#m1')
    const m2=$('#m2')
    const coun=$('#coun')
   $(document).on("click","#FormContainer button",function(){
        if(width ==null || width== ""){
  error.push("Width is required")
        }
            let formdata={
                'width':$("#width").val(),
                'height':$("#height").val(),
                'model':$("#model").val(),
                'warr':$("#war").val(),
                'm1':$("#m1").val(),
                'm2':$("#m2").val(),
                'coun':$("#coun").val(),
                'id':$('#id').val()
            }
            //formadd
        $.ajax({
            type:"POST",
            url:"http://127.0.0.1:8000/ajax/formadd",
            dataType:"json",
            headers:{
                'X-CSRF-TOKEN':csrf
            },
            data:formdata,
            success:function(response){
                $("#width,#height,#model,#war,#m1,#m2,#coun").val(" ");
                Swal.fire("Success","Added to data","success");
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText);
                alert("An error occurred!");
            }
        })

   })
})

