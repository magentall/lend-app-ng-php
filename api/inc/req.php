<?php

function req($query){
  $conn = new mysqli("localhost", "magentall", "Bienvenue111***", "ctdje");
  $conn->set_charset("utf8");
  $result = $conn->query($query);
  $conn->close();
  return $result;
}

?>
