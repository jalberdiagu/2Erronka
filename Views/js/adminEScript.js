
erabkBistaratu();

function erabkBistaratu(bilaketa){
    const formData = new FormData();
    formData.append("bilaketa", bilaketa);
    fetch("/2Erronka/Controller/CAERead.php", {
        method:"POST",
        body: formData
    }).then(response => response.text()).then(response => {
        erantzuna.innerHTML = response;
    });
}

erregistratu.addEventListener("click", () => {
    fetch("/2Erronka/Controller/CAECreate.php", {
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.json()).then(response => {
        console.log("response:" + response.tipo);
        if(response.tipo == "insert"){
            Swal.fire({
                icon: 'success',
                title: 'Erregistratuta',
                showConfirmButton: false,
                timer: 1500
            })
            frm.reset();
            erabkBistaratu();
        }else if(response.tipo == "update"){
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
            const formData = new FormData();
            formData.append("id_erab", id_erab);
            fetch("/2Erronka/Controller/CAEDelete.php", {
                method:"POST",
                body: formData
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
    console.log("response:" + id_erab);
    fetch("/2Erronka/Controller/CAEUpdate.php", {
        method:"POST", 
        body: new FormData().append("id_erab", id_erab)
    }).then(response => response.json()).then(response => {
        document.getElementById("id_erab").value = response.id_erab;
        document.getElementById("izena").value = response.izena;
        document.getElementById("abizena").value = response.abizena;
        document.getElementById("email").value = response.email;
        document.getElementById("pasahitza").value = response.pasahitza;
        document.getElementById("rola").value = response.rola;
        document.getElementById("erregistratu").value = "Eguneratu";
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