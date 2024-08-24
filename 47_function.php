<?php
    function countries(){
        echo 'count countries is '. func_num_args();
        echo '<br>this is my countrie '. func_get_arg(0);
        foreach (func_get_args() as $i => $test){
            echo "<br>Ranking $i ". func_get_arg($i) ;
        }
    }
    countries('Egypt', 'USA', 'Elsodia', 'Torcia');
?>