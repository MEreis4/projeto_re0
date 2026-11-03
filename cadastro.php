<?php 
include("conexao.php");
$erro = "";

if (isset($_POST['email']) || isset($_POST['senha'])){ // se existirem definições para email e senha, adentre o bloco de código
    if(strlen($_POST['email']) == 0){ // se o tamanho de email for igual a 0, mostre um aviso para preencher a senha.
        $erro = 'Preencha seu e-mail';
    } else if (strlen($_POST['senha']) == 0){ // idem
        $erro = 'Preencha sua senha';
    } else{ // se der tudo certo
        $email = $mysqli->real_escape_string($_POST['email']); // adiciona o email protegido de caracteres especiais a uma variável.
        $senha = $mysqli->real_escape_string($_POST['senha']); // idem

        $sql_code = "SELECT * FROM usuario WHERE email ='$email' AND senha='$senha'"; // salva o código que é enviado ao sql em uma variavel.
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL:" . $mysqli->error); // faz uma busca no bd usando o código definido na variavel acima.

        $quantidade = $sql_query->num_rows; // pega a quantidade de linhas adquiridas na busca

        if($quantidade == 1){ // se tiver uma só linha, o código continua. Isto é feito porque não se pode existir duas linhas (duas contas) com os mesmos email e senhas.
            $usuario = $sql_query->fetch_assoc(); // pega os dados da tabela dessa linha e transforma num array guardado na variavel 'usuarios'

            if(!isset($_SESSION)){ //se não houver sessão iniciada, inicia uma.
                session_start();
            }

            $_SESSION['id'] = $usuario['id']; // define que o id da sessão é o mesmo id do usuário que foi guardada no array criado acima
            $_SESSION['user'] = $usuario['email']; // idem
            $_SESSION['nome'] = $usuario['nome']; // idem
            
            header('Location: home.php'); // redireciona para a pagina 'painel.php'
        } else{ // caso o não tiver nenhuma ou mais de uma linha, retorna
            $erro = "Falha ao logar. E-mail ou senha incorretos.";
        }
    }
}

if (isset($_POST['cadastro-email']) || isset($_POST['cadastro-senha'])){
    try{
        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['cadastro-email']);
        $senha = $mysqli->real_escape_string($_POST['cadastro-senha']);

        $sql_code_insert = "INSERT INTO usuario (nome, email, senha) VALUES (':nome', ':email', ':senha')";
        $statement = $mysqli->prepare($sql_code_insert);

        $statement->execute([
            ':nome' => $nome,
            ':email' => $email,
            ':senha' => $senha
        ]);

        $sql_code_query = "SELECT * FROM usuario WHERE email ='$email' AND senha='$senha'"; // salva o código que é enviado ao sql em uma variavel.
        $sql_query = $mysqli->query($sql_code_query) or die("Falha na execução do código SQL:" . $mysqli->error); // faz uma busca no bd usando o código definido na variavel acima.

        $quantidade = $sql_query->num_rows; 

        if($quantidade == 1){ 
            $usuario = $sql_query->fetch_assoc(); 

            if(!isset($_SESSION)){ 
                session_start();
            }

            $_SESSION['id'] = $usuario['id']; 
            $_SESSION['user'] = $usuario['email']; 
            $_SESSION['nome'] = $usuario['nome']; 
            
            header('Location: home.php'); 
        } else{ 
            $erro = "Houve algum erro ao tentar logar.";
        }
    }
    catch(PDOException $e){
        $erro = "Erro ao cadastrar: " . $e->getMessage();
    }
}
?>