eskaerakBistaratu();

function eskaerakBistaratu(bilaketa){
    fetch("/2Erronka/Controller/CAPRead.php", {
        method: "POST",
        body: bilaketa
    }).then(response => response.text()).then(response =>{
        erantzuna.innerHTML = "";
        erantzuna.innerHTML = response;
    })
}

erregistratu.addEventListener("click", () =>{
    fetch("/2Erronka/Controller/CAPCreate.php", {
        method:"POST",
        body: new FormData(frm)
    }).then(response => response.json()).then(response => {
        if(response.tipo == "insert"){
            Swal.fire({
                icon: 'error',
                title: 'Errorea',
                text: 'Ezin da eskaera berri bat sortu',
                showConfirmButton: false,
                timer: 2000
            })
            frm.reset();
        }else if(response.tipo == "update"){
            Swal.fire({
                icon: 'success',
                title: 'Aldatuta',
                showConfirmButton: false,
                timer: 1500
            })
            eskaerakBistaratu();
            id_eska.value="";
            frm.reset();
        }
    });
});

function eskaerakAldatu(id_eska){
    fetch("/2Erronka/Controller/CAPUpdate.php", {
        method: "POST",
        body: id_eska
    }).then(response => response.json()).then(response => {
        document.getElementById("id_eska").value= response[0].id_eska;
        document.getElementById("egoera").value= response[0].egoera;
    });
}

bilatu.addEventListener("keyup", () => {
    const balioa = bilatu.value;
    if(balioa == ""){
        eskaerakBistaratu();
    }else{
        liburuakBistaratu(balioa);
    }
});