<?php


$global="";
$glo="";

if(isset($_GET['my_data']))
{
	$data = $_GET['my_data'];
	$data=str_replace('var ', 'int ', $data);
	$data=str_replace('~', '+', $data);
    $number_of_int=(int)substr_count($data,'int');
    for($i=0;$i<$number_of_int;$i++)
    {

        $pos_int =strpos($data, "int");
        $loop_int = strpos($data, "(int");
        $pos_semi =strpos($data, ";");

        if($pos_int<$loop_int)
        {

            $glo=substr($data,$pos_int,$pos_semi-$pos_int+1);
            $global = $global.$glo;
            $data=str_replace($glo, '', $data);

        }
        else
        {

            $glo=substr($data,$pos_int,$pos_semi-$pos_int+1);
            $global = $global.$glo;
            $data=str_replace('int', '', $data);
    
        }


    }




    $handle=fopen('serial.txt','r');//i want to write  use for a to append
   	$ser = fgets($handle, 10);
    fclose($handle);
   	
    $file=fopen('my_json.php','w');
    fwrite($file,'{"ser":"');
    fwrite($file,$ser);
    fwrite($file,'","glo":"');
    fwrite($file,$global);
    fwrite($file,'","set":"');
    fwrite($file,'init();');
    fwrite($file,'","loop":"');
    fwrite($file,$data);
    fwrite($file,'"}');
    fclose($file);
    $handle=fopen('serial.txt','w');
    fwrite($handle,$ser+1);
    fclose($handle);
   
}



?>