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
    <div class="container-fluid p-0">
      <nav class="navbar fixed-top  navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
        </div>
      </nav>
    </div>
    <div class="container" style="margin-top: 70px;">
        <form method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Upload ejs File</h5>
                </div>
                <div class="card-body">
                    <?php if(isset($success)) { ?>
                        <div class="alert alert-success"><b>Success!!</b> <?= $success ?></div>
                        <?php if(isset($results)) { ?>
                            <div class="card card-body">
                                <?= $results ?>
                            </div>
                        <?php } ?>
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
    </div>
  </body>
</html>
