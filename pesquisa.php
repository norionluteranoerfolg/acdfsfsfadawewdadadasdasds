<html lang="pt-br"><head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/css/estilo_header.css">
<link rel="stylesheet" type="text/css" href="css/css/estilo_home.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/logar-menu.js"></script>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
<script type="text/javascript">
  $(document).ready(function(){
    $("#sub_menu > li > a").click(function(){ 
      $("#categoria > li > a").html(""); $("#categoria > li > a").html($(this).html()); 
    });
  });
</script>
<title>Achei!</title>
</head>
<body style="background-color:#FAFAFA;">
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
        <li><a href="#">Home</a></li>   
        <li><a href="#">Como Funciona</a></li>
        <li><a href="#">Cadastrar</a></li>
        <li><a href="#">Login</a></li>
       </ul>
      </nav>
     </div>
     <div style="clear:left;"></div>
 </header>
  
  <div id="pesquisa" style="width:100%; height:1620px; margin-top:55px; background-color:#fff;">
  <div id="filtro" style="height:100%; /*! width:14%; */ margin-left:1%; margin-right:2%; /*! border-radius:0; */ /*! background-color:#EEEEEE; */ float:left;">
  
  <ul style="border:1px solid #DDD;">
    
    
    <li style="margin-top:12px; /*! border-bottom: 1px solid rgb(172, 172, 172); */ /*! margin-bottom: 0px; */">Localização<ul><input style="margin-left:-40px;" size="11" placeholder="Informe..." type="text"><button style="height:24px; margin-left:5px; background-color:white; border:1px solid #ddd; font-size:14px;">&gt;</button> </ul></li>
    <li style="/*! border-bottom: 1px solid rgb(172, 172, 172); */ margin-top: 0px; /*! margin-bottom:0px; */"><br>Faixa de Preço<br> <input size="3" placeholder="min" type="text">-<input size="3" placeholder="máx" type="text"> <button style="height:23px; font-size:14px; background-color:white; border:1px solid #ccc; margin-bottom:15px;">&gt;</button> </li>
    <li style="margin-top:0; /*! border-bottom: 1px solid rgb(172, 172, 172); */ /*! margin-bottom: 0px; */">F. Pagamentos <ul>
  <input size="11" placeholder="parcelado - vista" style="margin-left:-40px;" type="text">
  <button style="background-color:white; border:1px solid #acacac; font-size:14px;">&gt;</button>
</ul></li>
    <li style="/*! border-bottom: 1px solid rgb(172, 172, 172); */ /*! margin-bottom: 0px; */">Descontos <ul style="margin-left:-39px;">
  <input size="11" placeholder="Ex: 10%" type="text">
  <button style="height:24px; margin-left:0; font-size:12px; border:1px solid #ddd; background-color:white;">&gt;</button>
</ul></li>
  </ul>
</div>

<div id="seção_PS" style="height:100%; width:82%; /*! border:1px solid black; */ float:left;">
  <div style="height: 352px; width: 22%; margin-right: 25px; float: left;">
     <img src="/imgs/produtos/animais/coleiras.png" style="/*! border:1px solid #ccc; */" width="100%" height="210px">
 <div id="descricao">
     
     <a href="#" style="text-decoration:none;  /*! font-family: arial; */ /*! font-size:20px; */ color:#1a0dab;">Coleira</a>
<br>
     
     <span style=" font-weight: bold;  /*! color:#900; */">R$ 35,50</span>
<br>

     </div>
</div>

<div style="height: 352px; width: 22%; margin-right: 25px; float: left;">
     <img src="/imgs/produtos/animais/coleiras.png" style="/*! border:1px solid #ccc; */" width="100%" height="210px">
 <div id="descricao">
     
     <a href="#" style="text-decoration:none;  /*! font-family: arial; */ /*! font-size:20px; */ color:#1a0dab;">Coleira</a>
<br>
     
     <span style=" font-weight: bold;  /*! color:#900; */">R$ 35,50</span>
<br>

     </div>
</div>
<div style="height: 352px; width: 22%; margin-right: 25px; float: left;">
     <img src="/imgs/produtos/animais/coleiras.png" style="/*! border:1px solid #ccc; */" width="100%" height="210px">
 <div id="descricao">
     
     <a href="#" style="text-decoration:none;  /*! font-family: arial; */ /*! font-size:20px; */ color:#1a0dab;">Coleira</a>
<br>
     
     <span style=" font-weight: bold;  /*! color:#900; */">R$ 35,50</span>
<br>

     </div>
</div>

<div style="height: 352px; width: 22%; margin-right: 25px; float: left;">
     <img src="/imgs/produtos/animais/coleiras.png" style="/*! border:1px solid #ccc; */" width="100%" height="210px">
 <div id="descricao">
     
     <a href="#" style="text-decoration:none;  /*! font-family: arial; */ /*! font-size:20px; */ color:#1a0dab;">Coleira</a>
<br>
     
     <span style=" font-weight: bold;  /*! color:#900; */">R$ 35,50</span>
<br>

     </div>
</div>
  </div>





 </div>


</body></html>