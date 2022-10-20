const form=document.getElementById("form");
const username=document.getElementById("username");
const password=document.getElementById("password");
var checkbox=document.getElementById("checkbox");
const email=document.getElementById("email");
const form2=document.getElementById("form2");
const register_username=document.getElementById("Register_username");
const register_password=document.getElementById("Register_password");
const password2=document.getElementById("password2");
function showError(input,message){
   const field=input.parentElement;
   field.className='field error';
   const small=field.querySelector('small');//method returns the first element that matches a CSS selector
    small.innerHTML=message;
    
}

function showSuccess(input){ 
    const field=input.parentElement;
    field.className='field success';
    
}


function isValidEmail(email)
{
    const re= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


form2.addEventListener("submit",function(e)
{
    e.preventDefault();//clicking on a "Submit" button, prevent it from submitting a form

   
    // if(register_username.value===''){
    //     showError(register_username,'Username is required');
    // }
    // else{
    //     showSuccess(register_username);
    // }
  

    if(register_password.value===''){
        showError(register_password,'Password is required');
    }
    else{
        showSuccess(register_password);
    }
    if(email.value===''){
        showError(email,'Email is required');
    }else if(!isValidEmail(email.value)){
        showError(email,'Email is not valid');
    }
    else{
        showSuccess(email);
    }

    if(password2.value===''){
        showError(password2,'Confirm password is required');
    }
    else{
        showSuccess(password2);
    }
   
});


form.addEventListener("submit",function(e){
    e.preventDefault();//clicking on a "Submit" button, prevent it from submitting a form

   
    if(username.value===''){
        showError(username,'Username is required');
    }
    else{
        showSuccess(username);
    }
  

    if(password.value===''){
        showError(password,'Password is required');
    }
    else{
        showSuccess(password);
    }
   

    
});


    const loginText = document.querySelector(".title-text .login");
    const loginForm = document.querySelector("form.login");
    const loginBtn = document.querySelector("label.login");
    const signupBtn = document.querySelector("label.signup");
    const signupLink = document.querySelector("form .signup-link a");
    signupBtn.onclick = (()=>{
      loginForm.style.marginLeft = "-50%";
      loginText.style.marginLeft = "-50%";
    });
    loginBtn.onclick = (()=>{
      loginForm.style.marginLeft = "0%";
      loginText.style.marginLeft = "0%";
    });
    signupLink.onclick = (()=>{
      signupBtn.click();
      return false;
    });

    
    window.addEventListener('scroll',reveal);
    function reveal()
    {
    var reveals=document.querySelectorAll('.reveal');
    for(var i=0;i<reveals.length;i++)
    {
      var windowheight=window.innerHeight;
      var revealtop=reveals[i].getBoundingClientRect().top;
      var revealpoint=150;
      if(revealtop<windowheight -revealpoint)
      {
        reveals[i].classList.add('active');
    
      }
      else{
        reveals[i].classList.remove('active');
      }
    }
    }

   



