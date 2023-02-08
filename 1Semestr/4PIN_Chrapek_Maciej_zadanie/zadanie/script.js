function password()
{
    var pass = document.getElementById("pass").value;
    var repass = document.getElementById("repass").value;
    if(pass!=repass)
    {
        alert("🛑 Hasła nie zgadzają się! 🛑");
    }
}
