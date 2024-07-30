function contactvalidate()
{
    var name=document.getElementById("contact_name").value;

    var ntest=0;
    if(name=="" || name==null)
    {
        document.getElementById("contact_label1").style.visibility="visible";
    }
    else{
        document.getElementById("contact_label1").innerHTML="Valid";
        document.getElementById("contact_label1").style.visibility="visible";
        document.getElementById("contact_label1").style.color="green";
        ntest=1;
    }

    var email=document.getElementById("contact_email").value;
    var etest=0;
    var regx = /([a-zA-Z0-9\.-]+)@([a-zA-Z0-9]+).([a-z]{2,10})$/;
    if(regx.test(email))
    {
        document.getElementById("contact_label2").innerHTML="Valid";
        document.getElementById("contact_label2").style.visibility="visible";
        document.getElementById("contact_label2").style.color="green";
        etest=1;
    }
    else
    {
        document.getElementById("contact_label2").style.visibility="visible";
    }

    if(ntest==1 && etest==1)
    {
        return true;
    }
    else
    {
        return false;
    }
}