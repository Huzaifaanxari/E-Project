<?php
include 'conn.php';

$pr_id = $_POST['update_item'];
$update_query = "SELECT * FROM product where ProductID='$pr_id';";
$product_data = mysqli_query($conn, $update_query);
$row = mysqli_fetch_assoc($product_data);

if (isset($_POST['product_update'])) {
    $img_temp_name = $_FILES['pr_img']['tmp_name'];
    $img_name = $_FILES['pr_img']['name'];
    $img_type = $_FILES['pr_img']['type'];
    extract($_POST);
    move_uploaded_file($img_temp_name, "img/product images/" . $img_name);
    // Values to be replaced with actual values
    $value1 = $_POST['pr_id'];
    $value2 = $_POST['pr_code'];
    $value3 = $_POST['pr_number'];
    $value4 = $_POST['pr_title'];
    $value5 = $_POST['pr_price'];
    $value6 = $_FILES['pr_img']['name'];
    $value7 = $_FILES['pr_img']['type'];
    $value8 = $_POST['pr_quantity'];

    // echo $value1."<br>";        
    // echo $value2."<br>";        
    // echo $value3."<br>";        
    // echo $value4."<br>";        
    // echo $value5."<br>";        
    // echo $value6."<br>";        
    // echo $value7."<br>";        
    // echo $value8."<br>";            

    // SQL query
    $sql = "UPDATE `product` 
        SET 
            `ProductCode` = '$value2',
            `ProductNumber` = '$value3',
            `ProductName` = '$value4',
            `ProductPrice` = $value5,
            `ProductImageName` = '$value6',
            `ProductImageType` = '$value7',
            `ProductQuantity` = $value8
        WHERE 
            `ProductID` = $value1;";
    mysqli_query($conn, $sql);
    header("Location:products.php");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="dashbord2.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .input-preview__src {
            display: none;

        }

        .input-preview {
            border: dashed black 0.175em;
            border-radius: 0.5em;
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white;
            position: relative;
            transition: ease-in-out 750ms;
            cursor: pointer;
            background-image: url("img/product images/<?php echo $row['ProductImageName'] ?>");
        }

        .input-preview::after {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            text-align: center;
            transform: translateY(50%);
            content: "Choose a file...";
            font-style: italic;
            font-size: 1em;
        }

        .has-image::before {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(50, 50, 50, 0.5);
            content: " ";
            transition: ease-in-out 750ms;

        }

        .has-image::after {
            content: "Choose another file...";
            color: white;
        }
    </style>

</head>

<body>

    <?php include 'Components/Sidebar2.php' ?>




    <!-- My Box Content -->
    <div class="home-section">
        <div class="bg-gray-100 mx-auto max-w-6xl bg-white py-20 px-12 lg:px-24 shadow-xl mb-24">
            <form method="post" enctype="multipart/form-data">

                <h1>Insert Product Image</h1>
                <label class="input-preview" for="img">
                    <input class="input-preview__src" id="img" name="pr_img" type="file" accept="image/*" value="<?php echo $row['ProductImageName'] ?>" />
                </label>
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                                Product Title
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" name="pr_title" value="<?php echo $row['ProductName'] ?>" required>

                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="price">
                                Price
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="price" type="text" name="pr_price" value="<?php echo $row['ProductPrice'] ?>" required>
                        </div>
                    </div>

                    <div class="-mx-3 md:flex mb-2">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                                Product Code
                            </label>
                            <div>
                                <input class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="pr_code" name="pr_code" type="number" value="<?php echo $row['ProductCode'] ?>" required>

                            </div>
                        </div>
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                                Product Number
                            </label>
                            <div>
                                <input class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="pr_number" name="pr_number" type="number" value="<?php echo $row['ProductNumber'] ?>" required>

                            </div>
                        </div>
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                                Product Quantity
                            </label>
                            <div>
                                <input class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="pr_quantity" name="pr_quantity" type="number" value="<?php echo $row['ProductQuantity'] ?>" required>
                                <input class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="pr_id" name="pr_id" type="hidden" value="<?php echo $row['ProductID'] ?>" required>

                            </div>
                        </div>

                    </div>
                    <div class="-mx-3 md:flex mt-2">
                        <div class="md:w-full px-3">
                            <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full" type="submit" name="product_update">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>

    </div>


    <script>
        const fileImage = document.querySelector('.input-preview__src');
        const filePreview = document.querySelector('.input-preview');

        fileImage.onchange = function() {
            const reader = new FileReader();

            reader.onload = function(e) {
                // get loaded data and render thumbnail.
                filePreview.style.backgroundImage = "url('img/product images/<?php echo $row['ProductImageName'] ?>')";
                filePreview.style.backgroundImage = "url(" + e.target.result + ")";
                filePreview.classList.add("has-image");
            };

            // read the image file as a data URL.
            reader.readAsDataURL(this.files[0]);
        };
    </script>
    <script src="script.js"></script>
</body>

</html>