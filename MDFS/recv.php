<?php
  class MDFS{
    function MDFS_Scanner($list){
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
      while(($line=fgets($flist))!==false){
        $fcnt[]=strtolower(trim($line));
      }
      fclose($flist);
      return $fcnt;
    }
    function MDFS_UpdateLists($path){
      $lists=[
        "basic"=>"https://raw.githubusercontent.com/infernoidpl4y/MDFS/refs/heads/main/MDFS/BCL/MDFS_basic_list.txt",
        "advanced"=>"https://raw.githubusercontent.com/infernoidpl4y/MDFS/refs/heads/main/MDFS/BCL/MDFS_advanced_list.txt",
        "all"=>"https://raw.githubusercontent.com/infernoidpl4y/MDFS/refs/heads/main/MDFS/BCL/MDFS_all_list.txt"
      ];

      foreach($lists as $name=>$url){
        $content=$file_get_contents($url);
        if($content){
          file_put_contents("$path/MDFS_{$name}_list.txt", $content);
        }
      }
    }
  }
?>