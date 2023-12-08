<?php
    //Arquivo para salvar as mensagens do formulário de fale conosco no banco de dados.

    //include_once: chamando o arquivo de conexão com o banco de dados do 000webhost.
    include_once('conexao.php');
    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (empty($dados['nome'])) {
        $retorna = ['status' => false, 'msg' => "Erro! Preencha todos os campos!"];
    } elseif (empty($dados['email'])) {
        $retorna = ['status' => false, 'msg' => "Erro! Preencha todos os campos!"];
    } elseif (empty($dados['assunto'])) {
        $retorna = ['status' => false, 'msg' => "Erro! Preencha todos os campos!"];
    } elseif (empty($dados['mensagem'])) {
        $retorna = ['status' => false, 'msg' => "Erro! Preencha todos os campos!"];
    }
    else{
        $query_usuario = "INSERT INTO mensagens_contatos (nome, email, assunto, mensagem) VALUES (:nome, :email, :assunto, :mensagem)";
        $msg_usuario = $conn->prepare($query_usuario);
        $msg_usuario->bindParam(':nome', $dados['nome']);
        $msg_usuario->bindParam(':email', $dados['email']);
        $msg_usuario->bindParam(':assunto', $dados['assunto']);
        $msg_usuario->bindParam(':mensagem', $dados['mensagem']);
        $resultado = $msg_usuario->execute();

        if ($resultado) {
            $retorna = ['status' => true, 'msg' => "Mensagem enviada com sucesso!"];
        }else{
            $retorna = ['status' => false, 'msg' => "Erro! Mensagem não enviada!"];
        }
        
    }
    echo json_encode($retorna);
?>
