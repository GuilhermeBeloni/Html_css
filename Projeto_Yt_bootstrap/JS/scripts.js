//Validação Form//
(function () {
    "use strict";
    window.addEventListener(
      "load",
      function () {
        var forms = document.getElementsByClassName("needs-validation");
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener(
            "submit",
            function (event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add("was-validated");
            },
            false
          );
        });
      },
      false
    );
  })();
  


//API Validação de CEP//
const cep = document.getElementById("inputCEP");
cep.addEventListener("blur", (e) => {
    let Cep = document.getElementById("inputCEP").value;
    let search = cep.value.replace("-", "");
    fetch(`https://viacep.com.br/ws/${search}/json/`).then((resposta) => {
        resposta.json().then(data => {
            console.log(data);
            document.getElementById("inputCity").value = data.localidade;
            document.getElementById("inputAddress").value = data.logradouro
            document.getElementById("inputEstado").value = data.uf;

        })
    })
    
})