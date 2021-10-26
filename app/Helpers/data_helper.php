<?php

    function edad($fecha_nac) {
        $datetime1 = date_create();
        $datetime2 = date_create($fecha_nac);
        return date_diff($datetime1, $datetime2);
    }


