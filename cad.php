<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="cad.css">
</head>
<body>
   <header id="h1">
     <h1>Seus Dados Foram Cadastrados Corretamente</h1>
   </header>
   
   <main class="vari">
        <?php 
           $nome = $_GET["nome"];
           $email = $_GET["email"];
           $telefone = $_GET["telefone"];

           echo "É um prazer te conhecer, 
           <span>$nome</span> $email $telefone! 
            Padaria Ta Bom Pão agradece seu Contato";
        ?>
        <p id="voltar"><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
   </main>
  
</body>
</html>