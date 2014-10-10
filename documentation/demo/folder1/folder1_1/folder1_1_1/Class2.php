<?php

class Class2 {

    private static $m_pInstance;


    public static function getInstance() {
        if (!self::$m_pInstance) {
            self::$m_pInstance = new Class2();
        }

        return self::$m_pInstance;
    }

    public function demo(){
        echo "Class 2 was loaded correctly!";
    }

}

?>
