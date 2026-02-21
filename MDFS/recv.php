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
    function MDFS_listLoad($op, $file){
      if($op!=0){
        $flist=fopen($file, "r");
        $fw=fread($flist,1024);
        while(false!==$line=fgets($fw)){
          $fcnt[]=$line;
        }
        fclose($flist);
        return $fcnt;
      }
      $flist=fopen($file, "r");
      $fw=fread($flist,1024);
      while(false!==$line=fgets($fw)){
        $fcnt[]=$line;
      }
      fclose($flist);
      return $fcnt;
    }
  }
  #Necesito borrar archivos tmp. Terminar lode la lista
?>