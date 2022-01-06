<?php
    require_once ('config/db.php');
    class model{
        private $gv_id, $gv_name, $gv_ngaysinh, $gv_gioitinh, $gv_trinhdo, $gv_chuyenmon, $gv_hocham, $gv_hocvi, $gv_coquan;
        
        public function connectDB(){
            $connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if(!$connection){
                die("ket noi that baij:".mysqli_connect_error());
            }
            return $connection;
        }
        public function closeDB($connection = null) {
            mysqli_close($connection);
        }

        public function getInfo(){
           
            $conn = $this->connectDB();
           
            $sql = "SELECT * FROM giangvien";
            $result = mysqli_query($conn,$sql);

            $gvs = [];
            $arr_users =[];
            if(mysqli_num_rows($result) > 0){
                $arr_users = mysqli_fetch_all($result, MYSQLI_ASSOC); 
            }
            $this->closeDB($conn);

            return $arr_users;
        }


        public function getInfoGV($id){
            
            $conn = $this->connectDB();


           
            $sql = "SELECT * FROM giangvien WHERE gv_id = '$id'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0)
                $nv = mysqli_fetch_assoc($result);

            $this->closeDB($conn);
            return $nv;
        }












    
    
    } 
    


?>