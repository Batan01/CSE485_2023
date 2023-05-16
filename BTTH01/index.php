<?php include "includes/header.php"; ?>
<div class="container" style="background-color:#00FF7F;">
  <h1>Quản lý học sinh</h1>
  <div class="row mb-3">
    <div class="col-sm-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Thêm sinh viên</h5>
          <p class="card-text">Thêm thông tin của một sinh viên mới vào hệ thống</p>
          <a href="./views/create_view.php" class="btn btn-primary">Thêm sinh viên</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Sửa thông tin học sinh</h5>
          <p class="card-text">Sửa thông tin của một sinh viên đã có trong hệ thống</p>
          <a href="./views/update_view.php" class="btn btn-primary">Sửa thông tin</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-sm-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Xóa thông tin học sinh</h5>
          <p class="card-text">Xóa thông tin của một sinh viên khỏi hệ thống</p>
          <a href="./views/delete_view.php" class="btn btn-primary">Xóa thông tin</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6 mb-4">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Hiện thông tin học sinh</h5>
          <p class="card-text">Hiển thị danh sách các sinh viên đã có trong hệ thống</p>
          <a href="./controllers/read.php" class="btn btn-primary">Hiển thị thông tin</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include "includes/footer.php"; ?>
