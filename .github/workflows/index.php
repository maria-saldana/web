<!DOCTYPE html>
<html>
<head>
<link rel=stylesheet type="text/css" href="portafolio.css">
<script src="portafolio.js" language="javascript" type="text/javascript"></script> 
<body>
<form></form>
<div id="res" class="alert"></div>
<script type="text/javascript" src="deps/jquery.min.js"></script>
<script type="text/javascript" src="deps/underscore.js"></script>
<script type="text/javascript" src="deps/opt/jsv.js"></script>
<script type="text/javascript" src="lib/jsonform.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<form onsubmit='return onSubmit(this)'>
<input name='user' placeholder='user'><br>
<input name='password' type='password' placeholder='password'><br>
<button type='submit'>Enviar</button></form>
  

<script>
$(document).ready(function() {
$('#loginform').submit(function(e) {
  e.preventDefault();
$.ajax({
   type: "POST",
   url: 'login.php',
   data: $(this).serialize(),
   success: function(response)
{
var jsonData = JSON.parse(response);
if (jsonData.success == "1")
{
 location.href = 'my_profile.php';
   }
 else
   {
 alert('Contraseña incorrecta!');
}
}
});
});
});
</script>  
<br> <form id="id_form" action="index.html">
    <input type="submit"> Enviar </submit>
    <script> $("#id_form").on("submit", function(e){
        //Code: Action (like ajax...)
        e.preventDefault();
     
        $.ajax({
                 url         : 'formula.html',
                 type        : 'POST',
                 data        : {val:inputs}, //Aquí tienes que enviar la información que necesita formula.html si no tiene nada puedes dejarlo así {}
                 cache       : false,
                 async       : false,
                 dataType    : 'json',
                 contentType : "application/json",
                 success: function(response)
                 {
                    alert('datos guardados')
                 },
                 error : function(response)
                 {
                     alert('error al guardar los datos')
                 }
        //return false;
      })
      </script>
      
    </form>
   
   

  
<body bgcolor="#bed7c0">
<div class="main">
    <form id="miForm">
        <div>
            <input type="file" id="idFiles" name="file" value="selecciona archivo" multiple>
        </div>
        <div>
            <input type="text" name="nombre" placeholder="nombre">
        </div>
        <div class='center'>
            <input type="submit" value="enviar">
        </div>
    </form>
    <script>
/**
 * AJAX para enviar el formulario con la imagen al archivo guardar.php
 */
$("#miForm input[type=submit]").click(function() {
    var data=getFiles();
    data=getFormData("miForm",data);
    $.ajax({
        url:"guardar.php",
        type:"POST",
        data:data,
        dataType:"json",
        contentType:false,
        processData:false,
        cache:false
    }).done(function(data){
        if(data.ok==1)
        {
            alert("datos enviados correctamente\n\n"+data.message);
        }else{
            alert("ha habido algun error\n\n"+data.message);
        }
    });
	return false;
});
 
/**
 * Función que pone el archivo en un FormData
 * @return FormData
 */
function getFiles()
{
	var idFiles=document.getElementById("idFiles");
	// Obtenemos el listado de archivos en un array
	var archivos=idFiles.files;
	// Creamos un objeto FormData, que nos permitira enviar un formulario
	// Este objeto, ya tiene la propiedad multipart/form-data
	var data=new FormData();
	// Recorremos todo el array de archivos y lo vamos añadiendo all
	// objeto data
	for(var i=0;i<archivos.length;i++)
	{
		// Al objeto data, le pasamos clave,valor
		data.append("archivo"+i,archivos[i]);
	}
	return data;
}
 
/**
 * Función que recorre todo el formulario para apadir en el FormData los valores del formulario
 * @param string id hace referencia al id del formulario
 * @param FormData data hace referencia al FormData
 * @return FormData
 */
function getFormData(id,data)
{
	$("#"+id).find("input,select").each(function(i,v) {
        if(v.type!=="file") {
            if(v.type==="checkbox" && v.checked===true) {
                data.append(v.name,"on");
            }else{
                data.append(v.name,v.value);
            }
        }
	});
	return data;
}
</script>

<footer>
<div style="border:1px solid #000000; text-transform:uppercase">  
<h3 align="center"><div align="center"><a href="php.php">Volver </a></div></h3></div>
</div></footer></body>
  
<nav id="navbar">
<div id="topnav">
  <a href="#dom">DOM</a>
  <a href="#event">Eventos</a>
  <a href="#objet">Objetos</a>
  <a href="#async">Programación asíncrona</a>
</div></nav>
  
<article id="headline">
  <h1>Portafolio.</h1>
  <h2>Aplicación Web con JavaScript</h2>
</article>

<main>
<section id="async">
<h3>Programación asíncrona</h3>
<script>
const aFunction = async () => {
  return Promise.resolve('test')
}
aFunction().then(alert)</script></section>

<section id="objet">
<h3>Objetos</h3>
<script>
let user = {
  name: "MARY SALDANA",
  age: 24,
  isAdmin: true
};
for (let key in user) {
alert( key ); 
alert( user[key] ); 
}
</script></section>
<h3>Event</h3>
<script>
const cuerpoDelDocumento = document.body;
cuerpoDelDocumento.onload = miFuncion;

function miFuncion() {
  alert('Lista para usar');
}
</script></section>

<section id="dom">
 <h3>DOM</h3>
 <script>
 var text = document.getElementById("dom").innerHTML;
alert("uso DOM " + text);
</script></section></main>   
<div id='whatsapp-chat' class='hide'>
<div class='header-chat'>
<div class='head-home'><h3>Portafolio web</h3>
<div class='info-avatar'><img src='https://sistemadecotizaciones.files.wordpress.com/2020/08/supportmale.png'/></div></div>
 
<div class='get-new'>
<div id='get-label'>Soporte</div>
<div id='get-nama'>Servicio al cliente</div></div></div>
 
<div class='start-chat'>
<div class='first-msg'><span>¡Buen dia ! ¿como puedo ayudarte?</span></div>
<div class='blanter-msg'><textarea id='chat-input' placeholder='Escribe un mensaje' maxlength='120' row='1'></textarea>
<a href='#' onclick="enviar_mensaje();" id='send-it'>Enviar</a></div></div>
<div id='get-number'>3321575476</div><a class='close-chat' onclick="cerrar_chat();" href='#'>×</a>
</div>
 
<a class='blantershow-chat' onclick="mostrar_chat();" href='#' title='Show Chat'><svg width="20" viewBox="0 0 24 24"><defs/><path fill="#eceff1" d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z"/><path fill="#4caf50" d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z"/><path fill="#fafafa" d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z"/></svg> 
Chatea en linea</a>

<br>
<br>
<table id="tabla">
    <thead>
        <tr>
            <th>Lenguaje</th>
            <th>Sitio web</th>
            <th>Algunos usos</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>PHP</td>
            <td>php.net</td>
            <td>Aplicaciones web</td>
        </tr>
        <tr>
            <td>Python</td>
            <td>python.org</td>
            <td>Aplicaciones web y de escritorio. Machine learning</td>
        </tr>
        <tr>
            <td>Go</td>
            <td>golang.org</td>
            <td>Aplicaciones web y de escritorio</td>
        </tr>
    </tbody>
</table>

                
            </select>

<script src="js.js"></script>
  

</body>
<style>
	body {
    font-family: "Lato", sans-serif;
    background:linear-gradient(to right top, #f36fa2, #8d156f);
}
a:link,
a:visited {
    color: #444;
    text-decoration: none;
    transition: all 0.4s ease-in-out;
}
h1 {
    font-size: 20px;
    text-align: center;
    display: block;
    background: linear-gradient(to right top, #6f96f3, #164ed2);
    padding: 20px;
    color: #fff;
    border-radius: 50px;
}
 
#whatsapp-chat {
    position: fixed;
    background: #fff;
    width: 350px;
    border-radius: 10px;
    box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
    bottom: 90px;
    right: 30px;
    overflow: hidden;
    z-index: 99;
    animation-name: showchat;
    animation-duration: 1s;
    transform: scale(1);
}
 
a.blantershow-chat {
    background: #fff;
    color: #404040;
    position: fixed;
    display: flex;
    font-weight: 400;
    justify-content: space-between;
    z-index: 98;
    bottom: 25px;
    right: 30px;
    font-size: 15px;
    padding: 10px 20px;
    border-radius: 30px;
    box-shadow: 0 1px 15px rgba(32, 33, 36, 0.28);
}
 
a.blantershow-chat svg {
    transform: scale(1.2);
    margin: 0 10px 0 0;
}
 
.header-chat {
    background: #095e54;
    color: #fff;
    padding: 20px;
}
.header-chat h3 {
    margin: 0 0 10px;
}
.header-chat p {
    font-size: 14px;
    line-height: 1.7;
    margin: 0;
}
.info-avatar {
    position: relative;
}
.info-avatar img {
    border-radius: 100%;
    width: 50px;
    float: left;
    margin: 0 10px 0 0;
}
.info-avatar:before {
    content: "\f232";
    z-index: 1;
    font-family: "Font Awesome 5 Brands";
    background-image: url("https://www.bing.com/images/search?view=detailV2&ccid=KpgvLL8e&id=AD0B09C07D26FAAF6601CFFB307B61E966FA57CB&thid=OIP.KpgvLL8eG68G1MyCUMVRQwHaHa&mediaurl=https%3a%2f%2fimage.freepik.com%2ffoto-gratis%2ffondo-bokeh-luz_64049-66.jpg&cdnurl=https%3a%2f%2fth.bing.com%2fth%2fid%2fR.2a982f2cbf1e1baf06d4cc8250c55143%3frik%3dy1f6ZulhezD7zw%26pid%3dImgRaw%26r%3d0&exph=626&expw=626&q=imagen+png+de+colores+claros&simid=608053849738852607&FORM=IRPRST&ck=1FDCD3F3E97946A331598F566FFC1497&selectedIndex=3&itb=0");
    color: #fff;
    padding: 4px 5px;
    border-radius: 100%;
    position: absolute;
    top: 30px;
    left: 30px;
}
 
.info-chat span {
    display: block;
}
#get-label,
span.chat-label {
    font-size: 12px;
    color: #888;
}
#get-nama,
span.chat-nama {
    margin: 5px 0 0;
    font-size: 15px;
    font-weight: 700;
    color: #222;
}
#get-label,
#get-nama {
    color: #fff;
}
span.my-number {
    display: none;
}
.blanter-msg {
    color: #444;
    padding: 20px;
    font-size: 12.5px;
    text-align: center;
    border-top: 1px solid #ddd;
}
textarea#chat-input {
    border: none;
    font-family: "Arial", sans-serif;
    width: 100%;
    height: 20px;
    outline: none;
    resize: none;
}
a#send-it {
    color: #555;
    width: 40px;
    margin: -5px 0 0 5px;
    font-weight: 700;
    padding: 8px;
    background: #eee;
    border-radius: 10px;
}
.first-msg {
    background: #e7a7a7;
    padding: 30px;
    text-align: center;
}
.first-msg span {
    background: #eb9898;
    color: #333;
    font-size: 14.2px;
    line-height: 1.7;
    border-radius: 10px;
    padding: 15px 20px;
    display: inline-block;
}
.start-chat .blanter-msg {
    display: flex;
}
#get-number {
    display: none;
}
a.close-chat {
    position: absolute;
    top: 5px;
    right: 15px;
    color: #fff;
    font-size: 30px;
}
@keyframes showhide {
    from {
        transform: scale(0.5);
        opacity: 0;
    }
}
@keyframes showchat {
    from {
        transform: scale(0);
        opacity: 0;
    }
}
@media screen and (max-width: 480px) {
    #whatsapp-chat {
        width: auto;
        left: 5%;
        right: 5%;
        font-size: 80%;
    }
}
.hide {
    display: none;
    animation-name: showhide;
    animation-duration: 1.5s;
    transform: scale(1);
    opacity: 1;
}
.show {
    display: block;
    animation-name: showhide;
    animation-duration: 1.5s;
    transform: scale(1);
    opacity: 1;
}
#topnav {
  background-color: withe;
  position: fixed;
  top: 0px;
  width: 100%
}
#navbar a {
  float: right;
  color: black;
  text-align: center;
  padding: 1rem;
  text-decoration: none;
}
@media screen and (max-width: 600px) {#navbar a {font-size: 12px;}}
</style>

</head>
</html>  

           
        
       