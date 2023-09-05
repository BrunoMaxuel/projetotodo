function menu() {
  var menuElement = document.getElementById('menu');
  var menuStyle = window.getComputedStyle(menuElement);

  if (menuStyle.display === 'none' || menuStyle.display === '') {
    menuElement.style.display = 'block';
  } else {
    menuElement.style.display = 'none';
  }
}
function darFocoNoInput() {
  // Obtém a referência para o elemento input
  var inputElement = document.getElementById("meuInput");

  // Define o foco no elemento
  inputElement.focus();
}

