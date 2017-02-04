<html lang="pt-br"><head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Raleway|Roboto|Cinzel|asap|Ubuntu|Open+Sans+Condensed:300|Work+Sans|Asul" rel="stylesheet"> 
<link rel="stylesheet" type="text/css" href="css/user/lagado.css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){  
   

    $.ajax({
      url:'ajax/logado/inicial-logado.html',
      type:'Post',
      success:function(inicial){
        $("body").append(inicial);
      }
    });

    $("#nav_fornecedores").click(function(){
      $.ajax({
        url:'ajax/logado/fornecedor/fornecedor-inicio.html',
        cache:false,
        success:function(fornecedor){
          $("main").remove();
          $("body").append(fornecedor);
          $("section+h3").remove();
        }
      });

    });


    $("#nav_financas").click(function(){
      $.ajax({
        url:'ajax/logado/finanças/finanças.html',
        cache:false,
        success:function(finanças){
          $("main").remove();
          $("body").append(finanças);
          $("section+h3").remove();
        }
      });
    });


  });
</script>
<title>NEBRAVER</title>
</head>
<body>
  <header>
  <form>
   <input placeholder="Produtos.." size="40" type="text">
   <button><img src="imgs/icon/lupa.png" width="30" height="30"></button>
  </form>

<div>
  <img src="imgs/icon/login/user.png">
  <span>John joshon</span>
<div></div></div>
</header>
  
  <section id="primeiro">
  <h1>NEBRAVER</h1>
  <div>
   <ul>
      <li id="nav_fornecedores">Fornecedores</li>
      <li id="nav_funcionários">Funcionários</li>
      <li id="nav_produtos">Produtos</li>
      <li id="nav_servico">Serviços</li>
      <li id="nav_financas">Finanças</li>
      <li id="nav_estatistica">Estatística</li>
      <li id="nav_configuracao">Configuração</li>
      <li id="nav_explicacao">Explicação</li>
      <li id="nav_sair">Sair</li>
   </ul>
  </div>
</section>




</body></html>