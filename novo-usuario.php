<h1>Novo Usuário</h1>
    <form action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="mb-3">
            <labe>Nome</labe>
            <input type="text" name="nome" class="form-control">
        </div>
        <div class="mb-3">
            <labe>E-mail</labe>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="mb-3">
            <labe>DatadeNascimento</labe>
            <input type="date" name="data_nasc" class="form-control">
        </div>
        <div class="mb-3">
            <labe>CPF</labe>
            <input type="text" name="cpf" class="form-control">
        </div>
        <div class="mb-3">
            <labe>Telefone</labe>
            <input type="text" name="telefone" class="form-control">
        </div>
        <div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
    </form>