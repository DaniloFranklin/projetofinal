<?php
    require_once 'crud.php';
    # inicia a sessão no arquivo


        if($_GET) {

        $id = $_GET['id'];


        if(buscarId($id)) {
            // cria a sessão e define valor a ela
            $_SESSION['id'] = buscarId($id);
            
            header("location:product.php");
            exit;
        } else {
            $_SESSION['msg'] = false;
        }
        #$_SESSION['msg'] = salvar($nome, $numero) ? 'Salvo com sucesso' : 'Erro ao gravar';

        # função responsavel por redirecionar a página
        header("location:index.php");
        exit;
    }
