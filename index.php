<?php
  #Example how use MDFS
  include("MDFS/recv.php");
  $MDFS= new MDFS_Scanner();
  $ip_c=$_SERVER["REMOTE_ADDR"];
  $a=["1",2,"3"];
  if($MDFS->MDFS_tmpScanner($a)=="CI"){
    echo "<span style='color: red'> [*]Block IP: $ip_c </span><br>";
  }else{
  echo "<span style='color: green'> [+]All OK</span><br>";
  }echo "<span style='color: blue'>End Debug</span>";
?>