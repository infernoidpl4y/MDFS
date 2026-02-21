<?php
  #Example how use MDFS
  include("MDFS/recv.php");
  $ip_c=$_SERVER["REMOTE_ADDR"];
  $a=["1",2,"3"];
  if(MDFS_tmpScanner(MDFS_listLoad(0,"basic"))=="CI"){
    echo "<span style='color: red'> [*]Block IP: $ip_c </span><br>";
  }else{
  echo "<span style='color: green'> [+]All OK</span><br>";
  }echo "<span style='color: blue'>End Debug</span>";
?>