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
        <li><a href="login.php">Login</a></li>
       </ul>
      </nav>
     </div>
     <div style="clear:left;"></div>
 </header>
  
 <div id="apresentacao">
  <img src="imgs/banner/workspace.jpg" width="80%" height="100%">
  <div id="login">
    <form>
      <h4>Login</h4>
      <input placeholder="email..." size="30" type="text">
      <h4>Pass</h4>
      <input placeholder="email..." size="30" type="text">
<br>
      <button>Logar</button>
      <button>Cadastrar</button>
<br>
<a href="#">esqueci a senha</a>
    </form>
  </div>
</div>

<section id="sub_apresentacao">
  <article>
  <img src="imgs/banner/economize_reduce.jpg" width="100%" height="40%">
  <h3>Economize</h3>
  <p>
    Para que comprar o mesmo objeto gastando mais dinheiro, não faz sentido, pesquise e economize
    pequisar não é perda de tempo e sim um investimento.
  </p>
</article>
  <article>
  <img src="imgs/banner/banner2.jpg" width="100%" height="40%">
  <h3>Economize</h3>
  <p>
    Para que comprar o mesmo objeto gastando mais dinheiro, não faz sentido, pesquise e economize
    pequisar não é perda de tempo e sim um investimento.
  </p>
</article>
  <article>
  <img src="imgs/banner/negócios_reduce.jpg" width="100%" height="40%">
  <h3>Economize</h3>
  <p>
    Para que comprar o mesmo objeto gastando mais dinheiro, não faz sentido, pesquise e economize
    pequisar não é perda de tempo e sim um investimento.
  </p>
</article>
  <article>
  <img src="imgs/banner/acordo_reduce.jpg" alt="Fazer acordo" width="100%" height="40%">
  <h3>Economize</h3>
  <p>
    Para que comprar o mesmo objeto gastando mais dinheiro, não faz sentido, pesquise e economize
    pequisar não é perda de tempo e sim um investimento.
  </p>
</article>
</section>

  


<footer style="background-color: #78AFD4; height: 25px;"></footer>
</body></html>