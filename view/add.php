<?php
    include ("template/header.php");
?>
<center> <h3>Thêm giảng viên</h3></center>
    <form action="" method="post">
           
                <div class="col"><input type="text" name="txthovaten" placeholder="họ và tên"></div> </div>  
                <div class="col"><input type="text" name="txtngaysinh" placeholder="yyyy-mm-dd"></div> 
                <div class="col"><input type="text" name="txttrinhdo" placeholder="trình độ"></div> 
                <div class="col"><input type="text" name="txtchuyenmon" placeholder="chuyên môn"></div> 
                <div class="col"><input type="text" name="txthocham" placeholder="Học hàm"></div> 
                <div class="col"><input type="text" name="txthocvi" placeholder="học vị"></div> 
                <div class="col"><input type="text" name="txtcoquan" placeholder="cơ quan/Đơn vị"></div> 
                <button type="submit">Thêm</button>
    </form>





    <?php
     include ("template/footer.php");
?>