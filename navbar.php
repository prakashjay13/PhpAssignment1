<?php
error_reporting(0);
include('connection.php');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="dashboard.php">My Panel</a>
   
    <div class="collapse navbar-collapse" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Login</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active">Welcome:<?php echo $sid; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="logout.php">Logout</a>
        </li>
      
      </ul>
     
    </div>
  </div>
</nav>