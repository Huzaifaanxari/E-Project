<?php 
  include 'conn.php';
  $getid = $_GET['id'];
  $query = "SELECT * FROM `admin` WHERE Ad_ID = $getid ;";
  $data = mysqli_query($conn,$query);
  $row = mysqli_fetch_assoc($data);

  if(isset($_POST['update'])){
    extract($_POST);
    $update_query = "UPDATE `admin` SET `Ad_Username`='$admin_username',`Ad_gmail`='$admin_gmail',`Ad_contact_number`='$admin_contact',`Ad_Address`='$admin_address' WHERE $getid";
    if ($conn->query($update_query) === TRUE) {
      echo "record Update created successfully";
      header ("Location: index.php");
    } else {
      echo "Error: " . $update_query . "<br>" . $conn->error;
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>

  <!-- Mes styles-->
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style2.css">
</head>

<body>

  <!-- My Side Barre -->
  <div class="sideBarre">
    <div class="sideBarre__logo">
      <div class="sideBarre__cercle">

      </div>
      <h1>Admin</h1>
    </div>
    <div class="sideBarre__menu">
      <ul>
        <li><a href="index.php">Profile</a></li>
        <li><a href="products.php">Product</a></li>
        <li><a href="employees.php">Employees</a></li>
        <li><a href="orders.php">Order</a></li>
        <li><a href="feedback.php">Feedback</a></li>
        <li><a href="faq.php">FAQ</a></li>
      </ul>
    </div>
  </div>

  <!-- My Main Content -->
  <div class="mainContent" >
    <nav>

      <div class="user">
        Helo Sir
      </div>

    </nav>

    <!-- My Box Content -->
    <div class="boxContent">
      <form class="form" method="post">

          <label>
            <input required="" placeholder="" type="text" class="input" value="<?php echo $row['Ad_Username'];?>" name="admin_username">
          </label>

        <label>
          <input required="" placeholder="" type="email" class="input" value="<?php echo $row['Ad_gmail'];?>"
           name= "admin_gmail">
        </label>

        <label>
          <input required="" type="tel" placeholder="" class="input" value="<?php echo $row['Ad_contact_number'];?>" name = "admin_contact">
        </label>
        <label>
          <input required="" type="tel" placeholder="" class="input" value="<?php echo $row['Ad_Address'];?>"
           name = "admin_address">
        </label>

        <button class="fancy" href="#" name='update'>
          <span class="top-key"></span>
          <span class="text">Update</span>
          <span class="bottom-key-1"></span>
          <span class="bottom-key-2"></span>
        </button>
      </form>
    </div>
  </div>

</body>

</html>