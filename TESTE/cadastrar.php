<?php

require_once "classes/usuario.php";
$u = new Usuario;

include "cabecalho.php";
echo'
    <div class="card" id="telaCadastrar">
        <div class="card-body" id="form_cadastro">
            <form method="post">
                <div class="text-center">
                    <img id="img_cadastrar" class="mb-4 mx-auto" src="img/Reis do Gesso.png" alt="Logo Reis do Gesso" width="72" height="72">
                </div>
                <h1 class="h3 mb-3 text-center">Cadastrar</h1>
                <br>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome e sobrenome" required autofocus>
                
                <input type="number" id="telefone" name="telefone" class="form-control" placeholder=" DDD + numero" required autofocus>
                
                <input type="email" id="email" name="email" class="form-control" placeholder="Email" maxlenght="11" required autofocus>

                <input type="password" id="senha" name="senha" maxlength="15" class="form-control" placeholder="senha" required>
                <br>
                <div class="botao_login_cadastrar">
                <button type="submit" id="cadastrar" class="btn btn-info">Cadastrar</button>
                </div>
                <br>
            </form>
        </div>
    </div>';

if(isset($_POST['nome'])){
    $nome = addslashes($_POST['nome']); // addslashes é para impedir a injeção de comandos para danificar o sistema
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    //Verificar se todos os campos estão preenchidos
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha)){
        $u->conectar("reisdogesso","localhost","root","usbw");
            if($u->msgErro == ""){ //se esta tudo ok
                if($u->cadastrar($nome,$telefone,$email,$senha)){
                    echo "Cadastrado(a) com sucesso! Acesse para entrar";
                }else{
                    echo "Email ja cadastrado!";
                }
                
            }else{
                echo "Erro: ".$u->msgErro;
            }
    }else{
        echo "Preencha todos os campos!";
    }
}

include "rodape.php";
?>