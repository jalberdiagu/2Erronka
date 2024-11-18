liburuakBistaratu()

function liburuakBistaratu(bilaketa){
    fetch("/2Erronka/Controller/CALRead.php", {
        method: "POST",
        body: bilaketa
    }).then(response => response.text()).then(response => {
        erantzuna.innerHTML="";
        erantzuna.innerHTML= response;
    });
}

erregistratu.addEventListener("click", () => {
    fetch("/2Erronka/Controller/CALCreate.php", {
        method:"POST",
        body: new FormData(frm)
    }).then(response => response.json()).then(response => {
        if(response.tipo == "insert"){
            Swal.fire({
                icon: 'error',
                title: 'Errorea',
                text: 'Ezin da liburu berri bat sortu',
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
            liburuakBistaratu();
            id_prod.value="";
            frm.reset();
        }
    });
});

function liburuakAldatu(id_prod){
    console.log(id_prod);
    fetch("/2Erronka/Controller/CALUpdate.php", {
        method: "POST",
        body: id_prod
    }).then(response => response.json()).then(response => {
        console.log("response: " + response[0].id_prod);
        document.getElementById("id_prod").value = response[0].id_prod;
        document.getElementById("egoera").value = response[0].aktibo;
        document.getElementById("prezioa").value = response[0].prezioa;
    });
}

bilatu.addEventListener("keyup", () => {
    const balioa = bilatu.value;
    if(balioa == ""){
        liburuakBistaratu();
    }else{
        liburuakBistaratu(balioa);
    }
});