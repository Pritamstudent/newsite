<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="css/site.css" />
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <meta charset="utf-8">


  </script>
  <title>Attendance <?php echo $title ?></title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">IT Conference</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewrecords.php">View Attendees</a>
            </li>

          </ul>

          <div class="navbar-nav ms-auto">
            <?php if (!isset($_SESSION['username'])) {
            ?>
              <span class="nav-item">
                <a class="nav-link active" aria-current="page" href="login.php">login</a>
              </span>

            <?php } else { ?>
              <span class="nav-item" >
              <a class="nav-link active" aria-current="page" href="viewrecords.php">Hello <?php echo $_SESSION['username'] ?> !</a>
                
              </span>
              <span class="nav-item"  >
                <a class="nav-link active" aria-current="page" href="logout.php">logout</a>
              </span>

            <?php } ?>
          </div>
        </div>
      </div>
    </nav>
  <div class="container">
    
    <br>