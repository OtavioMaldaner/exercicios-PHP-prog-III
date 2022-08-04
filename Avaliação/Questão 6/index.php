<?php
    echo '<select>';
    for($n = 0; $n <= 100; $n ++) {
        if ($n % 10 == 0) {
            echo '<option>'.$n.'%</option>';
        }
    }
    echo '</select>';
?>