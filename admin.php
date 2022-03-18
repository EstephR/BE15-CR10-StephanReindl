<?php 
$adminName = "Stephan";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once "components/bootstrap.php"?>
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Area</title>
</head>
<body>
<!-- Navbar -->
    <nav class="navbar p-5 navbar-expand-lg navbar-dark bg-light mb-5">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="admin.php">
            <img src="img/user.png" alt="" width="50" height="50" class="d-inline-block align-text-top">
            User Area</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-5">
                <a class="nav-link" href="#"><button class="btn btn-outline-warning p-3">Add Books</button></a>
                <a class="nav-link" href="index.php"><button class="btn btn-success p-3">Log out</button></a>
            </div>
            </div>
        </div>
    </nav>

    <div class="container">
         <h2 class="mb-5">Welcome back, <?= $adminName ?>!</h2>
        <h1 class="p-3 text-light text-center">Big Library Book Database</h1>

        <table class='table table-striped'>
               <thead class='table-warning'>
                   <tr>
                        <th>Cover</th>
                       <th>Title</th>
                       <th>ISBN</th>
                   </tr>
               </thead>
               <tbody>
                 
                </tbody>
           </table>
    </div>

   
    


     <!-- Scripts -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>