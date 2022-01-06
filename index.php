<?php
     $action     = isset($_GET['act']) ? $_GET['act'] : 'index';

     require_once "controller/controller.php";   
    
     $object = new controller(); 

     if (!method_exists($object, $action)) {
              
         die("Phương thức $action không tồn tại trong class controller"); 
    
        }
     $object->$action();
 
?>