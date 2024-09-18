<?php
if (filter_input(INPUT_POST, 'btnsalvar')) {//verifica se botão foi pressionado
    //capturam dados do form POST através do name 
    $nome = filter_input(INPUT_POST, 'txtNome');
    $telefone = filter_input(INPUT_POST, 'txtelefone');
    $email = filter_input(INPUT_POST, 'txtEmail');
    $cidade = filter_input(INPUT_POST, 'txtCidade');
    $descricao = filter_input(INPUT_POST, 'txtDescricao');

    //monta um array, formato json para que os dados sejam inseridos no firebase
    $dados = array(
        'nome' => $nome,
        'telefone' => $telefone,
        'email' => $email,
        'cidade' => $cidade,
        'descricao' => $descricao
    );

    //comunicação com a classe
    include_once '../class/Cadastro.php';
    $cad = new Cadastro();

    $cad->setDados(json_encode($dados));

    $msg = $cad->salvar() === true ? 'Erro' : 'Salvo com sucesso';

    echo '<div class="alert alert-primary mt-3" role="alert">'
    . $msg
    . '</div>';
}