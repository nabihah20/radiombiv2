<?php
   $handle = fopen("counter.txt", "r");
      if(!$handle){
       echo "could not open the file";
      }
      else {
         $counter=(int )fread($handle,20);
         fclose($handle);
		 $counter++;
         echo" Laman ini telah dilawati sebanyak ". $counter  . " kali sejak 13 Mac 2019 " ;
         $handle= fopen("counter.txt", "w" ) ;
         fwrite($handle,$counter) ;
         fclose ($handle) ;
      }
?>
