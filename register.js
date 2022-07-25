$(document).ready(function()
{
    $("#register-form").validate({
        errorClass: "error fail-alert",
        validClass: "valid success-alert",
        rules:
        {
            nm:
            {
                required:true
            },
            age:
            {
                required:true
            },
            email:
            {
                required:true
            },
            phonenumber:
            {
                required:true
            },
            gender:
            {
                required:true
            },
            checkbox:
            {
                required:true,
                minlength:1
            },
            date:
            {
                required:true
            },
            username:
            {
                required:true
            },
            password:
            {
                required:true,
                minlength:6
        
            },
            files:
            {
                required:true
            }
        },
    messages:
    {
        nm:
        {
            required: "!please enter your name"
        },
        age:
        {
            required: "!please enter your age"
        },
        email:
        {
            required:"!please enter your email"
        },
        phonenumber:
        {
            required:"!please enter your phone number"
        },
        gender:
        {
            required:"!please select your gender"
        },
        checkbox:
        {
            required:"!please select one of the choices"
        },
        date:
        {
            required:"!please enter date"
        },
        username:
        {
            required:"!please enter username"
        },
        password:
        {
            required:"!please enter password"
        },
        files:
        {
            required:"!please choose file"
        }
    },
    errorPlacement: function(error, element) 
        {
            if ( element.is(":radio") ) 
            {
                error.appendTo( element.parents('.container') );
            }
            else 
            { 
                error.insertAfter( element );
            }
         },
    errorPlacement: function(error, element) 
         {
             if ( element.is(":checkbox") ) 
             {
                 error.appendTo( element.parents('.check') );
             }
             else 
             { 
                 error.insertAfter( element );
             }
          }     


});
});