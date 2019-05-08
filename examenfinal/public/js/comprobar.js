function comp(){
  let nombre=document.getElementById('nombre').value;
  let apellidos=document.getElementById('apellidos').value;
  let precio_hora=document.getElementById('precio_hora').value;
  let horas=document.getElementById('horas').value;
  let error=true;
  if(nombre==""){
    error=false;
    alert("No has introducido el nombre");
  }
  if(apellidos=="") {
    error=false;
    alert("No has introducido los apellidos");
  }
  if(precio_hora=="") {
    error=false;
    alert("No has introducido el precio hora");
  }
  if(horas=="") {
    error=false;
    alert("No has introducido las horas");
  }
  if(error==false) {
    return false;
  }
}
