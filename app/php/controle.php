<?php include "inclusoes/check.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>RAISS</title>
  <link href="../css/controle.css" rel="stylesheet" type="text/css">
</head>

<body>
  <header>
    <h3 class="logo">INTERFACE PARA CONTROLE DO BRAÇO ROBÓTICO</h3>
    <nav>
      <ul>
        <li>
          <?php echo "LOGADO COMO $logado"; ?>
        </li>
        <li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </li>
        <li>
          <a href="registros.php">GERENCIAR USUÁRIOS</a>
        </li>
        <li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </li>
        <li>
          <a href="inclusoes/logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>
  </header>

  <section class="hero">
    <h2 class="hero_header">
      <table>
        <tr bgcolor="#52bad5">
          <td width="33%">
            <table>
              <tr>
                <td width="50%">
                  <a href="comandos/reseta.php" target="_blank">
                    <div class="link">RESET</div>
                  </a>
                </td>
                <td width="50%">
                  <a href="comandos/avanco-1.php" target="_blank">
                    <div class="link">Avanço 50º</div>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="comandos/garra-1.php" target="_blank">
                    <div class="link">Garra Aberta</div>
                  </a>
                </td>
                <td>
                  <a href="comandos/avanco-2.php" target="_blank">
                    <div class="link">Avanço 100º</div>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="comandos/garra-2.php" target="_blank">
                    <div class="link">Semi Aberta</div>
                  </a>
                </td>
                <td>
                  <a href="comandos/avanco-3.php" target="_blank">
                    <div class="link">Avanço 150º</div>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="comandos/garra-3.php" target="_blank">
                    <div class="link">Garra Fechada</div>
                  </a>
                </td>
                <td>
                  <a href="comandos/avanco-4.php" target="_blank">
                    <div class="link">Avanço 200º</div>
                  </a>
                </td>
              </tr>
            </table>
          </td>
          <td width="28.5%">
            <iframe src="http://192.168.0.100:8080/browserfs.html"></iframe>
          </td>
          <td width="33%">
            <table>
              <tr>
                <td width="50%">
                  <a href="comandos/mergulho-1.php" target="_blank">
                    <div class="link2">Mergulho 0º</div>
                  </a>
                </td>
                <td width="50%">
                  <a href="comandos/base-1.php" target="_blank">
                    <div class="link2">Base 0º</div>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="comandos/mergulho-2.php" target="_blank">
                    <div class="link2">Mergulho 25º</div>
                  </a>
                </td>
                <td>
                  <a href="comandos/base-2.php" target="_blank">
                    <div class="link2">Base 45º</div>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="comandos/mergulho-3.php" target="_blank">
                    <div class="link2">Mergulho 50º</div>
                  </a>
                </td>
                <td>
                  <a href="comandos/base-3.php" target="_blank">
                    <div class="link2">Base 90º</div>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="comandos/mergulho-4.php" target="_blank">
                    <div class="link2">Mergulho 75ª</div>
                  </a>
                </td>
                <td>
                  <a href="comandos/base-4.php" target="_blank">
                    <div class="link2">Base 135º</div>
                  </a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="comandos/mergulho-5.php" target="_blank">
                    <div class="link2">Mergulho 100º</div>
                  </a>
                </td>
                <td>
                  <a href="comandos/base-5.php" target="_blank">
                    <div class="link2">Base 180º</div>
                  </a>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </h2>
  </section>
  <div class="galeria">
    <div class="thumbnail">
      <h3>GARRA</h3>
    </div>
    <div class="thumbnail">
      <h3>AVANÇO</h3>
    </div>
    <div class="thumbnail">
      <h3>MERGULHO</h3>
    </div>
    <div class="thumbnail">
      <h3>BASE</h3>
    </div>
  </div>
  <div class="gallery">
    <div class="thumbnail"><img width="280px" height="195px" src="../img/garra.png"></div>
    <div class="thumbnail"><img width="280px" height="195px" src="../img/avanco.png"></div>
    <div class="thumbnail"><img width="280px" height="195px" src="../img/mergulho.png"></div>
    <div class="thumbnail"><img width="280px" height="195px" src="../img/base.png"></div>
  </div>

  <footer>
    <h3 class="logo">INTERFACE PPARA CONTROLE DO BRAÇO ROBÓTICO</h3>
    <nav>
      <ul>
        <li>
          <?php echo "Logado como $logado"; ?>
        </li>
        <li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </li>
        <li>
          <a href="registros.php">GERENCIAR USUÁRIOS</a>
        </li>
        <li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </li>
        <li>
          <a href="inclusoes/logoff.php">SAIR</a>
        </li>
      </ul>
    </nav>
  </footer>
</body>

</html>