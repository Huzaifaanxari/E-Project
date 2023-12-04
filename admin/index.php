<?php 
session_start();
  if(!isset($_SESSION['admin_login'])){
    header("Location:login.php");
  }
  include 'conn.php';
  $query = "SELECT * FROM `admin` WHERE 1;";
  $data = mysqli_query($conn,$query);
  $row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard 2 </title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dashbord2.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <?php include 'Components/sidebar2.php' ?>

    <section class="home-section">
    <div class="profile-card js-profile-card">
          <div class="profile-card__img">
            <img src="img/admin.png" alt="profile card">
          </div>

          <div class="profile-card__cnt js-profile-cnt">
            <div class="profile-card__name"><?php echo $row['Ad_Username'];?></div>
            <div class="profile-card__txt"><?php echo $row['Ad_gmail'];?><strong>&nbsp;&nbsp;<?php echo $row['Ad_contact_number'];?></strong></div>
            <div class="profile-card-loc">
              <span class="profile-card-loc__icon">
                <svg class="icon">
                  <use xlink:href="#icon-location"></use>
                </svg>
              </span>

              <span class="profile-card-loc__txt">
              <?php echo $row['Ad_Address'];?>
              </span>
            </div>

            <div class="profile-card-inf">
              <div class="profile-card-inf__item">
                <a href="#"><div class="profile-card-inf__title" style="font-size: 50px"><i class="fa-brands fa-facebook"></i></div></a>
              </div>

              <div class="profile-card-inf__item">
                <a href="#"><div class="profile-card-inf__title" style="font-size: 50px"><i class="fa-brands fa-twitter"></i></div></a>
              </div>

              <div class="profile-card-inf__item">
                <a href="#"><div class="profile-card-inf__title" style="font-size: 50px"><i class="fa-brands fa-instagram"></i></div></a>
              </div>

              <div class="profile-card-inf__item">
                <a href="#"><div class="profile-card-inf__title" style="font-size: 50px"><i class="fa-brands fa-linkedin"></i></div></a>
              </div>
            </div>

            <div class="profile-card-ctr">
              <a href="update_profile.php?id=<?php echo $row['Ad_ID']?>"><button class="profile-card__button button--blue js-message-btn">Modify</button></a>
            </div>
          </div>



        </div>
    </section>
<script src="script.js"></script>
</body>
</html>