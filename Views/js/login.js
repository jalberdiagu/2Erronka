// SARTU botoia
var sartuBotoia = document.querySelector("button[type='submit']");

sartuBotoia.addEventListener("click", function(event){
    event.preventDefault();

    var email = document.getElementById("email").value.trim();
    var pasahitza = document.getElementById("pasahitza").value.trim();

    var emailBalidazioa = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    if (email === "" || pasahitza === "") {
        alert("Parametro guztiak bete behar dira!");
        return;
    }

    if (!emailBalidazioa.test(email)) {
        alert("Posta elektronikoa ez da baliozkoa. Mesedez, egiaztatu.");
        return; 
    }
    event.target.closest("form").submit();
});

// RESET botoia
var resetBotoia = document.querySelector("button[type='reset']");
resetBotoia.addEventListener("click", function(event) {
    var confirmarReset = confirm("Ziur zaude ezabatu nahi duzula?");
    if (!confirmarReset) {
        event.preventDefault(); 
    }
});
