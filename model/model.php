<?php
    require_once ('config/db.php');
    class model{
        private $magv, $hovaten, $ngaysinh, $gioitinh, $trinhdo, $chuyenmon, $hocham, $hocvi, $coquan;
        
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
        //thong tin tat ca giang vien
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

        //chi tiet giang vien
        public function getInfoGV($magv){
            
            $conn = $this->connectDB();


           
            $sql = "SELECT * FROM giangvien WHERE magv = '$magv'";
            $result = mysqli_query($conn,$sql);

            if(mysqli_num_rows($result) > 0)
                $nv = mysqli_fetch_assoc($result);

            $this->closeDB($conn);
            return $nv;
        }
        //them giang vien

        public function addGV($hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan){

            $conn = $this->connectDB();

            $sql ="INSERT INTO giangvien(hovaten,ngaysinh,gioitinh,trinhdo,chuyenmon,hocham,hocvi,coquan) VALUES('$hovaten','$ngaysinh','$gioitinh','$trinhdo','$chuyenmon','$hocham','$hocvi','$coquan')";

            $result=mysqli_query($conn,$sql);

            $this->closeDB($conn);

            return $result;
        }
        public function updateGV($hovaten,$ngaysinh,$gioitinh,$trinhdo,$chuyenmon,$hocham,$hocvi,$coquan){
            $conn=$this->connectDB();
            $sql="UPDATE giangvien SET hovaten=$hovaten ,ngaysinh=$ngaysinh,gioitinh=$gioitinh,trinhdo=$trinhdo,chuyenmon=$chuyenmon,hocham=$hocham,hocvi=$hocvi,coquan=$coquan WHERE magv=$magv";
            $result=mysqli_query($conn,$sql);

            $this-> closeDB();

            return $result;



        }
        









    
    
    } 
    


?>