<?php

function __autoload($className) {

    $appPath = Autoload::getPath();

    Autoload::loadClass($appPath, $className);
}

class Autoload {
    /* Name of folders to ignore when "Autoloader PHP" is searching */
    private static $ignore = array('cgi-bin','Documentation');
    
    /* extension of your classes as '.class.php' or '.php' */
    private static $postfix = ".php";
    
    /* Your initial path to start search classes. 'NULL' value if you want search in the root (/) */
    private static $startpath = NULL;

    public static function getPath() {
        if (Autoload::$startpath != NULL) {
            return Autoload::$startpath;
        } else {
            return $_SERVER["DOCUMENT_ROOT"]; //Default Path
        }
    }

    public static function loadClass($path = '.', $className = "", &$found = false) {
        $dir = @opendir($path);

        while (false !== ( $file = @readdir($dir) ) && !$found) {
            // Check that this file is not to be ignored
            if (!in_array($file, Autoload::$ignore) && $file!='.' && $file!='..') {

                // Its a directory, so we need to keep reading down...
                if (is_dir("$path/$file")) {
                    Autoload::loadClass("$path/$file", $className, $found);
                } else {
                    //If it's a file, we compare with our needle
                    if ($className . Autoload::$postfix == $file) {
                        require_once("$path/$file");
                        $found = true;
                    }
                }
            }
        }

        closedir($dir);
    }

}

?>
