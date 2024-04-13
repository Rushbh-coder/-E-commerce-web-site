<?php      
include('../includes/connect.php');

if (isset($_POST['insert_product'])) {
    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keyword = $_POST['product_keyword'];
    $product_categories = $_POST['product_categories'];
    $product_brand = $_POST['product_brand'];
    $product_price = $_POST['product_price'];
    $product_status='true';

    //images
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];
    //tmp
    $tmp_image1 = $_FILES['product_image1']['tmp_name'];
    $tmp_image2 = $_FILES['product_image2']['tmp_name'];
    $tmp_image3 = $_FILES['product_image3']['tmp_name'];

    if ($product_title == '' || $product_description == '' || $product_keyword == '' || $product_categories == '' || $product_brand == '' || $product_price == '' || $product_image1 == '' || $product_image2 == '' || $product_image3 == '') {
        echo "<script>alert('Please fill all the information')</script>";
        exit();
    } else {
        // Move uploaded files to the destination folder
        move_uploaded_file($tmp_image1, "./product_image/$product_image1");
        move_uploaded_file($tmp_image2, "./product_image/$product_image2");
        move_uploaded_file($tmp_image3, "./product_image/$product_image3");

        // Assuming these variables hold information for the SQL query
        $insert_products = "INSERT INTO `product_info` (product_title, product_description, product_keyword, categories_id	, brand_id, product_image1, product_image2, product_image3, date, status) 
                    VALUES ('$product_title', '$product_description', '$product_keyword', '$product_categories', '$product_brand', '$product_image1', '$product_image2', '$product_image3', NOW(), '$product_status')";

        // Execute the SQL query to insert product information into the database
        $result = mysqli_query($con,$insert_products);

        if ($result) {
            // Insertion successful
            echo "<script>alert('product information inserted sucussfully')</script>";
        } else {
            // Insertion failed
            echo "Error inserting product information: " . mysqli_error($con);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert_product</title>
    <!--boostrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container">
    <h1 class="text-center">Insert product</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <!--title-->
        <div class="from-outline mb-4 m-auto w-50">
            <label for="product_title" class="form lable">PRODUCT TITLE</label>
            <input type="text" name="product_title" id="product_title" placeholder="Enter product title" required="requierd" autocomplete="off" class="form-control">
        </div>
        <!--description-->
        <div class="from-outline mb-4 m-auto w-50">
            <label for="product_description" class="form lable">PRODUCT Description</label>
            <input type="text" name="product_description" id="product_description" placeholder="Enter product description" required="requierd" autocomplete="off" class="form-control">
        </div>
        <!--keyword-->
        <div class="from-outline mb-4 m-auto w-50">
            <label for="product_keyword" class="form lable">PRODUCT Keyword</label>
            <input type="text" name="product_keyword" id="product_keyword" placeholder="Enter product keyword" required="requierd" autocomplete="off" class="form-control">
        </div>
        <!--categories-->
        <div class="from-outline mb-4 m-auto w-50">
            <select name="product_categories" id="" class="form-select">
                <option value="">select categories</option>
                <?php
                    $select_query="select * from `categories`";
                    $result=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $categories_title=$row['categories_title'];
                        $categories_id=$row['categories_id'];
                        echo"<option value='$categories_id'>$categories_title</option>";

                    }
                
                ?>
                
            </select>
        </div>
        <!--brands-->
        <div class="from-outline mb-4 m-auto w-50">
            <select name="product_brand" id="" class="form-select">
                <option value="">select brands</option>
                <?php
                    $select_query="select * from `brands`";
                    $result=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo"<option value='$brand_id'>$brand_title</option>";

                    }
                
                ?>
                
            </select>
        </div>
        <!--image1-->
        <div class="from-outline mb-4 m-auto w-50">
            <label for="product_image1" class="form lable">PRODUCT image1</label>
            <input type="file" name="product_image1" id="product_image1"  required="requierd" autocomplete="off" class="form-control">
        </div>
        <!--image2-->
        <div class="from-outline mb-4 m-auto w-50">
            <label for="product_image2" class="form lable">PRODUCT image2</label>
            <input type="file" name="product_image2" id="product_image2"  required="requierd" autocomplete="off" class="form-control">
        </div>
        <!--image3-->
        <div class="from-outline mb-4 m-auto w-50">
            <label for="product_image3" class="form lable">PRODUCT image3</label>
            <input type="file" name="product_image3" id="product_image3"  required="requierd" autocomplete="off" class="form-control">
        </div>
        <!--price-->
        <div class="from-outline mb-4 m-auto w-50">
            <label for="product_price" class="form lable">PRODUCT price</label>
            <input type="text" name="product_price" id="product_price" placeholder="Enter product price" required="requierd" autocomplete="off" class="form-control">
        </div>
        <!--button-->
        <div class="from-outline mb-4 m-auto w-50">
        <input type="submit" name="insert_product" value="insert product" class="btn btn-info mb-3 px-3">
        </div>
    </form>
    </div>
</body>
</html>