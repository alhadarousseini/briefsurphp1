<?php
  if(!empty($_SERVER['HTTPS']))
  {
      echo 'https est utilisé';
  }
  else
  {
      echo'http est utilisé';
  }
?>