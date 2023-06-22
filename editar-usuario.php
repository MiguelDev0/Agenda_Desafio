<h1>Editar Usuário</h1>
    <?php 
        $sql = "SELECT * FROM dados_cliente WHERE id=".$_REQUEST["id"];
        $res = $conn->query($sql);
        $row = $res->fetch_object();
    ?>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="editar">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">
        <div class="mb-3">
            <labe>Nome</labe>
            <input type="text" name="nome" value="<?php print $row->nome;?>" class="form-control">
        </div>
        <div class="mb-3">
            <labe>E-mail</labe>
            <input type="text" name="email" value="<?php print $row->email;?>"class="form-control">
        </div>
        <div class="mb-3">
            <labe>DatadeNascimento</labe>
            <input type="date" name="data_nasc" value="<?php print $row->datanascimento;?>" class="form-control">
        </div>
        <div class="mb-3">
            <labe>CPF</labe>
            <input type="text" name="cpf" value="<?php print $row->cpf;?>" class="form-control">
        </div>
        <div class="mb-3">
            <labe>Telefone</labe>
            <input type="text" name="telefone" value="<?php print $row->telefone;?>" class="form-control">
        </div>
        <div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>