<?php

function component($productname, $productprice,$productdescription, $productimg, $productid){
    $element = "

    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"pharmacies.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"upload\\$productimg\" alt=\"Image1\" height=\"50 px\"   class=\"img-fluid card-img-top\" >
                          
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$productname</h5>
        
                            <p class=\"card-text\">
                                $productdescription
                            </p>
                            <h5>
                                <span class=\"price\">$productprice LE</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$productid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}


function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
                    <div class=\"\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                            <img src=\"upload\\$productimg\" alt=\"Image1\" height=\"100\"   class=\"img-fluid card-img-top\" >

                                
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">$productprice LE</h5>
                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                <div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
function doctorsCard($doctorname, $price,$specialization,$doctordescription,$adress,$doctorimg,$doctorid){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"index.php\" method=\"post\">
                    <div class=\"card shadow\">
                        <div>
                            <img src=\"upload\\$doctorimg\" alt=\"Image1\" height=\"100\"   class=\"img-fluid card-img-top\" >
                          
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$doctorname</h5>
                            <h5 class=\"card-title\">$specialization</h5>
                            <h5 class=\"card-title\">$adress</h5>
                            <p class=\"card-text\">
                                $doctordescription
                            </p>
                            <h5>
                                <span class=\"price\">$price LE</span>
                            </h5>
                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='doctors_id' value='$doctorid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}