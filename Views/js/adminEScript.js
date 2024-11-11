
erabkBistaratu();

function erabkBistaratu(bilaketa){
    fetch("/2Erronka/Controller/CAERead.php", {
        method:"POST",
        body: bilaketa
    }).then(response => response.text()).then(response => {
        erantzuna.innerHTML = response;
    });
}

erregistratu.addEventListener("click", () => {
    fetch("/2Erronka/Controller/CAECreate.php", {
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        if(response == "insert"){
            Swal.fire({
                icon: 'success',
                title: 'Erregistratuta',
                showConfirmButton: false,
                timer: 1500
            })
            frm.reset();
            erabkBistaratu();
        }else{
            Swal.fire({
                icon: 'success',
                title: 'Aldatuta',
                showConfirmButton: false,
                timer: 1500
            })
            erregistratu.value= "Erregistratu";
            erabkBistaratu();
            id_erab.value= "";
            frm.reset();
        }
    });
});

function erabkEzabatu(id_erab){
    Swal.fire({
        title: 'Seguru zaude ezabatu nahi duzula?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si!',
        cancelButtonText: 'NO'
    }).then((result) => {
        if(result.isConfirmed){
            fetch("/2Erronka/Controller/CAEDelete.php", {
                method:"POST",
                body: id_erab
            }).then(response => response.text()).then(response => {
                if(response == "delete"){
                    erabkBistaratu();
                    Swal.fire({
                        icon: 'success',
                        title: 'Ezabatua',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }
            })
        }
    })
}

function erabkAldatu(id_erab){
    fetch("/2Erronka/Controller/CAEUpdate.php", {
        method:"POST", 
        body: id_erab
    }).then(response => response.json()).then(response => {
        izena.value = response.izena;
        abizena.value = response.abizena;
        email.value = response.email;
        pasahitza.value = response.pasahitza;
        rola.value = response.rola;
        erregistratu.value = "Eguneratu";
    })
}

bilatu.addEventListener("keyup", () => {
    const balioa = bilatu.value;
    if(balioa == ""){
        erabkBistaratu();
    }else{
        erabkBistaratu(balioa);
    }
})