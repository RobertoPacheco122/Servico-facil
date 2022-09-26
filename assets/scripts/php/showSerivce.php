<?php
    function showServices($services) {
        for ($i = 0; $i < count($services); $i++) {
            echo "<option value='$i'>".$services[$i]->getServico()."</option>";
        }
    }
?>