<?php 
// session_start();
 ?>

<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.php" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" id="search" placeholder=" Search" >
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" href="#">
                <?php 
                    $select="SELECT * FROM `admin` WHERE `id`='".$_SESSION['admin_id']."'";
                    $qry=mysqli_query($con,$select);
                    $row=mysqli_fetch_assoc($qry);
                ?>
                <img alt="abc" src="../web/images/llh/<?php echo $row['Profile']?>">
                <span class="username"><?php echo $_SESSION['name'];?></span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="index.php?page=profile"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <!-- <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li> -->
                <li><a href="logout.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
