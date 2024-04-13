<?php
include('./includes/connect.php');

function getproducts()
{
    global $con;
    if(!isset($_GET['categories']))
    {
        if(!isset($_GET['brand']))
        {
    $select_query = "SELECT * FROM `product_info` ORDER BY rand() LIMIT 0,9";
    $result = mysqli_query($con, $select_query);
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_prices'];
        $categories_id = $row['categories_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                        <a href='product_detail.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
    }
    }
}
}


function get_all_product()
{
    global $con;
    if(!isset($_GET['categories']))
    {
        if(!isset($_GET['brand']))
        {
    $select_query = "SELECT * FROM `product_info` ORDER BY rand() ";
    $result = mysqli_query($con, $select_query);
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_prices'];
        $categories_id = $row['categories_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                        <a href='product_detail.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                        </div>
                </div>
            </div>";
    }
    }
}
}
function get_uniq_categories()
{
    global $con;
    if(isset($_GET['categories']))
    {
        $categories_id=$_GET['categories'];
    $select_query = "SELECT * FROM `product_info` where categories_id=$categories_id";
    $result = mysqli_query($con, $select_query);
    $num_of_row=mysqli_num_rows($result);
    if($num_of_row==0)
    {
        echo"<h2 class='text-center text-danger'>No stock for this category.</h2>";
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_prices'];
        $categories_id = $row['categories_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                        <a href='product_detail.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
    }
    }
}
function get_uniq_brands()
{
    global $con;
    if(isset($_GET['brand']))
    {
        $brand_id=$_GET['brand'];
    $select_query = "SELECT * FROM `product_info` where brand_id=$brand_id";
    $result = mysqli_query($con, $select_query);
    $num_of_row=mysqli_num_rows($result);
    if($num_of_row==0)
    {
        echo"<h2 class='text-center text-danger'>No stock for this brand.</h2>";
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_price = $row['product_prices'];
        $categories_id = $row['categories_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                        <a href='product_detail.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>";
    }
    }
}

    




function getbrands()
{
    global $con;
    $select_brand="select * from `brands`";
            $result=mysqli_query($con,$select_brand);
            while($row_data=mysqli_fetch_assoc($result))
            {
            $brand_title=$row_data['brand_title'];
            $brand_id=$row_data['brand_id'];
            echo"<li class='nav-item' >
            <a href='index.php?brand=$brand_id' class='nav-link text-center text-light'>$brand_title</a>

            </li>";
            }
}
function getcategories()
{
    global $con;
    $select_categories="select * from `categories`";
            $result=mysqli_query($con,$select_categories);
            while($row_data=mysqli_fetch_assoc($result))
            {
            $categories_title=$row_data['categories_title'];
            $categories_id=$row_data['categories_id'];
            echo"<li class='nav-item' >
            <a href='index.php?categories=$categories_id' class='nav-link text-center text-light'>$categories_title</a>

            </li>";
            }
}

/*
function search_products()
{
    global $con;
    if(isset($_GET['search_data_product']))
    {
        $search_data_value = $_GET['search_data_product'];
    
        $search_query = "SELECT * FROM `product_info` WHERE product_keyword LIKE '%$search_data_value%'";
        $result = mysqli_query($con, $search_query);
        $num_of_row=mysqli_num_rows($result);
    if($num_of_row==0)
    {
        echo"<h2 class='text-center text-danger'>No result match.No product found in this categories.</h2>";
    }

        while ($row = mysqli_fetch_assoc($result))
        {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_price'];
            $categories_id = $row['categories_id'];
            $brand_id = $row['brand_id'];

            echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <a href='#' class='btn btn-info'>Add to cart</a>
                            <a href='#' class='btn btn-secondary'>View more</a>
                        </div>
                    </div>
                </div>";
        }
    }
    
}
*/
function search_products()
{
    global $con;

    if (isset($_GET['search_data'])) {
        $search_data_value = $_GET['search_data'];
        // Use backticks for column names, and add % around the search term for wildcard matching
        $search_product_query = "SELECT * FROM `product_info` WHERE `product_keyword` LIKE '%$search_data_value%'";
        $result = mysqli_query($con, $search_product_query);
        $num_of_row=mysqli_num_rows($result);
    if($num_of_row==0)
    {
        echo"<h2 class='text-center text-danger'>No data found .No data avaliable  from this categories.</h2>";
    }

        while ($row = mysqli_fetch_assoc($result)) {
            $product_id = $row['product_id'];
            $product_title = $row['product_title'];
            $product_description = $row['product_description'];
            $product_image1 = $row['product_image1'];
            $product_price = $row['product_prices'];
            $categories_id = $row['categories_id'];
            $brand_id = $row['brand_id'];

            echo "<div class='col-md-4 mb-2'>
                    <div class='card'>
                        <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p class='card-text'>$product_description</p>
                            <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                            <a href='product_detail.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                        </div>
                    </div>
                </div>";
        }
    }
}

function view_product()
{
    global $con;

    if(!isset($_GET['$product_id']))
    { 
    if(!isset($_GET['categories']))
    {
        if(!isset($_GET['brand']))
        {
            $product_id=$_GET['product_id'];
    $select_query = "SELECT * FROM `product_info` where product_id=$product_id ";
    $result = mysqli_query($con, $select_query);
    
    while ($row = mysqli_fetch_assoc($result)) {
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['product_prices'];
        $categories_id = $row['categories_id'];
        $brand_id = $row['brand_id'];
        echo "<div class='col-md-4 mb-2'>
                <div class='card'>
                    <img src='./admin_area/product_image/$product_image1' class='card-img-top' alt='$product_title'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <a href='index.php?add_to_cart=$product_id' class='btn btn-info'>Add to cart</a>
                        <a href='product_detail.php?product_id=$product_id' class='btn btn-secondary'>View more</a>
                    </div>
                </div>
            </div>
            <div class='col-md-8'>
        <div class='row'>
            <div class='col-md-12'>
                <h4 class='text-center text-info md-5'>Related product</h4>

            </div>
            <div class='col-md-6'>
            <img src='./admin_area/product_image/$product_image2' class='card-img-top' alt='$product_title'>
            </div>
            <div class='col-md-6'>
            <img src='./admin_area/product_image/$product_image3' class='card-img-top' alt='$product_title'>
            </div>
        </div>
        <!--related to cart-->
        
    </div>";
    
         
        }
    }
}
}
}
//ip address function
function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }  
//whether ip is from the remote address  
    else{  
            $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}  
//$ip = getIPAddress();  
//echo 'User Real IP Address - '.$ip;  
function cart(){
if(isset($_GET['add_to_cart']))
{
    global $con;
    $ip=getIPAddress();
    $get_product_id=$_GET['add_to_cart'];
    $select_query="select * from `cart_details`where ipaddress=$ip and product_id=$get_product_id"; 
    $result = mysqli_query($con, $select_query);
        $num_of_row=mysqli_num_rows($result);
    if($num_of_row>0)
    {
        echo"<script>alert(this item is all ready present in data)</script>";
    }
}

}
?>
