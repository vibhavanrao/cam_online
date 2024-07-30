
function loginvalidate()
{
    var email=document.getElementById("login_email").value;
    var etest=0;
    var regx = /([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,10})$/;
    if(regx.test(email))
    {
        document.getElementById("login_label1").innerHTML="Valid";
        document.getElementById("login_label1").style.visibility="visible";
        document.getElementById("login_label1").style.color="green";
        etest=1;
    }
    else
    {
        document.getElementById("login_label1").style.visibility="visible";
    }

    var passcheck = document.getElementById("login_pass").value;
    var regx = /([a-zA-Z0-9\.-]+)$/;
    var ptest=0;
    if(passcheck.length < 6)
    {
        document.getElementById("login_lable2").innerHTML="Must be 6 Characters or more";
        document.getElementById("login_lable2").style.visibility="visible";
    }
    else if(regx.test(passcheck))
    {
        document.getElementById("login_lable2").innerHTML="Valid";
        document.getElementById("login_lable2").style.visibility="visible";
        document.getElementById("login_lable2").style.color="green";
        ptest=1;
    }
    else{
        document.getElementById("login_lable2").style.visibility="visible";
    } 
    
    if(etest==1 && ptest==1)
    {
        return true;
    }
    else
    {
        return false;
    }
}