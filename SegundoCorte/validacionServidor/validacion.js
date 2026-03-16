//Función para validar el formulario
function validarFormulario(){
    var nombre = document.getElementById("nombre").value;
    var email = document.getElementById("email").value;
    var telefono = document.getElementById("telefono").value;

    if(nombre === "" || email === "" || telefono === ""){
        alert("Por favor, complete todos los campos.");
        return false;//Este return evita que el formulario se envíe. 
        return true;//Si el formulario es válido, se envía.
    }

}