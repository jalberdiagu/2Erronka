//BIDALI botoia
var sortuBotoia = document.querySelector("button[type='submit']");
sortuBotoia.addEventListener("click", function(event) {
    event.preventDefault(); 

    var izena = document.getElementById("izena").value;
    var abizena = document.getElementById("abizena").value;
    var email = document.getElementById("email").value;
    var pasahitza = document.getElementById("pasahitza").value;
    var pasahitza2 = document.getElementById("pasahitza2").value;

    var emailBalidazioa = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (!izena || !abizena || !email || !pasahitza || !pasahitza2) {
        alert("Parametro guztiak bete behar dira.");
        return; 
    }

    if (!emailBalidazioa.test(email)) {
        alert("Posta elektronikoa ez da baliozkoa. Mesedez, egiaztatu.");
        return; 
    }

    if (pasahitza !== pasahitza2) {
        alert("Pasahitzak ez dira berdinak. Mesedez, egiaztatu.");
        document.getElementById("pasahitza").value = ''; 
        document.getElementById("pasahitza2").value = ''; 
        return; 
    }

    event.target.closest("form").submit();
});

//RESET botoia
var resetBotoia = document.querySelector("button[type='reset']");
resetBotoia.addEventListener("click", function(event) {
    var confirmarReset = confirm("Ziur zaude ezabatu nahi duzula?");
    if (!confirmarReset) {
        event.preventDefault(); 
    }
});