<?php
  #Example how use MDFS
  include("MDFS/mdfs.php");
  $MDFS= new MDFS();
  #Update Example
  if(date("w")==1){
    $MDFS->MDFS_UpdateLists("MDFS/BCL");
  }
  $ip_c=$_SERVER["REMOTE_ADDR"];
  $a=["1",2,"3","<script>"];
  if($MDFS->MDFS_Scanner($MDFS->MDFS_listLoad("MDFS/BCL/MDFS_basic_list.txt"))=="CI"){
    echo "<span style='color: red'> [*]Block IP: $ip_c </span><br>";
  }else{
  echo "<span style='color: green'> [+]All OK</span><br>";
  }echo "<span style='color: blue'>End Debug</span>";
?>