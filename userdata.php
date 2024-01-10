<?php
    require("config.php");
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
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                </tr>
            </thead>
            <tbody>

            <?php 
            $query="SELECT * FROM user";
            $sql=mysqli_query($conn,$query);

            $slcount=1;
            while($rows=mysqli_fetch_assoc($sql)){
                
            ?>
                <tr>
                <th scope="row"><?php echo $slcount++?></th>
                <td><?php echo $rows['Name']?></td>
                <td><?php echo $rows['email']?></td>
                <td><?php echo $rows['password']?></td>
                </tr>
                <?php }?>
            </tbody>
        </table>

          
        </div>
        
          <!-- Footer -->
        <?php
        require("footer.php");
        ?>