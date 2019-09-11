<?php
function conecta_mysql($servidor, $usuario, $senha, $db){
	$link = new mysqli($servidor, $usuario, $senha, $db);
	if($link->connect_errno) {
		echo "Failed to connect to MySQL: (" . $link->connect_errno . ") " . $link->connect_error;
		exit(0);
	}
	else{
		return $link;
	}
	return NULL;
}

function procura_mysql($link, $campo, $tabela, $login){
	$resposta = NULL;
	if (mysqli_real_query($link, "SELECT $campo FROM $tabela WHERE login = '$login'")){
		if ($result = mysqli_store_result($link)) {
			while ($row = mysqli_fetch_row($result)) {
				foreach($row as $key => $valor){
					$resposta = intval($valor);
				}
			}
			mysqli_free_result($result);
		}
	}
	return $resposta;
}
function contaTabela($link,$tabela){
  if (mysqli_real_query($link, "SELECT COUNT(*) from $tabela")){
    if ($result = mysqli_store_result($link)) {
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);
    }
  }
  return $row[0];
}

function mostraColunas($link,$tabela){
if (mysqli_real_query($link, "Show columns from $tabela")){
    if ($result = mysqli_store_result($link)) {
      echo "<tr>";
      while ($row = mysqli_fetch_row($result)) {
	  echo "<th class='indigo'>".$row[0]."</th>";
      }
      echo "</tr>\n";
    mysqli_free_result($result);
    }
  }
}

function mostraTabela($link,$tabela){
if (mysqli_real_query($link, "SELECT * from $tabela")){
    if ($result = mysqli_store_result($link)) {
      while ($row = mysqli_fetch_row($result)) {
	echo "<tr>";
	foreach($row as $key => $valor){
	  echo "<td class='indigo'>".$valor."</td>";
	}
	echo "</tr>\n";
      }
    mysqli_free_result($result);
    }
  }
}

function in_db($link, $user){
  mysqli_real_query($link,"SELECT login FROM usuarios WHERE login='$user'");
  $result = mysqli_store_result($link);
  $row = mysqli_fetch_row($result);
  return !empty($row);
}

function del_user_db($link, $user){
  if(!mysqli_real_query($link,"DELETE from usuarios WHERE login='$user'")){
    echo $link->error."<br>\n";
    echo $link->errno."<br>\n";
  }
  else{
    echo "<meta http-equiv='refresh' content='0'>\n";
  }
}
function TabelaUsuarios($link,$tabela){
	echo "<table class='usuarios'>\n";
	mostraColunas($link,$tabela);
	mostraTabela($link,$tabela);
	echo "<table>\n";
	mysqli_close($link);
}

?>
