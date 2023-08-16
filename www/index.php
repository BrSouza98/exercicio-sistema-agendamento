<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Hello, world!</h1>

    <form action="server.php" method="get" class="container">
        <label for="nome" class="form-label">Nome: </label>
        <input type="text" name="nome" id="nome" class="form-control">

        <br>

        <label for="email" class="form-label">Email: </label>
        <input type="email" name="email" id="email" class="form-control">

        <br>

        <label for="senha" class="form-label">Senha: </label>
        <input type="password" name="senha" id="senha" class="form-control">

        <br>

        <label for="nascimento" class="form-label">Data de Nascimento: </label>
        <input type="date" name="nascimento" id="nascimento" class="form-control">

        <br>
        <!-- Campo SEXO -->
        <label for="sexo" class="form-label">Sexo: </label>
        <select name="sexo" id="sexo" class="form-select">
            <option value="">Selecione uma opção</option>
            <option value="feminino"> Feminino </option>
            <option value="naoBi"> Não-Binário </option>
            <option value="masculino"> Masculino </option>
        </select>
        <!-- fim Campo SEXO -->
        <br>

        <!-- BOTOES -->
        <button type="submit" class="btn btn-primary m-2">Enviar</button>
        <button type="reset" class="btn btn-outline-danger  ">Limpar</button>
        <!-- FIM BOTOES -->
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>