<?php
    include 'conn.php';
    $update_emp_id = $_POST['update_emp_id'];
    $update_emp_query = "SELECT * FROM employee where Emp_ID='$update_emp_id';";
    $update_emp_data = mysqli_query($conn,$update_emp_query);
    $row = mysqli_fetch_assoc($update_emp_data);
    // echo $row['Emp_Username']."<br>";
    // echo $row['Emp_Password']."<br>";
    // echo $row['Emp_Email']."<br>";
    // echo $row['Emp_contact']."<br>";
    // echo $row['Emp_Address']."<br>";

    if(isset($_POST['update_emp_button'])){
        $emp_id = $_POST['emp_id'];
        $emp_name = $_POST['emp_name'];
        $emp_username = $_POST['emp_username'];
        $emp_pass = $_POST['emp_pass'];
        $emp_email = $_POST['emp_email'];
        $emp_contact = $_POST['emp_contact'];
        $emp_address = $_POST['emp_address'];
        
        $sql = "UPDATE `employee` 
        SET 
            `Emp_Name` = '$emp_name',
            `Emp_Username` = '$emp_username',
            `Emp_Password` = '$emp_pass',
            `Emp_Email` = '$emp_email',
            `Emp_contact` = '$emp_contact',
            `Emp_Address` = '$emp_address'
        WHERE 
            `Emp_ID` = '$emp_id'";
   
    if(mysqli_query($conn, $sql)){
        echo "<script>alert('Done')</script>";
    }
    else{
        echo "<script>alert('fail')</script>";
    }
    // echo "<script>alert('$emp_name')</script>";
    // echo "<script>alert('$emp_username')</script>";
    // echo "<script>alert('$emp_pass')</script>";
    // echo "<script>alert('$emp_email')</script>";
    // echo "<script>alert('$emp_contact')</script>";
    // echo "<script>alert('$emp_address')</script>";
    header("Location:Employees.php");
    
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
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                                Emp Name
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" name="emp_name" placeholder="Enter Name" value="<?php echo $row['Emp_Name']?>" required>

                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="price">
                                Emp Username
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="price" type="text" name="emp_username" placeholder="Enter User Name" value="<?php echo $row['Emp_Username']?>" required >
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                              Emp Password
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" name="emp_pass" placeholder="Enter Password" 
                            value="<?php echo $row['Emp_Password']?>"
                            required>

                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="price">
                                Emp Email
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="price" type="text" name="emp_email" placeholder="Enter Email"
                            value="<?php echo $row['Emp_Email']?>" required>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                                Emp Contact
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" name="emp_contact" placeholder="Enter Contact Number" 
                            value="<?php echo $row['Emp_contact']?>"required>

                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="price">
                                Emp Address
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="price" type="text" name="emp_address" placeholder="Enter Address" 
                            value="<?php echo $row['Emp_Address']?>"
                            required>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="price" type="hidden" name="emp_id" placeholder="Enter Address" 
                            value="<?php echo $row['Emp_ID']?>"
                            >
                        </div>
                    </div>


                    <div class="-mx-3 md:flex mt-2">
                        <div class="md:w-full px-3">
                            <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full" type="submit" name="update_emp_button">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    <script src="script.js"></script>
</body>
</html>