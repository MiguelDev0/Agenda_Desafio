<?php 
    switch($_REQUEST["acao"]) 
    {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $data_nasc = $_POST["data_nasc"];
            $cpf = $_POST["cpf"];
            $telefone = $_POST["telefone"];

            $sql = "INSERT INTO dados_cliente (nome, email, datanascimento, cpf, telefone) VALUES ('{$nome}', '{$email}', '{$data_nasc}', '{$cpf}', '{$telefone}')";

            $res = $conn->query($sql);

            if($res){
                print "<script>alert('Cadastro com sucesso');</script>";  
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Não foi possivel realizar o cadastro');</script>";  
                print "<script>location.href='?page=listar';</script>";
            }
            break;
            case 'editar':
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $data_nasc = $_POST["data_nasc"];
                $cpf = $_POST["cpf"];
                $telefone = $_POST["telefone"];

                $sql = "UPDATE dados_cliente SET nome='{$nome}', email='{$email}', datanascimento = '{$data_nasc}', cpf = '{$cpf}', telefone = '{$telefone}' WHERE id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res){
                    print "<script>alert('Editado com sucesso');</script>";  
                    print "<script>location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('Não foi possivel editar);</script>";  
                    print "<script>location.href='?page=listar';</script>";
                }
                break;
            case 'excluir':

                $sql = "DELETE FROM dados_cliente WHERE id=".$_REQUEST["id"];

                $res = $conn->query($sql);
                
                if($res){
                    print "<script>alert('Excluído com sucesso');</script>";  
                    print "<script>location.href='?page=listar';</script>";
                }else{
                    print "<script>alert('Não foi possivel excluir);</script>";  
                    print "<script>location.href='?page=listar';</script>";
                }
                break;
    }
            ?>
