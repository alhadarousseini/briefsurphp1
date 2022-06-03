<?php
  $table=[];
  for($i=0; $i<10; $i++)
  {
$table[]=rand(0,45);
  }
  if(in_array(42,$table)){
      echo"42 est dans le tableau";
  }
  else {
      echo"42 n'est pas dans le tableau";
  }

  var_dump($table);
?>