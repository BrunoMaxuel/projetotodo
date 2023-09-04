function menu() {
  if(document.getElementById('menu').style.width == '0px'){
    document.getElementById('menu').style.width = '300px';
    document.getElementById('menu').style.display = 'inline-block';
  }else{
    document.getElementById('menu').style.width = '0px';
    document.getElementById('menu').style.display = 'none';
  }
}
