
<?php
include "funcoes/script";
?>

<!DOCTYPE html>
<html lang="en">
     <head>
          <title>Physis Studio Pilates</title>

     </head>
     <link href="css/css.css" rel="stylesheet">
     <body>
          <form method="post" name="frmlogin" id="frmlogin" action="login_entrar.php">

               <div id="logintopo">
                    <h1> Physis</h1>
               </div>
               <div id="loginconteudo">
                    <label>Login: </label>
                    <input type="text" name="login"  id="login" style="margin-left:3px;"> 
                    <br/>
                    <label>Senha: </label>
                    <input type="password" name="senha"  id="senha">
                    <br/>
                    <input type="submit" name="btn" id="btn" value="Entrar">
               </div>
          </form>  
        
          <script type="text/javascript">
               document.form.frmlogin.focus();
          </script>

          <?php
               session_destroy();
          ?>
     </body>
</html>
