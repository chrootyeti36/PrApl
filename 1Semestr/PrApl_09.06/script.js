function liczenie(){
    var x=parseFloat(document.getElementById("numA").value);
    var y=parseFloat(document.getElementById("numB").value);
    var z=x+y;
    document.getElementById("suma").style.fontSize=z+"px";
    document.getElementById("suma").innerHTML=z;   
}