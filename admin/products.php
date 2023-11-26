<?php
include 'conn.php';
$product_query = "SELECT * FROM `product` ";
$product_data = mysqli_query($conn, $product_query);
 if(isset($_POST['delete_product'])){
  extract($_POST);
  $delete_product_query = "DELETE FROM `product` WHERE ProductID='$delete_item';";
  mysqli_query($conn,$delete_product_query);
  echo "<meta http-equiv='refresh' content='0'>";
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
  <!-- <link rel="stylesheet" href="style2.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

  <?php include 'Components/Sidebar.php' ?>


  <!-- My Main Content -->
  <div class="mainContent">
    <nav>

      <div class="user">
        Helo Sir
      </div>

    </nav>

    <!-- My Box Content -->
    <section class="text-gray-600 body-font">
      <div class="container px-5 py-24 mx-auto">
      <a href="Add_product.php"><button type="button" class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">Add Product</button></a>
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Products</h1>
 
            <div class="flex flex-wrap -m-2">
            <?php 
  while ($row = mysqli_fetch_assoc($product_data)) { ?>
                <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
                    <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg" style="background-color: #bcb8b1; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                        <img alt="team"
                            class="w-16 h-16 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4"
                            src="img/product images/<?php echo $row['ProductImageName']?>">
                        <div class="flex-grow">
                            <h2 class="text-gray-900 text-xl font-medium"><?php echo $row['ProductName']?></h2>
                            <p class="text-gray-500"><span style="color:black">Number : </span><?php echo $row['ProductNumber']?></p>
                            <p class="text-gray-500"><span style="color:black">Code : </span><?php echo $row['ProductCode']?></p>
                            <p class="text-gray-500"><span style="color:black">Price :  </span><?php echo $row['ProductPrice']?></p>
                        </div>
                        <div class="flex-grow">
                            <h2 class="text-gray-900 title-font font-medium">&nbsp;</h2>
                            <p class="text-gray-500"><span style="color:black">Quantity : </span><?php echo $row['ProductQuantity']?></p>
                            <p class="text-gray-500"><span style="color:black">Product ID : </span><?php echo $row['ProductNumber']."-".$row['ProductCode']?></p>
                            <p class="text-gray-500"><form action="" method="post">
                              <input type="hidden" value="<?php echo $row['ProductID']?>" name='delete_item'>
                            <button name="delete_product" type="submit"><i class="fa-solid fa-trash" style="color:#d62828; cursor:pointer;"></i></button>
                            </form></p>
                        </div>
                    </div>
                </div>
                
                <?php 
  }
  ?>

            </div>
        </div>
    </section>
  </div>

</body>

</html>