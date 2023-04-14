
function coger(cosa){
    switch (cosa) {
        case 'reset':
            alert('Intenta Salir del Aula');
            localStorage.removeItem("llaves");
            break;

        case 'llaves':
          alert('has cogido las llaves');
          localStorage.setItem("llaves", "true");

          break;

        case 'puerta':
          if(localStorage.getItem("llaves")){
            alert('has abierto la puerta');
            window.open("./4b.html");
            }
         else{
            alert('no puedes abrir la puerta');
         }


          break;
      }
}