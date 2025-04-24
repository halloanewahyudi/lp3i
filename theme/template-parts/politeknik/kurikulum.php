<?php
 $kurikulum= get_field('kurikulum_politeknik');
 $kurikulum_group = get_field_object('kurikulum_politeknik');
 if($kurikulum){
    echo $kurikulum; 
 }
 ?>