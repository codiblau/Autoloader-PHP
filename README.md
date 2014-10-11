Autoloader-PHP
==============

Autoload your classes in PHP without includes nor requires!

Just follow the instructions written in documentation/help/index.html and you will be able to work with your classes in php
without require nor include them.



<h2>A little brief of how to use</h2>

First of all, you need install and configure the file autoload.php. See Installation section and Configuration section.

Then, you need to configure your classes. Your files name's need to be EQUAL as class name, this means that if you have a class called "Class1" you must to rename its file to "Class1.php".

Finally, just include autoload.php like require_once('PATH_TO_AUTOLOAD/autoload.php'). If you have a "template" and you put the "require_once" in it, you can call all your classes only instantiating them! You can see an example in the Example section.



Much more help in <strong>documentation/help/index.html!</strong>
