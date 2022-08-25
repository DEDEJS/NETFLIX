<?php 
//arrumar o gradiente

?>

<!DOCTYPE HTML>
<html lang="PT-BR">
 <head>
  <meta charset="UTF-8">
  <title>Netflix</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="stylesheet" type="text/css" href="../css/form.css">
  <script>
   function InpuForm(){
    let InputLabelEmail = document.getElementById('FormInputEmailTelefone');
    if(InputLabelEmail.onclick){
      alert();
    }
   }
    function FormEmail(){
      let EmailLabel = document.getElementById('FormLabelEmailTelefone');
      let InputLabelEmail = document.getElementById('FormInputEmailTelefone');
      EmailLabel.style.fontSize = 10+"px";
      EmailLabel.style.marginTop = "1.8%"; 
      InputLabelEmail.focus();
      InputLabelEmail.style.borderBottom  = "2px red";
      if(InputLabelEmail.value != ""){
        alert();
      }
    }
    function FormSenha(){
      let SenhaLabel = document.getElementById('FormSenha'); 
      let InputLabelSenha = document.getElementById('FormInputSenha');
      SenhaLabel.style.fontSize = 10+"px";
      SenhaLabel.style.marginTop = "1.8%"; 
      InputLabelSenha.focus();
    }
  </script>
 </head>
 <body onclick="InpuForm();">
  
 <nav >
     <ul class="NavLogin">
      <li><h1>NETFLIX</h1></li>    
      
     </ul>
</nav>
<main class="login">
  
<form>
 <div class="form">
   <div class="FormH1">
    <h1>Entrar</h1>
   </div>
   <div class="Email"  onclick="FormEmail();">
   <label id="FormLabelEmailTelefone">Email ou número de telefone</label>

   <input type="text" class="EmailNumeroTelefone" id="FormInputEmailTelefone">
   </div>
   <div class="Senha" onclick="FormSenha();">
    <label id="FormSenha">Senha</label>
     <input type="password" class="Senha" id="FormInputSenha"> 
   </div>
   <div>
     <input type="submit" value="Entrar">
   </div>
   <div class="Checbox">
    <!-- checkbox -->
     <input type="checkbox"  value="Lembre" checked>
     <label for="vehicle1">Lembre-se de min</label>
     <span><a>Precisa de ajuda?</a></span>
   </div>
   <div class="NovoPorAqui">
     <h3>Novo por aqui?  <span><a>Assine agora.</a></span></h3> 
    
   </div>
   <div class="Recaptcha">
    <p>Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <a>Saiba Mais</a></p>
   
   </div>
 </div>
</form>
<div class="gradiant"></div>
</main>
<footer class="LoginFooter">
<p>Dúvidas? Ligue 0800-761-4631</p> 
<div class="footer-child">
  
  <ul>
  <li><a>Perguntas frequentes</a></li>
  <li><a>Relações com investidores</a></li>
  <li><a>Formas de assistir</a></li>
  <li><a>Informações corporativas</a></li>
  <li><a>Só na Netflix</a></li>
  </ul>
 </div>
 <div class="footer-child">
  <ul> 
   <li><a>Centro de ajuda</a></li>
   <li><a>Carreiras</a></li>
   <li><a>Termos de uso</a></li>
   <li><a>Entre em contato</a></li>
   </ul>
 </div>
 <div class="footer-child">
  <ul> 
   <li><a>Conta</a></li>
   <li><a>Resgatar cartão pré-pago</a></li>
   <li><a>Privacidade</a></li>
   <li><a>Teste de velocidade</a></li>
   </ul>
 </div>
 <div class="footer-child">
  <ul> 
   <li><a>Media Center</a></li>
   <li><a>Comprar cartão pré-pago</a></li>
   <li><a>Preferências de cookies</a></li>
   <li><a>Avisos legais</a></li>
   </ul>
 </div>
</footer>
</body>
</html>