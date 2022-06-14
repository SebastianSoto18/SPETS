function Inlogin(){
    if(document.getElementById("Iemail").value=="admin" && document.getElementById("Ipassword").value=="admin"){
        window.location.assign("principal.html");
    }else{ 
        document.getElementById("Iemail").classList.toggle("shake-bottom");
        document.getElementById("Ipassword").classList.toggle("shake-bottom");
        
        const mensaje= document.createElement("span");
        mensaje.textContent="CORREO O CONTRASEÑA INCORRECTOS";
        mensaje.classList.add("rojo");
        

    }
}

function presstecla(){
    tecla = event.keyCode;

    if(tecla==13){
        Inlogin();
    }
}


window.onkeydown=presstecla;