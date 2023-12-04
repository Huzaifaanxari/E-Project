<?php
include 'conn.php';
if (isset($_POST['add'])) {
    extract($_POST);
    $emp_data_sending_query = "INSERT INTO `employee`(`Emp_Name`, `Emp_Username`, `Emp_Password`, `Emp_Email`, `Emp_contact`, `Emp_Address`) VALUES ('$emp_name','$emp_username','$emp_pass','$emp_email','$emp_contact','$emp_address')";
    mysqli_query($conn, $emp_data_sending_query);
    echo '<script>window.location.href="Employees.php";</script>';
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
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" name="emp_name" placeholder="Enter Name" required>

                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="price">
                                Emp Username
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="price" type="text" name="emp_username" placeholder="Enter User Name" required>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                              Emp Password
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" name="emp_pass" placeholder="Enter Password" required>

                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="price">
                                Emp Email
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="price" type="text" name="emp_email" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="-mx-3 md:flex mb-6">
                        <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                                Emp Contact
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" name="emp_contact" placeholder="Enter Contact Number" required>

                        </div>
                        <div class="md:w-1/2 px-3">
                            <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="price">
                                Emp Address
                            </label>
                            <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="price" type="text" name="emp_address" placeholder="Enter Address" required>
                        </div>
                    </div>


                    <div class="-mx-3 md:flex mt-2">
                        <div class="md:w-full px-3">
                            <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full" type="submit" name="add">
                                Add
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