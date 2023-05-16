<?php
    include "../includes/header.php";
?>


  <h1 class="text-center my-4">Sửa thông tin sinh viên</h1>

  <form method="post" action="/CSE485/BTTH01/controllers/update.php">
    <div class="form-group">
      <h3>Chọn Sinh viên cần thay đổi thông tin:</h3>
      <label for="id">Mã sinh viên:</label>
      <input type="text" class="form-control" id="id" name="id" require>
    </div>
  
    <div class="form-group">
      <label for="name">Họ và tên:</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
  
    <div class="form-group">
      <label for="age">Tuổi:</label>
      <input type="number" class="form-control" id="age" name="age">
    </div>
  
    <div class="form-group">
      <label for="grade">Lớp:</label>
      <input type="text" class="form-control" id="grade" name="grade">
    </div>

    <div class="form-group">
      <h3>Chọn thông tin cần thay đổi:</h3>
      <label for="new_id">Mã sinh viên:</label>
      <input type="text" class="form-control" id="new_id" name="new_id" >
    </div>
  
    <div class="form-group">
      <label for="new_name">Họ và tên:</label>
      <input type="text" class="form-control" id="new_name" name="new_name" >
    </div>
  
    <div class="form-group">
      <label for="new_age">Tuổi:</label>
      <input type="number" class="form-control" id="new_age" name="new_age">
    </div>
  
    <div class="form-group">
      <label for="new_grade">Lớp:</label>
      <input type="text" class="form-control" id="new_grade" name="new_grade">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Xác nhận</button>
  </form>
  <div class="text-left mt-3">
      <a href="../index.php" class="btn btn-secondary">Trở lại trang chủ</a>
    </div>

<?php include "../includes/footer.php" ?>
