<?php
class myload {

  public $db1;
  
  

  public  function load($fcont){
        
        preg_match_all('/{{\w+_\w+}}/',$fcont,$m );
        $x=$m[0];
        $y=[];
        $y[0]="{{";
        $y[1]="}}";
        foreach($x as $k => $v){
            $v= str_replace($y,'',$v);
            extract($_POST);
            include 'sql_inc/'.$v.'.php';
            //echo $sql."\n";
            $res = $this->db1->query($sql);
            //var_dump($res);
            if ($res ===false){
                printf("Invalid query: %s\nWhole query: %s\n", $this->db1->error, $sql);
                exit();
            }
            $snipt=file_get_contents('ht_inc/'.$v.'.inc');
            $contents='';
            $v= trim($v);
            while ($myrow = $res->fetch_array(MYSQLI_ASSOC))
            {
                //var_dump($myrow);
                $keys= array_keys($myrow);
                $filled=str_replace($keys,$myrow,$snipt);
                //echo $filled;
                $contents .=$filled;
            }
            //echo '{{'.$v.'}}' . '    ' . $contents;
            $fcont = str_replace('{{'.$v.'}}' ,$contents,$fcont);
            //echo $fcont . "\n";
        }
        $fcont=$this->from_post($fcont);
        echo $fcont . "\n";
    }

    function from_post($pcont){
        preg_match_all('/from_post{{\w+/',$pcont,$m );
        $x=$m[0];
        $y='from_post{{';
        foreach($x as $k => $v){
            $v= str_replace($y,'',$v);
            $pcont = str_replace('from_post{{'.$v ,$_POST[$v],$pcont);
        }
        return $pcont;
    }

}


?>