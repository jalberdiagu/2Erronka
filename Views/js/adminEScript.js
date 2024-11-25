
erabkBistaratu();

function erabkBistaratu(bilaketa){
    fetch("/2Erronka/Controller/CAERead.php", {
        method:"POST",
        body: bilaketa
    }).then(response => response.text()).then(response => {
        erantzuna.innerHTML="";
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
            id_erab.value= "";
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
    console.log(id_erab);
    Swal.fire({
        title: 'Ziur zaude ezabatu nahi duzula?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Bai!',
        cancelButtonText: 'EZ'
    }).then((result) => {
        if(result.isConfirmed){
            console.log("result" + result);

            fetch("/2Erronka/Controller/CAEDelete.php", {
                method: "POST",
                body: id_erab
            }).then(response => response.text()).then(response => {
                console.log(response);
                if(response == "delete"){
                    console.log("ooooh");
                    erabkBistaratu();
                    Swal.fire({
                        icon: 'success',
                        title: 'Ezabatua',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }else {
                    console.log("no delete");
                }
            })
        }
    })
}

function erabkAldatu(id_erab){
    console.log("response:" + id_erab);
    fetch("/2Erronka/Controller/CAEUpdate.php", {
        method:"POST", 
        body: id_erab
    }).then(response => response.json()).then(response => {
        console.log(response);
        console.log("log:"+response.id_erab);
        console.log(response.izena);

        document.getElementById("pass").style.display ="none";
        document.getElementById("id_erab").value = response[0].id_erab;
        document.getElementById("izena").value = response[0].izena;
        document.getElementById("abizena").value = response[0].abizena;
        document.getElementById("email").value = response[0].email;
        document.getElementById("pasahitza").value = response[0].pasahitza;
        document.getElementById("rola").value = response[0].rola;
        document.getElementById("erregistratu").value = "Eguneratu";
    });
}

bilatu.addEventListener("keyup", () => {
    const balioa = bilatu.value;
    if(balioa == ""){
        erabkBistaratu();
        console.log("recargar");
    }else{
        erabkBistaratu(balioa);
        console.log("recargar - " + balioa);
    }
})