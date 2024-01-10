<?php
    require("header-script.php");
?>


  <body class="navbar-fixed sidebar-fixed" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    
    <div id="toaster"></div>
    

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      
      
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        <?php
            require("sidebar.php");
        ?>
      

      <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
          <!-- Header -->
        <?php
            require("header.php");
        ?>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          <div class="content"><!-- For Components documentaion -->


<!-- Masked Input -->
<h2><?php
    if(isset($_GET['msg'])){
       echo $_GET["msg"];
    }
?></h2>
<div class="card card-default">
  <div class="card-header">
    <h2>Catagory Data Input</h2>

  </div>
  <div class="card-body">
    <form action="catagory-data.php" method="post">
    <div class="row">
      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium" for="">Catagory Name</label>
          <div class="input-group mb-3">
            <input type="text" name="catagoryname" class="form-control">
          </div>
        </div>
      </div>

      
      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium" for="">Catagory Code</label>
          <div class="input-group mb-3">
            <input type="text" name="catagorycode" class="form-control">
          </div>
        </div>
      </div>


      <div class="col-xl-6">
        <div class="mb-5">
          <label class="text-dark font-weight-medium" for="">Image</label>
          <div class="input-group mb-3">
            <input type="text" name="catagoryimg" class="form-control">
          </div>
        </div>
      </div>
      <input type="submit" value="send">
      </form>
    </div>

  </div>
</div>
          
        </div>
        
          <!-- Footer -->
        <?php
        require("footer.php");
        ?>