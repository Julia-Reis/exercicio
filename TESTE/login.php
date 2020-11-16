<?php
include "cabecalho.php";
echo'
    <div class="card" id="telaLogin">
        <div class="card-body" id="form_login">
            <form name="form_login" method="post" action="autenticaLogin.php">
            <div class="text-center">
                <img class="mb-4 mx-auto" src="img/Reis do Gesso.png" alt="Logo Reis do Gesso" width="72" height="72">
            </div>
            <h1 class="h3 mb-3 text-center">Login</h1>
            <br>
            <label class="sr-only">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email..." required autofocus>
            
            <label  class="sr-only">Senha</label>
            <input type="password" id="senha" name="senha" class="form-control" placeholder="senha" required>
            <br>
            <div class="botao_login_cadastrar">
            <button type="submit" id="login" class="btn btn-info">Entrar</button>
            </div>
            <br>
            <a href="cadastrar.php">Ainda não é inscrito? <strong>Cadastre-se</strong></a>
            </form>
        </div>
    </div>    
';
if(isset($_POST['email']))
{
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	
	if(!empty($email) && !empty($senha))
	{
		$u->conectar("reisdogesso","localhost","root","usbw");
		if($u->msgErro == "")
		{
			if($u->logar($email,$senha)){
				header("location: index.php");
			}else{
				echo '
				<div class="msg-erro">
					Email e/ou senha estão incorretos!
				</div> ';
			}
		}else{
			echo "Erro: ".$u->msgErro;
		}
	}else{
		echo '
		<div class="msg-erro">
			Preencha todos os campos!
		</div>';
	}
}

include "rodape.php";
?>