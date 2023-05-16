<?php
    include "../includes/header.php";
?>

    <h1>Thêm sinh viên mới</h1>

    <form method="post" action="/CSE485/BTTH01/controllers/create.php">
      <div class="form-group">
        <label for="id">Mã sinh viên:</label>
        <input type="text" class="form-control" id="id" name="id" required>
      </div>

      <div class="form-group">
        <label for="name">Họ và tên:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <div class="form-group">
        <label for="age">Tuổi:</label>
        <input type="number" class="form-control" id="age" name="age" required>
      </div>

      <div class="form-group">
        <label for="grade">Lớp:</label>
        <input type="text" class="form-control" id="grade" name="grade" required>
      </div>

      <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
    <div class="text-left mt-3">
      <a href="../index.php" class="btn btn-secondary">Trở lại trang chủ</a>
    </div>

  
<?php include "../includes/footer.php" ?>
