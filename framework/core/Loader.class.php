<?php

class Loader
{
    // Load library classes
    public function library($lib)
    {
        include LIB_PATH . "$lib.class.php";
    }

    // Loader helper functions. Naming convention is xxx_helper.php;
    public function helper($helper)
    {
        include HELPER_PATH . "{$helper}_helper.php";
    }

}


?>