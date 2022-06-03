<?php
  function decrement($n){
      if($n>0){
          print("$n\n");
          decrement($n-1);
      }
  }
  decrement(10);
?>