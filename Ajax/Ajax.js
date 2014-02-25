function Ajax()
{
    var xmlhttp=false;
     try
    {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    }
    catch (e)
    {
        try
        {
               xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
          }
        catch (E)
        {
               xmlhttp = false;
          }
     }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined')
    {
          xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
function Buscar(){
        document.Accion.txtMatricula.defaultValue="w";
        resul = document.getElementById('resultado');	
	bus=document.Accion.txtMatricula.value;	
	ajax=Ajax();
	ajax.open("POST", "http://localhost/Biblioteca/sentencias/UsuariosAlu/busca.php",true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			resul.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("busqueda="+bus)
}