<?php
// echo "ada?";
// die;
if (isset($_POST['submit'])) {
    $target_file = "efs.json";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    if ($uploadOk == 1 &&move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        include "upload.php";
        $success = "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
    } else {
        $error = "Sorry, there was an error uploading your file.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container-fluid" style="margin-top: 20px;">
        <form method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Format EFS Json</h5>
                </div>
                <div class="card-body">
                    <?php if(isset($success)) { ?>
                        <div class="alert alert-success"><b>Success!!</b> <?= $success ?></div>
                    <?php } ?>
                    <?php if(isset($error)) { ?>
                        <div class="alert alert-danger"><b>Error!!</b> <?= $error ?></div>
                    <?php } ?>
                    <div class="form-group">
                        <label for="file">File (json)</label>
                        <input type="file" class="form-control" name="file" required>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary float-end mt-3">Submit</button>
                </div>
            </div>
        </form>

        
        <?php if(isset($datas)) { ?>
            <div class="card card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <?php
                      if(isset($colums_outbound)) {
                        while ($column = $colums_outbound->fetch_assoc()) {
                          echo '<th>'.$column['Field'].'</th>';
                        }
                      }
                    ?>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    foreach($datas as $data) {
                      $keys = array_keys($data);
                      echo "<tr>";
                      foreach ($keys as $key) {
                        echo "<td>".$data[$key]."</td>";
                      }
                      echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
        <?php } ?>
    </div>
  </body>
</html>
