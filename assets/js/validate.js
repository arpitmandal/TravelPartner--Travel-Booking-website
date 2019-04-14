function validate(){
    if (document.getElementById("id1").value=="")
        document.getElementById("error1").style.visibility="visible";

    if (document.getElementById("id2").value=="")
        document.getElementById("error2").style.visibility="visible";

    if (document.getElementById("id3").value=="")
        document.getElementById("error3").style.visibility="visible";

    if (document.getElementById("id4").value=="")
        document.getElementById("error4").style.visibility="visible";

    if (document.getElementById("id5").value=="")
        document.getElementById("error5").style.visibility="visible";
}
function user(){
    if(document.getElementById("id1").value=="")
        document.getElementById("error1").style.visibility="visible";
    else
        document.getElementById("error1").style.visibility="hidden";
}
function email(){
    if(document.getElementById("id2").value=="")
        document.getElementById("error2").style.visibility="visible";
    else
        document.getElementById("error2").style.visibility="hidden";
}
}
function pass(){
    if(document.getElementById("id3").value=="")
        document.getElementById("error3").style.visibility="visible";
    else
        document.getElementById("error3").style.visibility="hidden";
}
}
function rpass(){
    if(document.getElementById("id4").value=="")
        document.getElementById("error4").style.visibility="visible";
    else
        document.getElementById("error4").style.visibility="hidden";
}
}
function contact(){
    if(document.getElementById("id5").value=="")
        document.getElementById("error5").style.visibility="visible";
    else
        document.getElementById("error5").style.visibility="hidden";
}