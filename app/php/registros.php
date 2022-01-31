<?php include 'inclusoes/conta.php'; ?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>RAISS</title>
    <link href="../css/registro.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <header class="header">
        <h3 class="logo">CONTROLE DE USUARIOS</h3>
        <nav class="navbar">
          <span>
            <?php echo "Logado como $logado"; ?>
          </span>
          <br>
          <a href="controle.php">VOLTAR</a>
          &bull;
          <a href="inclusoes/logoff.php">SAIR</a>
        </nav>
      </header>

      <section class="section">
        <h3 class="title">USUÁRIOS REGISTRADOS</h3>
        <?php TabelaUsuarios($link, $tabela); ?>
      </section>

      <section class="section">
        <h3 class="title">ADICIONAR URUÁRIO</h3>
        <form class="form" action="<?php echo $self; ?>" method="post">
          <div class="add-row">
            <label>Login:</label>
            <input type="text" name="login_a"><?php echo $login_err; ?>
          </div>
          <div class="add-row">
            <label >Senha:</label>
            <input type="password" name="senha"><?php echo $senha_err; ?>
          </div>
          <div class="add-row">
            <label>Confirmação:</label>
            <input type="password" name="confirm"><?php echo $confirm_err; ?>
          </div>
          <button type="submit">Adicionar</button>
        </form>
      </section>

      <section class="section">
        <h3 class="title">REMOVER USUÁRIOS</h3>
        <form class="form" action="<?php echo $self; ?>" method="post">
          <div class="remove-row">
            <label>Login do Usuario:</label>
            <input ype="text" name="login_d"><?php echo $login_derr; ?>
          </div>
          <button type="submit">Remover</button>
        </form>
      </section>

      <section class="section">
        <h3 class="title">CONFIGURAÇOES DE USUÁRIO</h3>
        <form class="form" action="<?php echo $self; ?>" method="post">
          <label for="edit">Login do Usuario:</label>
          <input id="edit" type="text" name="login">
          <div class="edit-row">
            <label>Tipo de Usuario:</label>
            <span>
              <input id="comum" type="radio" name="nivel" value="1" checked>
              <label for="comum">Usuario Comum</label>
            </span>
            <span>
              <input id="adm" type="radio" name="nivel" value="2">
              <label for="adm">Admnistrador</label>
            </span>
          </div>
          <div class="edit-row">
            <label>Status:</label>
            <span>
              <input id="ativo" type="radio" name="ativa" value="1" checked>
              <label for="ativo">Ativo</label>
            </span>
            <span>
              <input id="inativo" type="radio" name="ativa" value="0">
              <label for="inativo">Inativo</label>
            </span>
          </div>
          <button type="submit">Alterar</button>
        </form>
      </section>

      <footer class="header">
        <span>&copy;2016 - RAISS</span>
        <nav class="navbar">
          <span>
            <?php echo "Logado como $logado"; ?>
          </span>
          <br>
          <a href="controle.php">VOLTAR</a>
          &bull;
          <a href="inclusoes/logoff.php">SAIR</a>
        </nav>
      </footer>
    </div>
  </body>
</html>