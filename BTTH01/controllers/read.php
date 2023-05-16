<?php
    include "../includes/header.php";
    require_once "../models/StudentDAO.php";
?>


  <h1>Danh sách sinh viên</h1>

  <?php
    $file = fopen('../Student_list.txt', 'r');
    $studentDAO = new StudentDAO();
    while (($line = fgets($file)) !== false) {
        $fields = explode(',', $line);
        $id = trim($fields[0]);
        $name = trim($fields[1]);
        $age = trim($fields[2]);
        $grade = trim($fields[3]);
        $student = new Student($id, $name, $age, $grade);
        $studentDAO->create($student);
    }

   $students = $studentDAO->getAll();

    if ($students) {
  ?>
  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Grade</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($students as $student): ?>
      <tr>
        <td><?php echo $student->getId(); ?></td>
        <td><?php echo $student->getName(); ?></td>
        <td><?php echo $student->getAge(); ?></td>
        <td><?php echo $student->getGrade(); ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <?php
    } else {
        echo "<p>Không có sinh viên</p>";
    }

    fclose($file);
  ?>    
  <div class="text-left mt-3">
      <a href="../index.php" class="btn btn-secondary">Trở lại trang chủ</a>
    </div>


<?php include "../includes/footer.php"; ?>
