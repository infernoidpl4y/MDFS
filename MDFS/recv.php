<?php
  class MDFS_Scanner{
    function MDFS_tmpScanner($list){
      if($_GET){
        $CNT=($_GET);
        foreach($CNT as $c){
          foreach($list as $l){
            if(str_contains(strtolower($c), $l)) return "CI";
         }
        } 
      }if($_POST){
        $CNT=($_POST);
        foreach($CNT as $c){
          foreach($list as $l){
            if(str_contains(strtolower($c), $l)) return "CI";
         }
        }  
      }
      return "OK";
    }
    function MDFS_listLoad($file){
      $flist=fopen($file, "r");
      if(!$flist) return [];
      $fcnt=[];
      while($line=fgets($flist)!==false){
        $fcnt[]=trim($line);
      }
      fclose($flist);
      return $fcnt;
    }
  }
?>