<div class="sidebar">
    <div class="logo-details">
        <div class="logo_name"><img src="img/logo.png" style="width: 80%;" alt=""></div>
        <i class='bx bx-menu' id="btn"></i>
    </div>
    <ul class="nav-list">
        <li>
            <a href="index.php" style="background: none;">
                <i class='bx bx-user'></i>
                <span class="links_name">User</span>
            </a>
            <span class="tooltip">User</span>
        </li>
        <li>
            <a href="employees.php" style="background: none;">
                <i class='bx bxs-user-detail'></i>
                <span class="links_name">Employee</span>
            </a>
            <span class="tooltip">Employee</span>
        </li>
        <li>
            <a href="products.php" style="background: none;">
                <i class="fa-brands fa-product-hunt"></i>
                <span class="links_name">Product</span>
            </a>
            <span class="tooltip">Product</span>
        </li>

        <li>
            <a href="feedback.php" style="background: none;">
                <i class="fa-regular fa-comment"></i>
                <span class="links_name">Feed Back</span>
            </a>
            <span class="tooltip">Feed&nbsp;Back</span>
        </li>
        <li>
            <a href="faq.php" style="background: none;">
                <i class='bx bx-chat'></i>
                <span class="links_name">FAQ</span>
            </a>
            <span class="tooltip">FAQ</span>
        </li>

        <li>
            <a href="orders.php" style="background: none;">
                <i class='bx bx-cart-alt'></i>
                <span class="links_name">Order</span>
            </a>
            <span class="tooltip">Order</span>
        </li>


        <li class="profile">
            <div class="profile-details">
                <!--<img src="profile.jpg" alt="profileImg">-->
                <div class="name_job">
                    <div class="name">Paper Paradise</div>
                    <div class="job">Admin</div>
                </div>
            </div>
            <form action="" method="post">
                <button type="submit" name="admin_logout">
                    <i class='bx bx-log-out' id="log_out"></i>
                </button></form>
                <?php 
                if(isset($_POST['admin_logout'])){
                    session_unset();
                    session_destroy();
                    header("Location: login.php");   
                }
                ?>
        </li>
    </ul>
</div>