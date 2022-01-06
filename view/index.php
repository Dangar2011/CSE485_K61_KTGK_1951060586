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
                         
                         <th scope="row"><?php echo $gv['magv'];?></th>
                         <td><?php echo $gv['hovaten']; ?> </td>
                         <td><?php echo $gv['ngaysinh']; ?> </td>
                         <td><?php echo $gv['gioitinh']; ?> </td>
                         <td><?php echo $gv['trinhdo']; ?> </td>
                         <td><?php echo $gv['chuyenmon']; ?> </td>
                         <td><?php echo $gv['hocham']; ?></td>
                         <td><?php echo $gv['hocvi']; ?> </td>
                         <td><?php echo $gv['coquan']; ?></td>
                         

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