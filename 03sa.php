<?php
    function pokemon_defense($arrayname, $limit_number)
    
        {
            if($limit_number >= 78){
            echo "Pokemon name is $arrayname";
            echo '<br>';
            echo "Defense is $limit_number";
            } else {
                echo 'Defense is not equal or greater than limit_number';
            }

        }

    echo pokemon_defense("Charizard", 78)
?>