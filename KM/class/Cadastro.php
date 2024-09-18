<?php

class Cadastro {
    //contém o endereço do bd
    private $url = 'https://testepw-8b0c8-default-rtdb.firebaseio.com/';
    
    //recebe os dados do form
    private $dados;
    
    //get e set permitem acesso ao atributo
    public function getDados() {
        return $this->dados;
    }

    public function setDados($dados): void {
        $this->dados = $dados;
    }  
    
    public function salvar() {
        //inicializa o caminho da tabela
        $caminho = curl_init($this->url . 'categoria.json');
        
        //configurar como será enviado e o que será enviado
        curl_setopt($caminho, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($caminho, CURLOPT_POSTFIELDS, $this->dados);
        curl_setopt($caminho, CURLOPT_RETURNTRANSFER, true);
        
        //envio dos dados
        $resposta = curl_exec($caminho);
        curl_close($caminho);
        
        return $resposta; 
    }
}

