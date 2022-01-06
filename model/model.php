<?php
    require_once ('config/db.php');
    class model{
        private $gv_id,$gv_name,$gv_ngaysinh,$gv_gioitinh,$gv_trinhdo,$gv_chuyenmon,$gv_hocham,$gv_hocvi,$gv_coquan;
        
        public function connectDB(){
            $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            if(!$conn){
                die("ket noi that baij".mysqli_connect_error());
            }
            return $conn;
        }
        public function closeDB($conn = null){
            mysqli_close($conn);
            
        }

        public function getInfo(){

            $conn =$this->connectDB();

            $sql = "SELECT * FROM giangvien";
            $result = mysqli_query($conn,$sql);

            $gvs=[];
            if(mysqli_num_rows($result)>0){

                $arr_users =mysqli_fetch_all($result,MYSQLI_ASSOC);
            echo"a";
            }
            
            $this->closeDB($conn);
            
            return $arr_users;
        }











    
    
    } 
    


?>