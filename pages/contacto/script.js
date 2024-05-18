const form = document.getElementById("miFormulario");
const email = document.getElementById("mail");
const nombre = document.getElementById("nombre");
const asunto = document.getElementById("asunto");
const mensaje = document.getElementById("mensaje");
let verificar =0;

  form.addEventListener("submit", (event) => {
    verificar=0;
    if (email.value === "" || !email.validity.valid) {
        alert("Correo inválido.");
        event.preventDefault();
        verificar++;
      }
    if(nombre.value==="" || asunto.value==="" || mensaje.value==="" || email.value===""){
      mostrarError();
      verificar++;
      event.preventDefault();
    }
    if (verificar ==0){
      limpiar();
    }
  });
  function limpiar(){
    email.value="";
    emailError.value="";
    mensaje.value="";
    nombre.value="";
    asunto.value="";
  };

  function mostrarError(){
    alert("Todos los campos deben ser rellenados.");
    
  }

  function correoInvalido() {
    if (email.value === '') {
      emailError.textContent = "Debes ingresar un correo.";
    } else if (email.validity.typeMismatch) {
      emailError.textContent = "El valor ingresado debe ser un correo.";
    } else if (email.validity.tooShort) {
      emailError.textContent = `El correo debe tener al menos ${email.minLength} caracteres; has ingresado ${email.value.length}.`;
    }
    emailError.className = "error active";
  }