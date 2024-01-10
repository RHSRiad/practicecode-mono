<?php
    require("header-script.php");
    if(isset($_SESSION['username'])){

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
        <?php
            require("content.php");
        ?>
          
        </div>
        
          <!-- Footer -->
        <?php
        require("footer.php");

    }else{
      header("location: login.php?msg=registration first");
    }
        ?>