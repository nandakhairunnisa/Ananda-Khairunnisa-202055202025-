<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'nanda'
) or die(mysqli_erro($mysqli));

?>
