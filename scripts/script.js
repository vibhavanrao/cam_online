function formvalidate()
{
    var name=document.getElementById("name").value;
    var ntest=0;
    if(name=="" || name==null)
    {
        document.getElementById("label1").style.visibility="visible";
    }
    else{
        document.getElementById("label1").innerHTML="Valid";
        document.getElementById("label1").style.visibility="visible";
        document.getElementById("label1").style.color="green";
        ntest=1;
    }

    var email=document.getElementById("email1").value;
    var etest=0;
    var regx = /([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,10})$/;
    if(regx.test(email))
    {
        document.getElementById("label2").innerHTML="Valid";
        document.getElementById("label2").style.visibility="visible";
        document.getElementById("label2").style.color="green";
        etest=1;
    }
    else
    {
        document.getElementById("label2").style.visibility="visible";
    }

    var passcheck = document.getElementById("pass").value;
    var regx = /([a-zA-Z0-9\.-]+)$/;
    var ptest=0;
    if(passcheck.length < 6)
    {
        document.getElementById("label3").innerHTML="Must be 6 Characters or more";
        document.getElementById("label3").style.visibility="visible";
    }
    else if(regx.test(passcheck))
    {
        document.getElementById("label3").innerHTML="Valid";
        document.getElementById("label3").style.visibility="visible";
        document.getElementById("label3").style.color="green";
        ptest=1;
    }
    else{
        document.getElementById("label3").style.visibility="visible";
    }

    var passconf=document.getElementById("confirm_pass").value;
    var ctest=0;
    if(passconf.length < 6)
    {
        document.getElementById("label4").style.visibility="visible";
    }
    else if(passconf == passcheck)
    {
        document.getElementById("label4").innerHTML="Matched !";
        document.getElementById("label4").style.visibility="visible";
        document.getElementById("label4").style.color="green";
        ctest=1;
    }
    else
    {
        document.getElementById("label4").style.visibility="visible";
    }

    if(ntest==1 && etest==1)
    {
        if(etest==1 && ptest==1)
        {
            if(ptest==1 && ctest==1)
            {
                return true;
            }
            else{
                return false;
             }
        }
        else{
            return false;
        }
    }
    else{
        return false;
    }
}