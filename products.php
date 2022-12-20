<?php

include 'connections/connect.php';



$search = '';  
if(isset($_GET["search"]))  
{  
     $search = $_GET["search"];  
    //  $char = preg_replace('#[^a-z]#i', '', $char);  
     $query = "SELECT * FROM `product` 
     LEFT JOIN photo on product.prod_id = photo.prod_id
     LEFT JOIN category on product.cat_id = category.cat_id WHERE
      name LIKE '%$search%' or  category_name LIKE '%$search%'"; 
}  
else  
{  
    $query = " SELECT * FROM `product`
    LEFT JOIN category on product.cat_id = category.cat_id
    LEFT JOIN photo on product.prod_id = photo.prod_id ";
}  
$sorting_items = mysqli_query($con, $query);



?>



<div class="row mt-4">

    <!--Items-->


    <?php
         if(mysqli_num_rows($sorting_items) > 0)  
        {
           
            while ($row = mysqli_fetch_array($sorting_items))
            {
                // echo '<h4 class="mb-3" style="font-weight: bolder;text-shadow: 2px 2px #a8b6c5;">' . $row['category_name'] . ' </h4>  ';
                $itemid = $row['prod_id'];

?>

    <!--Items-->

    <div class="col-md-3 cardd">

        <div class="card w-100 dd" style="height:100%">


            <center>
                <div class="circle">
                    <img src="<?php echo 'img/products/' . $row['photo'] ?>" alt="" class="card-img-top"
                        style="width:150px;height: 150px">
                </div>
            </center>


            <div class="card-body" style="text-align: center;">
                <a href="product_details.php?prod=<?php echo $row['prod_id'] ?>" style="text-decoration: none"> <span
                        style="text-align: center;font-weight: bold"><?php echo $row['name'] ?></span> </a><br>
                <span class="card-text" style="text-align: left;"><?php echo $row['description'] ?>
                </span><br>
                <span class="text-secondary" style="font-size: 20px;font-weight: bolder;">₱ <?php echo $row['price'] ?>
                </span> <br>
                <p></p>


            </div>
            <div class="card-footer">
                <center>
                    <a href="product_details.php?prod=<?php echo $row['prod_id'] ?>" class="btn btn-dark "
                        style="font-size: 13px;font-weight: bold;"> View Product <i class="fas fa-eye"></i></a>
                    <button class="btn btn-warning text-dark addcart" style="font-size: 13px;font-weight: bold;"
                        data-productid="<?php echo $row['prod_id'] ?>"> Add to Cart <i
                            class="fas fa-cart-plus"></i></button>
                </center>
                <?php

                $user = $_SESSION['user_id'];

                $checkifonthelist = " select * from wishlist where prod_id ='$itemid' and user_id = '$user'  ";
                $checkingitem = mysqli_query($con, $checkifonthelist);
                $thecountings = mysqli_num_rows($checkingitem);
                //  $get_id =  mysqli_insert_id($con);
                if ($thecountings >= 1)
                {
?>
                <button class="btn btn-light text-danger removewlist" data-productid="<?php echo $row['prod_id'] ?>"
                    style="font-size: 13px;font-weight: bold"><i class="fas fa-heart"></i></button>
                <?php
                }
                else
                {
?>

                <?php
                }

?>

            </div>

        </div>


    </div>

    <?php
    
}
    
        }
        else
        {
            echo '<h4 class="mb-3 text-center" style="font-weight: bolder;text-shadow: 2px 2px #a8b6c5;">Product not Found </h4>  ';
            
        }
   
?>


</div>
<?php


?>

<!---->


<script>
if ($(window).width() <= 767) {
    $('.cardd').removeClass('col-md-3').addClass('col').addClass('mt-2');


}

$('.addcart').click(function() {


    var productid = $(this).data('productid');



    $.ajax({
        url: "add&remove.php",
        method: "POST",
        data: {
            addtocart: 1,
            productid: productid
        },
        success: function(data) {

            countitemcart();
            if (data.match("alreadyadded")) {
                $.notify("Quantity added", "success");
            } else {
                $.notify("Added to Cart", "success");
            }
        }
    })

})

$('.addwishlist').click(function() {


    var productid = $(this).data('productid');



    $.ajax({
        url: "add&remove.php",
        method: "POST",
        data: {
            addwlist: 1,
            productid: productid
        },
        success: function(data) {
            getallitems();
            $.notify("Added to Wishlist", "success");
            countitemwishlist();
        }
    })
})

$('.removewlist').click(function() {
    var productid = $(this).data('productid');
    $.ajax({
        url: "add&remove.php",
        method: "POST",
        data: {
            removewlist: 1,
            productid: productid
        },
        success: function(data) {
            getallitems();
            $.notify("Removed from Wishlist", "success");
            countitemwishlist();
        }
    })
})





$('.openproductview').click(function() {
    var id = $(this).data('id');


    $.ajax({
        url: "contents.php",
        method: "POST",
        data: {
            gettheitemsview: 1,
            id: id
        },
        success: function(data) {
            $('#productsview').html(data);
        }
    })



})

function getallitems() {


    $.ajax({
        url: "categories.php",
        method: "POST",
        data: {
            getAllitems: 1
        },
        success: function(data) {
            $('#sorted_by_categories').html(data);
        }
    })


}


function countitemcart() {

    $.ajax({
        url: "contents.php",
        method: "POST",
        data: {
            cartitems: 1
        },
        success: function(data) {
            $('#countcart').text(data);
            $('#countcarts').text(data);
        }
    })




}

function countitemwishlist() {

    $.ajax({
        url: "contents.php",
        method: "POST",
        data: {
            cartwlistitems: 1
        },
        success: function(data) {
            $('#countwlist').text(data);
        }
    })

}
</script>