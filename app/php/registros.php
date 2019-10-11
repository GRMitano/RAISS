<?php include 'inclusoes/conta.php'; ?>

<!DOCTYPE html>
<html>

<head>
  <title>RAISS</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link href="../css/registro.css" rel="stylesheet" type="text/css">
</head>

<div class="caixa">

  <body>
    <header>
      <h3 class="logo">CONTROLE DE USUARIOS</h3>
      <nav>
        <ul>
          <li>
            <?php echo "Logado como $logado"; ?>
          </li>
          <li>&nbsp;&nbsp;&bull;&nbsp;&nbsp;</li>
          <li>
            <a href="controle.php">VOLTAR</a>
          </li>
          <li>&nbsp;&nbsp;&bull;&nbsp;&nbsp;</li>
          <li>
            <a href="inclusoes/logoff.php">SAIR</a>
          </li>
        </ul>
      </nav>
    </header>

    <div class="parte">
      <h2>Usuarios Registrados</h2>
      <?php TabelaUsuarios($link, $tabela); ?>
    </div>
    <div class="parte">
      <h2>Adiciona Usuario</h2>
      <form action="<?php echo $self; ?>" method="post">
        <table>
          <tr>
            <td class="tabela1">Login:&nbsp;</td>
            <td class="tabela2"><input type="text" name="login_a"><?php echo $login_err; ?></td>
          </tr>
          <tr>
            <td class="tabela1">Senha:&nbsp;</td>
            <td class="tabela2"><input type="password" name="senha"><?php echo $senha_err; ?></td>
            <td><input type="submit" value="Adicionar"></td>
          </tr>
          <tr>
            <td class="tabela1">Confirmação da Senha:&nbsp;</td>
            <td class="tabela2"><input type="password" name="confirm"><?php echo $confirm_err; ?></td>
          </tr>
        </table>
      </form>
    </div>
    <div class="parte">
      <h2>Remover usuario</h2>
      <form action="<?php echo $self; ?>" method="post">
        <table>
          <tr>
            <td>Usuario a Ser Removido:&nbsp;</td>
            <td><input class="navy-tema" type="text" name="login_d"><?php echo $login_derr; ?></td>
            <td><input type="submit" value="Remover"></td>
          </tr>
        </table>
      </form>
    </div>
    <div class="parte">
      <h2>Configurações de Usuarios</h2>
      <form action="<?php echo $self; ?>" method="post">
        <table>
          <tr>
            <td class="tabela1">Informe o Login do Usuario:&nbsp;</td>
            <td class="tabela2"><input type="text" name="login"></td>
            <td><input type="submit" value="Alterar"></td>
          </tr>
        </table>
        <table>
          <tr>
            <td>
              <table class="tabela1">
                <tr>
                  <td>Tipo de Usuario:&nbsp;</td>
                </tr>
                <tr>
                  <td>Ação:&nbsp;</td>
                </tr>
              </table>
            </td>
            <td>
              <table class="tabela2">
                <tr>
                  <td>
                    <input type="radio" name="nivel" value="1" checked>
                    <span>Usuario Comum &nbsp;</span>
                  </td>
                  <td>
                    <input type="radio" name="nivel" value="2">
                    <span>Usuario Admnistrador</span>
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" name="ativa" value="1" checked>
                    <span>Ativar</span>
                  </td>
                  <td>
                    <input type="radio" name="ativa" value="0">
                    <span>Desativar</span>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </form>
    </div>

    <footer>
      <h3 class="logo">CONTROLE DE USUARIOS</h3>
      <nav>
        <ul>
          <li>
            <?php echo "Logado como $logado"; ?>
          </li>
          <li>&nbsp;&nbsp;&bull;&nbsp;&nbsp;</li>
          <li>
            <a href="controle.php">VOLTAR</a>
          </li>
          <li>&nbsp;&nbsp;&bull;&nbsp;&nbsp;</li>
          <li>
            <a href="inclusoes/logoff.php">SAIR</a>
          </li>
        </ul>
      </nav>
    </footer>
  </body>
  
</div>

</html>