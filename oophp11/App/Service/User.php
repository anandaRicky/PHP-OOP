<?php namespace App\Service;
    // harus pake backslash (\) bukan slash (/)
    class User 
    {
        public function __construct()
        {
            echo "ini adalah class " . __CLASS__;
        }
    }
?>