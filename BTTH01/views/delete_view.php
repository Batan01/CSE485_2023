<?php include "../includes/header.php"; ?>

  <h1>Xóa thông tin sinh viên</h1>

  <form method="post" action="/CSE485/BTTH01/controllers/delete.php" >
    <div class="form-group">
      <label for="id">Mã sinh viên:</label>
      <input type="text" id="id" name="id" class="form-control">
    </div>
  
    <div class="form-group">
      <label for="name">Họ và tên:</label>
      <input type="text" id="name" name="name" class="form-control">
    </div>
  
    <div class="form-group">
      <label for="age">Tuổi:</label>
      <input type="number" id="age" name="age" class="form-control">
    </div>
  
    <div class="form-group">
      <label for="grade">Lớp:</label>
      <input type="text" id="grade" name="grade" class="form-control">
    </div>
  
    <button type="submit" class="btn btn-primary">Xác nhận</button>
  </form>
  <div class="text-left mt-3">
      <a href="../index.php" class="btn btn-secondary">Trở lại trang chủ</a>
    </div>

<?php include "../includes/footer.php"; ?>
