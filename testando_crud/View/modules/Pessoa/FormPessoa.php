<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>

        <form method="post" action="/pessoa/form/save">
            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label>Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label>CPF:</label>
            <input id="cpf" name="cpf" value="<?= $model->cpf ?>" type="number" />

            <label>Data Nascimento:</label>
            <input id="data_nascimento" value="<?= $model->data_nascimento ?>" name="data_nascimento" type="date" />

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>
</html>