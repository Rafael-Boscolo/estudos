function Somar() {
  var a = parseInt(document.querySelector(".number1").value);
  var b = parseInt(document.querySelector(".number1").value);

  var soma = a + b;

  document.querySelector(".resultado").value = soma;
}