<html lang="pt-br"><head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Raleway|Roboto|Cinzel|asap|Ubuntu|Open+Sans+Condensed:300|Work+Sans" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/css/estilo_header.css">
<link rel="stylesheet" type="text/css" href="css/login/autenticar.css">
<link rel="stylesheet" type="text/css" href="css/login/prestador_de_servico.css">
<link rel="stylesheet" type="text/css" href="css/login/cadastro-loja-revendedor.css">
<link rel="stylesheet" type="text/css" href="css/login/cadastro-usuario.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script type="text/javascript" src="js/logar-menu.js"></script>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> 
<script type="text/javascript">
  $(document).ready(function(){
/*  var tag=document.getElementsByTagName("a").length;
  var num;
  for(num=1;num<tag;num++){
  	 if(document.getElementsByTagName("a")(num).text.indexOf("@")>-1?true:false){
  	 	alert('1');

  	 }
  }
*/

  	/*------formulario---de---login---*/
  	$.ajax({
  		url:'ajax/login/autenticar.html',
  		success:function(autenticar){
  			$("body").append(autenticar);
  		}
  	});
  	/*---------fim--do--formulario---*/


  	/*------------categoria--de--header--------------*/
     $("#sub_menu > li > a").click(function(){ 
     	 $("#categoria > li > a").html("");
     	 $("#categoria > li > a").html($(this).html()); 
     });
    /*---------------------fim--categoria------------*/

    /*----Formulário--de--cadastro--Loja-Revendedor-de-login-para-cadastro-*/
     $("body").on('click','#logar > #autenticar > #j_cadastrar',function(e){
     	e.preventDefault();
     	$.ajax({
     		url:'ajax/login/cadastro-loja-revendedor.html',
     		success:function(loja_revender){
     			$("#logar").remove();
     			$("body").css({'background-size':'100% 100%'});
     			$("body").append(loja_revender);
     		} 

     	});
     });
     /*-------------------fim-de--formulario---cadastro-----*/


     /*----------------Formulário--para--Usuário-------------*/
     $("body").on('click','#cadastrar > span:nth-child(2)',function(){
     		$("#cadastrar").remove();
     		$.ajax({
     			url:'ajax/login/autonomo.html',
     			type:'Post',
     			success:function(usuario){
     				$("body").append(usuario);
     			}
     		});
     });
   /*-------------Fim--de--formulário--usuário----------------------*/

	 /*----------------Formulário--para--Loja-Revendedor-------------*/
     $("body").on('click','#cadastrar > span:nth-child(4)',function(){
     		$("#cadastrar").remove();
     		$.ajax({
     			url:'ajax/login/cadastro-loja-revendedor.html',
     			type:'Post',
     			success:function(loja_revender){
         			$("body").css({'background-size':'100% 100%'});
     				$("body").append(loja_revender);
     			}
     		});
     });

	 /*-------------Fim--de--formulário--Loja-Revendedor--------------*/


	  /*----------------Formulário--para--Prestador-de-Serviço-------------*/
     $("body").on('click','#cadastrar > span:nth-child(3)',function(){
     		$("#cadastrar").remove();
     		$.ajax({
     			url:'ajax/login/prestador_de_servico.html',
     			type:'Post',
     			success:function(prestador_de_servico){
         			$("body").css({'background-size':'100% 100%'});
     				$("body").append(prestador_de_servico);
     			}
     		});
     });
	 /*-------------Fim--de--formulário--Prestador-de-Serviço--------------*/

     /*-------------------Fomulário--de--Login-----------------*/
     $("body").on('click','#cadastrar > span:first-child',function(){
       $("#cadastrar").remove();
       $.ajax({
       	url:'ajax/login/autenticar.html',
       	success:function(autenticar){
       		$("body").append(autenticar);
       		$("body").css({'background-size':'100%'});
       	}
       });
     });

     /*---------------Fim-de-formulário-login---------------------*/

  });
</script>
<title>NEBRAVER</title>
</head>
<body style="background-image: url(imgs/banner/predios.jpg);">
   <header style="background-color:black; position:absolute; width:100%; left:0; top:7px;">
     <div id="logo" style="margin-left:20px;">
  <h1 style="font-size:40px; font-family:cinzel,arial,sans-serif; margin-top:-5px; color:white;">Nebraver</h1>

 </div>
     
     <div id="formulario">
      <form id="autenticar" action="">
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
        <li><a href="#">Como Funciona</a></li>
        <li><a href="contato.php">Contato</a></li>
        <li><a href="#">Login</a></li>
       </ul>
      </nav>
     </div>
     <div style="clear:left;"></div>
 </header>




</body>
</html>