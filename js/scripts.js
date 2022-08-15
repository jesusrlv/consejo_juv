  $(document).ready(function () {
      $("#curp").on("keyup", function () {
          var value = $(this).val().toLowerCase();
          $("#curp tr").filter(function () {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
          });
      });
  });

  function ValidaSoloNumeros() {
    if ((event.keyCode < 48) || (event.keyCode > 49)) 
      event.returnValue = false;
    }

    function ValidaDos(){
        var cant = document.getElementById('cantidad').value;
        if(cant <= 1){
          document.getElementById('detalles').readOnly = true;
        }
       else if(cant = 2){
          document.getElementById('detalles').readOnly = false;
        }
      }

    //   EDAD A PARTIR DE LA CURP

    function curp2date(curp) {
        var miCurp = curp.value.toUpperCase();
        var resultado = document.getElementById("edad");
      
        var m = miCurp.match(/^\w{4}(\w{2})(\w{2})(\w{2})/);  
        var anyo = parseInt(m[1], 10) + 1900;
        if (anyo < 1950) anyo += 100;
        var mes = parseInt(m[2], 10) - 1;
        var dia = parseInt(m[3], 10);  
        var fechaNacimiento = new Date(anyo, mes, dia);
        var edad = calcularEdad(fechaNacimiento);  
        resultado.classList.add("ok");
        // resultado.innerText = "Su edad es: " + edad + " años.";
        document.getElementById("edad").value = edad;
      }
      
      function calcularEdad(fecha) {
        var hoy = new Date();
        var cumpleanos = new Date(fecha);
        var edad = hoy.getFullYear() - cumpleanos.getFullYear();
        var m = hoy.getMonth() - cumpleanos.getMonth();
      
        if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
          edad--;
        }
        return edad;
      }