<html lang="pt-br"><head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/teste-login.css">
<link rel="stylesheet" type="text/css" href="css/css/estilo_header.css">
<link rel="stylesheet" type="text/css" href="css/css/estilo_home.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/logar-menu.js"></script>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
<script type="text/javascript">
  $(document).ready(function(){
   var tipo_assunto = $("#contato > form > fieldset > ul > li > ul > li");
   var assunto= $("#contato > form > fieldset > ul > li > span");

    $("#sub_menu > li > a").click(function(){ 
      $("#categoria > li > a").html(""); $("#categoria > li > a").html($(this).html()); 
    });




	tipo_assunto.click(function(){   assunto.html(""); assunto.html($(this).html()); });



 });
</script>
<title>Achei!</title>
</head>
<body style="/*! background-color:#FAFAFA; */">
   <header style="background-color:black; position:absolute; width:100%; left:0; top:7px;">
     <div id="logo" style="margin-left:20px;">
  <h1 style="font-size:40px; font-family:cinzel,arial,sans-serif; margin-top:-5px; color:white;">Nebraver</h1>

 </div><!--http://i62.tinypic.com/15xvbd5.png-->
     
     <div id="formulario">
      <form action="">
        <input placeholder="Buscar . . . " size="40" type="text">
        <ul class="categoria_menu" id="categoria"> 
    <li>
      <a>Sistemas</a> 
      <ul class="categoria_menu" id="sub_menu"> 
        <li><a>Web Design</a></li> 
        <li><a>Hospedagem</a></li> 
        <li><a>SEO</a></li> 
        <li><a>Sistemas</a></li> 
      </ul> 
    </li>
</ul>
  
        <button type="submit" id="button-pesquisar">  
           <img src="imgs/icon/lupa.png" width="25" height="26">
        </button>
      </form>
     </div>
     
     <div id="menu">
      <nav id="login">
       <ul>
        <li><a href="index.php">Home</a></li>   
        <li><a href="como-funciona.php">Como Funciona</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="#">Login</a></li>
       </ul>
      </nav>
     </div>
     <div style="clear:left;"></div>
 </header>

<div id="contato" style="height:499px; width:100%; margin-top:49px; /*! border:1px solid black; */">
  <h2>Fale conosco e fale de suas sugestões e dúvidas</h2>
  <form>
  <fieldset>
    
    <ul>
  <li>
    <span>Dúvida</span>


<ul id="assunto">
    <li>Sugestão</li>
    <li>Dúvida</li>
</ul>
    </li>

</ul><br>
    <textarea>    </textarea>
<button>Enviar</button>
</fieldset>
  </form>
  
</div>



<footer style="position:absolute; height:50px; bottom:8px; width:100%;"></footer>

  
 
  


</body></html>