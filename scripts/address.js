function addressvalidate()
{
    var name=document.getElementById("aname").value;
    var ntest=0;
    if(name=="" || name==null)
    {
        document.getElementById("add_label1").style.visibility="visible";
    }
    else{
        document.getElementById("add_label1").innerHTML="Valid";
        document.getElementById("add_label1").style.visibility="visible";
        document.getElementById("add_label1").style.color="green";       
        ntest=1;
    }

    var email=document.getElementById("aemail").value;
    var etest=0;
    var regx = /([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,10})$/;
    if(regx.test(email))
    {
        document.getElementById("add_label2").innerHTML="Valid";
        document.getElementById("add_label2").style.visibility="visible";
        document.getElementById("add_label2").style.color="green";
        etest=1;
    }
    else
    {
        document.getElementById("add_label2").style.visibility="visible";
    }

    var phno=document.getElementById("pno").value;
    var pntest=0;
    if(phno.length==10)
    {
        document.getElementById("add_label3").innerHTML="Valid";
        document.getElementById("add_label3").style.visibility="visible";
        document.getElementById("add_label3").style.color="green";       
        pntest=1;
    }
    else{
        document.getElementById("add_label3").style.visibility="visible";
    }

    var pin=document.getElementById("pin").value;
    var pintest=0;
    if(pin.length==6)
    {
        document.getElementById("add_label4").innerHTML="Valid";
        document.getElementById("add_label4").style.visibility="visible";
        document.getElementById("add_label4").style.color="green";       
        pintest=1;
    }
    else{
        document.getElementById("add_label4").style.visibility="visible";
    }

    if(ntest==1 && etest==1)
    {
        if(pntest==1 && pintest==1)
        {
            return true;
        }
        
    }
    else
    {
        return false;
    }
}