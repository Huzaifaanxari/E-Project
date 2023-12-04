<?php
include 'conn.php';
$product_query = "SELECT * FROM `employee` ";
$product_data = mysqli_query($conn, $product_query);
if (isset($_POST['delete_product'])) {
  extract($_POST);
  $delete_product_query = "DELETE FROM `product` WHERE ProductID='$delete_item';";
  mysqli_query($conn, $delete_product_query);
  echo "<meta http-equiv='refresh' content='0'>";
}

if (isset($_POST['delete_emp'])) {
  extract($_POST);
  $delete_emp_query = "DELETE FROM `employee` WHERE Emp_ID='$delete_emp_id';";
  mysqli_query($conn, $delete_emp_query);
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

  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="dashbord2.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap");

    * {
      box-sizing: border-box;
    }

    :root {
      --app-bg: #101827;
      --sidebar: rgba(21, 30, 47, 1);
      --sidebar-main-color: #fff;
      --table-border: #1a2131;
      --table-header: #1a2131;
      --app-content-main-color: #fff;
      --sidebar-link: #fff;
      --sidebar-active-link: #1d283c;
      --sidebar-hover-link: #1a2539;
      --action-color: #2869ff;
      --action-color-hover: #6291fd;
      --app-content-secondary-color: #1d283c;
      --filter-reset: #2c394f;
      --filter-shadow: rgba(16, 24, 39, 0.8) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
    }

    .light:root {
      --app-bg: #fff;
      --sidebar: #f3f6fd;
      --app-content-secondary-color: #f3f6fd;
      --app-content-main-color: #1f1c2e;
      --sidebar-link: #1f1c2e;
      --sidebar-hover-link: rgba(195, 207, 244, 0.5);
      --sidebar-active-link: rgba(195, 207, 244, 1);
      --sidebar-main-color: #1f1c2e;
      --filter-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    }

    body,
    html {
      margin: 0;
      padding: 0;
      height: 100%;
      width: 100%;
    }



    .app-content {
      padding: 16px;
      background-color: var(--app-bg);
      height: 100%;
      flex: 1;
      max-height: 100%;
      display: flex;
      flex-direction: column;
    }

    .app-content-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 4px;
    }

    .app-content-headerText {
      color: var(--app-content-main-color);
      font-size: 24px;
      line-height: 32px;
      margin: 0;
    }

    .app-content-headerButton {
      background-color: var(--action-color);
      color: #fff;
      font-size: 14px;
      line-height: 24px;
      border: none;
      border-radius: 4px;
      height: 32px;
      padding: 0 16px;
      transition: 0.2s;
      cursor: pointer;
    }

    .app-content-headerButton:hover {
      background-color: var(--action-color-hover);
    }

    .app-content-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 16px 4px;
    }

    .app-content-actions-wrapper {
      display: flex;
      align-items: center;
      margin-left: auto;
    }

    @media screen and (max-width: 520px) {
      .app-content-actions {
        flex-direction: column;
      }

      .app-content-actions .search-bar {
        max-width: 100%;
        order: 2;
      }

      .app-content-actions .app-content-actions-wrapper {
        padding-bottom: 16px;
        order: 1;
      }
    }

    .search-bar {
      background-color: var(--app-content-secondary-color);
      border: 1px solid var(--app-content-secondary-color);
      color: var(--app-content-main-color);
      font-size: 14px;
      line-height: 24px;
      border-radius: 4px;
      padding: 0px 10px 0px 32px;
      height: 32px;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
      background-size: 16px;
      background-repeat: no-repeat;
      background-position: left 10px center;
      width: 100%;
      max-width: 320px;
      transition: 0.2s;
    }

    .light .search-bar {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%231f1c2e' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
    }

    .search-bar:placeholder {
      color: var(--app-content-main-color);
    }

    .search-bar:hover {
      border-color: var(--action-color-hover);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%236291fd' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
    }

    .search-bar:focus {
      outline: none;
      border-color: var(--action-color);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%232869ff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-search'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E");
    }

    .action-button {
      border-radius: 4px;
      height: 32px;
      background-color: var(--app-content-secondary-color);
      border: 1px solid var(--app-content-secondary-color);
      display: flex;
      align-items: center;
      color: var(--app-content-main-color);
      font-size: 14px;
      margin-left: 8px;
      cursor: pointer;
    }

    .action-button span {
      margin-right: 4px;
    }

    .action-button:hover {
      border-color: var(--action-color-hover);
    }

    .action-button:focus,
    .action-button.active {
      outline: none;
      color: var(--action-color);
      border-color: var(--action-color);
    }

    .filter-button-wrapper {
      position: relative;
    }

    .filter-menu {
      background-color: var(--app-content-secondary-color);
      position: absolute;
      top: calc(100% + 16px);
      right: -74px;
      border-radius: 4px;
      padding: 8px;
      width: 220px;
      z-index: 2;
      box-shadow: var(--filter-shadow);
      visibility: hidden;
      opacity: 0;
      transition: 0.2s;
    }

    .filter-menu:before {
      content: "";
      position: absolute;
      width: 0;
      height: 0;
      border-left: 5px solid transparent;
      border-right: 5px solid transparent;
      border-bottom: 5px solid var(--app-content-secondary-color);
      bottom: 100%;
      left: 50%;
      transform: translatex(-50%);
    }

    .filter-menu.active {
      visibility: visible;
      opacity: 1;
      top: calc(100% + 8px);
    }

    .filter-menu label {
      display: block;
      font-size: 14px;
      color: var(--app-content-main-color);
      margin-bottom: 8px;
    }

    .filter-menu select {
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%23fff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      padding: 8px 24px 8px 8px;
      background-position: right 4px center;
      border: 1px solid var(--app-content-main-color);
      border-radius: 4px;
      color: var(--app-content-main-color);
      font-size: 12px;
      background-color: transparent;
      margin-bottom: 16px;
      width: 100%;
    }

    .filter-menu select option {
      font-size: 14px;
    }

    .light .filter-menu select {
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%231f1c2e' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
    }

    .filter-menu select:hover {
      border-color: var(--action-color-hover);
    }

    .filter-menu select:focus,
    .filter-menu select.active {
      outline: none;
      color: var(--action-color);
      border-color: var(--action-color);
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%232869ff' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-chevron-down'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
    }

    .filter-menu-buttons {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .filter-button {
      border-radius: 2px;
      font-size: 12px;
      padding: 4px 8px;
      cursor: pointer;
      border: none;
      color: #fff;
    }

    .filter-button.apply {
      background-color: var(--action-color);
    }

    .filter-button.reset {
      background-color: var(--filter-reset);
    }

    .products-area-wrapper {
      width: 100%;
      max-height: 100%;
      overflow: auto;
      padding: 0 4px;
    }

    .tableView .products-header {
      display: flex;
      align-items: center;
      border-radius: 4px;
      background-color: var(--app-content-secondary-color);
      position: sticky;
      top: 0;
    }

    .tableView .products-row {
      display: flex;
      align-items: center;
      border-radius: 4px;
    }

    .tableView .products-row:hover {
      box-shadow: var(--filter-shadow);
      background-color: var(--app-content-secondary-color);
    }

    .tableView .products-row .cell-more-button {
      display: none;
    }

    .tableView .product-cell {
      flex: 1;
      padding: 8px 16px;
      color: var(--app-content-main-color);
      font-size: 14px;
      display: flex;
      align-items: center;
      /* justify-content: center; */
      /* width: 200px; */
    }

    .tableView .product-cell img {
      width: 32px;
      height: 32px;
      border-radius: 6px;
      margin-right: 6px;
    }

    @media screen and (max-width: 780px) {
      .tableView .product-cell {
        font-size: 12px;
      }

      .tableView .product-cell.image span {
        display: none;
      }

      .tableView .product-cell.image {
        flex: 0.2;
      }
    }

    @media screen and (max-width: 520px) {

      .tableView .product-cell.category,
      .tableView .product-cell.sales {
        display: none;
      }

      .tableView .product-cell.status-cell {
        flex: 0.4;
      }

      .tableView .product-cell.stock,
      .tableView .product-cell.price {
        flex: 0.2;
      }
    }

    @media screen and (max-width: 480px) {
      .tableView .product-cell.stock {
        display: none;
      }

      .tableView .product-cell.price {
        flex: 0.4;
      }
    }

    .tableView .sort-button {
      padding: 0;
      background-color: transparent;
      border: none;
      cursor: pointer;
      color: var(--app-content-main-color);
      margin-left: 4px;
      display: flex;
      align-items: center;
    }

    .tableView .sort-button:hover {
      color: var(--action-color);
    }

    .tableView .sort-button svg {
      width: 12px;
    }

    .tableView .cell-label {
      display: none;

    }


    @media screen and (max-width: 520px) {
      .gridView {
        margin: 0;
      }
    }

    @media screen and (max-width: 1024px) {
      .gridView .products-row {
        width: calc(33.3% - 16px);
      }
    }

    @media screen and (max-width: 820px) {
      .gridView .products-row {
        width: calc(50% - 16px);
      }
    }

    @media screen and (max-width: 520px) {
      .gridView .products-row {
        width: 100%;
        margin: 8px 0;
      }

      .gridView .products-row:hover {
        transform: none;
      }
    }
  </style>
</head>

<body>

  <?php include 'Components/Sidebar2.php' ?>

  <!-- My Box Content -->
  <section class="home-section" style="padding:0;">
    <div class="app-content">
      <div class="app-content-header">
        <h1 class="app-content-headerText">Employee</h1>

        <a href="Add_Employee.php"><button class="app-content-headerButton">Add Employee</button></a>
      </div>
      <br>
      <div class="products-area-wrapper tableView">
        <div class="products-header">
          <div class="product-cell image" style="justify-content: center;">
            Emp Name
            <button class="sort-button">
            </button>
          </div>
          <div class="product-cell category" style="justify-content: center;">Username<button class="sort-button">
            </button></div>
          <div class="product-cell status-cell" style="justify-content: center;">Password<button class="sort-button">
            </button></div>
          <div class="product-cell sales" style="justify-content: center;">Email<button class="sort-button">
            </button></div>
          <div class="product-cell stock" style="justify-content: center;">Contact<button class="sort-button">
            </button></div>
          <div class="product-cell price" style="justify-content: center;">Address<button class="sort-button">
            </button></div>
          <div class="product-cell price" style="justify-content: center;">Edit<button class="sort-button">
            </button></div>
          <div class="product-cell price" style="justify-content: center;">Delete<button class="sort-button">
            </button></div>
        </div>
        <?php
        while ($row = mysqli_fetch_assoc($product_data)) { ?>
          <div class="products-row">
            <button class="cell-more-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" />
              </svg>
            </button>
            <div class="product-cell image">
              <img src="img/employee.png" alt="product">
              <span><?php echo $row['Emp_Name'] ?></span>
            </div>
            <div class="product-cell category" style="justify-content: center;"><span class="cell-label"></span><?php echo $row['Emp_Username'] ?></div>

            <div class="product-cell sales" style="justify-content: center;"><span class="cell-label"></span><?php echo $row['Emp_Password'] ?></div>
            <div class="product-cell sales" style="text-wrap: balance;"><?php echo $row['Emp_Email'] ?></div>
            <div class="product-cell sales" style="justify-content: center;"><?php echo $row['Emp_contact'] ?></div>
            <div class="product-cell stock" style="justify-content: center;"><?php echo $row['Emp_Address'] ?></div>
            <div class="product-cell price" style="justify-content: center;"><span class="cell-label"></span>
              <form action="update_employee.php" method="post">
                <input type="hidden" value="<?php echo $row['Emp_ID'] ?>" name='update_emp_id'>
                <button name="update_product" type="submit" style="color:#80ed99;"><i class='bx bx-edit'></i></button>
              </form>
            </div>
            <div class="product-cell price" style="justify-content: center;"><span class="cell-label"></span>
              <form action="" method="post">
                <input type="hidden" value="<?php echo $row['Emp_ID'] ?>" name='delete_emp_id'>
                <button name="delete_emp" type="submit" style="color:#da2c38;"><i class='bx bxs-trash'></i></button>
              </form>
            </div>

          </div>
        <?php
        }
        ?>
      </div>
    </div>
  </section>
  </div>
  <script src="script.js"></script>

</body>

</html>