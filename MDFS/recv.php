<?php
  if($_GET){
    $getCNT=json_encode($_GET);
    $fTMP=fopen("MDFS/TMP/tmp.json","w");
    fwrite($fTMP, $getCNT);
    fclose($fTMP);
  }if($_POST){
    $postCNT=json_encode($_POST);
    $fTMP=fopen("MDFS/TMP/tmp.json","w");
    fwrite($fTMP, $postCNT);
    fclose($fTMP);
  }
  class MDFS_Scanner{
    function MDFS_tmpScanner($list){
      $tmpfile=fopen("MDFS/TMP/tmp.json", 'r');
      $cntTF=fread($tmpfile, 1024);
      fclose($tmpfile);
      $CNT=json_decode($cntTF);
      foreach($CNT as $c){
        foreach($list as $l){
          if(str_contains($c, $l)) return "CI";
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