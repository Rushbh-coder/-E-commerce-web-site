<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin dashboard</title>
    <!--boostrac cs link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .admin_image{
            width: 100px;
            object-fit: contain;
        }
        .logo{      width: 4%;
                height: 4%;
            }
        </style>
</head>
<body>
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/logo.jpg" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                    <ul class="navbar-nav">
                        <li class="navbar-item">
                        <a class="nav-link" href="#">welcome guest</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">MANAGE DETAILS</h3>
        </div>
    </div>
    <!--third child-->
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-item-center">
            <div>
                <a href=""><img src="../image/pinepp.jpg" class="admin_image"></a>
                <p class="text-light text-center">admin name</p>
            </div>
            <div class="button text-center"> <button class="my-3"><a href="insert_product.php" class="nav-link text-light bg-info my-1">INSERT PRODUCT</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">VIEW PRODUCT</a></button>
                <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">INSERT CATEGORY</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">VIWE CATEGORY</a></button>
                <button><a href="index.php?insert_brand" class="nav-link text-light bg-info my-1">INSERT BRAND</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">VIEW BRAND</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">ALLORDER</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">ALL PAYMENT</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">LIST USERS</a></button>
                <button><a href="" class="nav-link text-light bg-info my-1">LOGOUT</a></button>
            </div>
        </div>
    </div>
    <!--fourt child-->
    <div class="container my-4">
        <?php 
            if(isset($_GET['insert_category']))
            {
                include('insert_categories.php');
            }
            if(isset($_GET['insert_brand']))
            {
                include('insert_brands.php');
            }
        ?>
    </div>
    
    <div class="bg-info p-3 text-center footer">
    <p>all right reserved @-design by rushabh-2023</p>
  </div>
  

<!--boostrac js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>