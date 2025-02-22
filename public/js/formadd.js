$(document).ready(function(){
    const csrf=$('meta[name="csrf-token"]').attr('content');
    const setError=(element,Message)=>{
        const inputControl=element.parent();
        const input=inputControl.find('input')
        const errorDisplay=inputControl.find('.error')
        errorDisplay.text(Message)
        input.addClass('is-invalid')
        input.removeClass('is-valid')

    }
    const Setsuccess=element =>{
        const inputControl=element.parent();
        const input=inputControl.find('input')
        const errorDisplay=inputControl.find('.error')
        errorDisplay.text(" ")
        input.addClass('is-valid')
        input.removeClass('is-invalid')
    }
    const ValidateWidth=(width,widthValue,valid)=>{
        if( widthValue===""){
            setError(width,"Width is required");
            valid=false
       }
       else{
           Setsuccess(width)
       }
       return valid
    }
     const ValidateHeight=(height,heightValue,valid)=>{
        if( heightValue===""){
            setError(height,"Heigth is required");
            valid=false
        }
        else{
            Setsuccess(height)
        }
        return valid
     }
     const ValidateModel=(model,modelValue,valid)=>{
        if( modelValue===""){
            setError(model,"Model is required");
            valid=false
            }
 else{
    Setsuccess(model)
 }
 return valid
     }
     const ValidatWar=(war,warValue,valid)=>{
        if( warValue===""){
            setError(war,"War is required");
             valid=false
         }
         else{
            Setsuccess(war)
         }
         return valid
     }
     const ValidateM1=(m1,m1Value,valid)=>{
        if( m1Value===""){
            setError(m1,"M1 is required");
             valid=false
            }
            else{
                Setsuccess(m1)
            }
     }
     const ValidateM2=(m2,m2Value,valid)=>{
        if(m2Value===""){
            setError(m2,"M2 is required");
             valid=false
            }
         else{
            Setsuccess(m2)
         }
         return valid
     }
     const ValidateCoun=(coun,counValue,valid)=>{
        if(counValue===""){
            setError(coun,"Coun is required");
            valid=false
         }
         else{
            Setsuccess(coun)
         }
         return valid
     }
    const validateInput=(width,height,model,war,m1,m2,coun)=>{
        let valid=true
        const widthValue=$('#width').val()
        const heightValue=$('#height').val()
        const modelValue=$('#model').val()
        const  warValue=$('#war').val()
        const m1Value=$('#m1').val()
        const m2Value=$('#m2').val()
        const counValue=$('#coun').val()
        ValidateWidth(width,widthValue,valid);
        ValidateHeight(height,heightValue,valid);
        ValidateModel(model,modelValue,valid);
       ValidatWar(war,warValue,valid);
       ValidateM1(m1,m1Value,valid);
    ValidateM2(m2,m2Value,valid);
    ValidateCoun(coun,counValue,valid);
  let validCourse = valid === (ValidateWidth(width,widthValue,valid)&& ValidateHeight(height,heightValue,valid) && ValidateModel(model,modelValue,valid) && ValidatWar(war,warValue,valid)&& ValidateM1(m1,m1Value,valid)&& ValidateM2(m2,m2Value,valid)&& ValidateCoun(coun,counValue,valid)) ? valid : !valid;
  return validCourse
    }
     const GoTo=(data)=>{
         $.ajax({
            type:"POST",
            url:"http://127.0.0.1:8000/ajax/formadd",
            dataType:"json",
            headers:{
                'X-CSRF-TOKEN':csrf
            },
            data:data,
            success:function(response){
                $("#width,#height,#model,#war,#m1,#m2,#coun").val(" ");
                Swal.fire("Success","Added to data","success");
            },
            error: function (xhr, status, error) {
                console.error("Error:", xhr.responseText);
                alert("An error occurred!");
            }
        })
     }
   $(document).on("click","#FormContainer button",function(e){
    e.preventDefault();
    const width=$('#width')
    const height=$('#height')
    const model=$('#model')
    const  war=$('#war')
    const m1=$('#m1')
    const m2=$('#m2')
    const coun=$('#coun')
  if(validateInput(width,height,model,war,m1,m2,coun)){
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
    GoTo(formdata)
  }
  else{
    console.log("This is error");
  }

   })
})

