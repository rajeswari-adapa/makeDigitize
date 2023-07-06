function validate(){
    var sid=document.getElementById("sid").value;
    var sname=document.getElementById("sname").value;
    var spassword=document.getElementById("spassword").value;
    var sphone=document.getElementById("sphone").value;
    var r=/^(n|N)18\d{4}$/;
    if(!r.test(sid)){
        document.getElementById("sid").style.borderColor="red";
        return false;
    }
    else{
        alert("sid is valid");
    }
    if(sname.length<5 ||sname.length>15){
        document.getElementById("sname").style.borderColor="red";
        return false;
    }
    if(spassword.length<5 || spassword.length>15){
        document.getElementById("spassword").style.borderColor="red";
        return false;
    }
    var j=/^[789]\d{9}$/;
    if(!j.test(sphone)){
        document.getElementById("sphone").style.borderColor="red";
        return false;
    }
    else{
        alert("sphone is valid");
    }
}
function lgvalidate(){   
    var sid=document.getElementById("sid").value;
    var spassword=document.getElementById("spassword").value;
    var rsid=/^(n|N)18\d{4}$/;
    if(!rsid.test(sid)){
        document.getElementById("sid").style.borderColor="red";
        return false;
    }
    else{
        alert("sid is valid");
    }
    if(spassword.length<5 || spassword.length>15){
        document.getElementById("spassword").style.borderColor="red";
        return false;
    }
}
function fpvalidate(){
    var sid=document.getElementById("sid").value;
    var spassword=document.getElementById("spassword").value;
    var sphone=document.getElementById("sphone").value;
    var rsid=/^(n|N)18\d{4}$/;
    if(!rsid.test(sid)){
        document.getElementById("sid").style.borderColor="red";
        return false;
    }
    else{
        alert("sid is valid");
    }
    if(spassword.length<5 || spassword.length>15){
        document.getElementById("spassword").style.borderColor="red";
        return false;
    }
    var j=/^[789]\d{9}$/;
    if(!j.test(sphone)){
        document.getElementById("sphone").style.borderColor="red";
        return false;
    }
    else{
        alert("sphone is valid");
    }

}