<?php
    require_once 'model/model.php';
    class controller{
        function index(){
            $model = new model;
            $gvs = $model->getInfo();
            require_once('view/index.php');
        }

        function details(){
            $model = new model;
            $id= $_GET['id'];
            $gv= $model -> getInfoGV($magv);
            if($gv)
                    header("location:index.php");
            else    
                    header("location: error.php");
        }
        function add(){
             require_once('view/add.php');
             if(isset($_POST['txthovaten'])){
                $hovaten=$_POST['txthovaten'];
                $ngaysinh=$_POST['txtngaysinh'];
                $gioitinh=$_POST['txtgioitinh'];
                $trinhdo=$_POST['txttrinhdo'];
                $chuyenmon=$_POST['txtchuyenmon'];
                $hocham=$_POST['txthocham'];
                $hocvi=$_POST['txthocvi'];
                $coquan=$_POST['txtcoquan'];
                $model = new model;
                $result = $model->addGV( $hovaten,$ngaysinh, $gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan);
                if($result)
                    header("location:index.php");
                else    
                    header("location:error.php");

             }

        }

        function update(){
            $model = new model;
            $id=$_GET['id'];
            $gv=$model->getInfoGV($id);
            require_once('view/update.php');
            if(isset($_POST['txthovaten'])){
                $hovaten=$_POST['txthovaten'];
                $ngaysinh=$_POST['txtngaysinh'];
                $gioitinh=$_POST['txtgioitinh'];
                $trinhdo=$_POST['txttrinhdo'];
                $chuyenmon=$_POST['txtchuyenmon'];
                $hocham=$_POST['txthocham'];
                $hocvi=$_POST['txthocvi'];
                $coquan=$_POST['txtcoquan'];
                $result = $model->updateGV( $hovaten,$ngaysinh, $gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan);
                if($result)
                    header("location:index.php");
                else    
                    header("location:error.php");



            }



        }


        function delete(){
            $model = new model;
            $id=$_GET['id'];
            $result=$model->dltGV($id);
            if($result)
                header("location:index.php");
            else
                header("location:error.php");
        }

        


    }
    


?>