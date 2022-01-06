<?php

     include("template/header.php");

?>
<div class="container">
     <table class="table">
          <thead>
               <tr>
                    <th scope="col">Mã Giảng viên</th>
                    <th scope="col">Tên giảng viên</th>
                    <th scope="col"> Ngày sinh</th>
                    <th scope="col">Giới tính </th>
                    <th scope="col"> Trình độ</th>
                    <th scope="col"> Chuyên môn</th>
                    <th scope="col"> Học hàm</th>
                    <th scope="col"> Học vị</th>
                    <th scope="col"> Cơ quan/Đơn vị</th>
               </tr>
          </thead>
          <tbody>
               <?php
                    foreach($gvs as $gv){
               ?>
                    <tr>
                         
                         <td><a href="index.php?act=details&id=<?php echo $data['gv_id']; ?>"><?php echo $data['gv_hovaten']; ?></a> </td>
                         <td><a href="index.php?act=details&id=<?php echo $data['gv_id']; ?>"><?php echo $data['gv_ngaysinh']; ?></a> </td>
                         <td><a href="index.php?act=details&id=<?php echo $data['gv_id']; ?>"><?php echo $data['gv_gioitinh']; ?></a> </td>
                         <td><a href="index.php?act=details&id=<?php echo $data['gv_id']; ?>"><?php echo $data['gv_trinhdo']; ?></a> </td>
                         <td><a href="index.php?act=details&id=<?php echo $data['gv_id']; ?>"><?php echo $data['gv_chuyenmon']; ?></a> </td>
                         <td><a href="index.php?act=details&id=<?php echo $data['gv_id']; ?>"><?php echo $data['gv_hocham']; ?></a> </td>
                         <td><a href="index.php?act=details&id=<?php echo $data['gv_id']; ?>"><?php echo $data['gv_hocvi']; ?></a> </td>
                         <td><a href="index.php?act=details&id=<?php echo $data['gv_id']; ?>"><?php echo $data['gv_coquan']; ?></a> </td>
                         

                    </tr>
                         <?php
                          }
                    ?>

          </tbody>
     </table>
</div>
     
<?php
     include ("template/footer.php");
?>