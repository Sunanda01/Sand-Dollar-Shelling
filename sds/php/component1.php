<!--Final doc-->
<?php

function component1($productname, $productprice, $productimg, $id){
        //$productimg=imagescale( $productimg , 20, 20)
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\" style=\"width:31%;margin-bottom:10px;margin-right:10px;border:1px solid #1affff;border-radius:2px;padding:8px\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"$productimg\" style=\"width:200px; margin-bottom:0px\" alt=\"Image1\" class=\"img-fluid card-img-top\">
                        </div>
                        <h5 style=\"margin-block-start: 0;    margin-block-end:0\" >$productname</h5>
                        
                        <h5 style=\"margin-block-start: 0;    margin-block-end:0\">
                                <span class=\"price\">₹$productprice</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\" disabled>Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                            <input type='hidden' name='id' value='$id'>
                        
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $id){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$id\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">₹$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>
                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
















