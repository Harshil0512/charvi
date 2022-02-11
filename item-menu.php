<div class="container mw-75 my-4 nav-justified">
    <ul class="nav nav-tabs">
        <li class="nav-item tab-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#laddu">Laddu</a>
        </li>
        <li class="nav-item tab-item">
            <a class="nav-link" data-bs-toggle="tab" href="#snacks">Snacks</a>
        </li>
        <li class="nav-item tab-item">
            <a class="nav-link" data-bs-toggle="tab" href="#papad">Papad</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
    <div class="tab-pane container active" id="laddu">
        <div class="d-flex flex-wrap justify-content-center">
            <?php
                require 'dbconnection.php';
                $sql = "SELECT `PRODUCT_ID`, `PRODUCT_NAME`, `PRICE`, `DESCRIPTION`, `QUANTITY`, `IMAGE` FROM product WHERE `CATEGORY_ID` = (SELECT CATEGORY_ID FROM category WHERE category_name = 'LADDU') LIMIT 9";
                $result = mysqli_query($con,$sql);
                if($result)
                {
                    while(($row=mysqli_fetch_assoc($result))!=null)
                    {
                        $img = $row['IMAGE'];
                        $name = $row['PRODUCT_NAME'];
                        $price = $row['PRICE'];
                        $qty = $row["QUANTITY"];
                        $id = $row['PRODUCT_ID'];
                        echo "<div class='card m-3' style='width:16rem;'>
                                <img src='{$product_images}{$img}' class='card-img-top'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$name}</h5>
                                    <p class='card-text mb-0'>Price : {$price} Rs / Pkt</p>
                                    <p class='card-text mt-0'>Quantity : {$qty} gm</p>
                                    <a href='{$id}' class='btn btn-primary'>Buy Now <i class='fas fa-shopping-cart'></i></a>
                                </div>
                            </div>";

                    }
                }
                else
                {
                    echo "error";
                }    
            ?>
        </div>
    </div>
    <div class="tab-pane container fade" id="snacks">
        <div class="d-flex flex-wrap justify-content-center">
            <?php
                require 'dbconnection.php';
                $sql = "SELECT `PRODUCT_ID`, `PRODUCT_NAME`, `PRICE`, `DESCRIPTION`, `QUANTITY`, `IMAGE` FROM product WHERE `CATEGORY_ID` = (SELECT CATEGORY_ID FROM category WHERE category_name = 'SNACKS') LIMIT 9";
                $result = mysqli_query($con,$sql);
                if($result)
                {
                    while(($row=mysqli_fetch_assoc($result))!=null)
                    {
                        $img = $row['IMAGE'];
                        $name = $row['PRODUCT_NAME'];
                        $price = $row['PRICE'];
                        $qty = $row["QUANTITY"];
                        $id = $row['PRODUCT_ID'];
                        echo "<div class='card m-3' style='width:16rem;'>
                                <img src='{$product_images}{$img}' class='card-img-top'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$name}</h5>
                                    <p class='card-text mb-0'>Price : {$price} Rs / Pkt</p>
                                    <p class='card-text mt-0'>Quantity : {$qty} gm</p>
                                    <a href='{$id}' class='btn btn-primary'>Buy Now <i class='fas fa-shopping-cart'></i></a>
                                </div>
                            </div>";

                    }
                }
                else
                {
                    echo "error";
                }    
            ?>
        </div>
    </div>
    <div class="tab-pane container fade" id="papad">
        <div class="d-flex flex-wrap justify-content-center">
            <?php
                require 'dbconnection.php';
                $sql = "SELECT `PRODUCT_ID`, `PRODUCT_NAME`, `PRICE`, `DESCRIPTION`, `QUANTITY`, `IMAGE` FROM product WHERE `CATEGORY_ID` = (SELECT CATEGORY_ID FROM category WHERE category_name = 'PAPAD') LIMIT 9";
                $result = mysqli_query($con,$sql);
                if($result)
                {
                    while(($row=mysqli_fetch_assoc($result))!=null)
                    {
                        $img = $row['IMAGE'];
                        $name = $row['PRODUCT_NAME'];
                        $price = $row['PRICE'];
                        $qty = $row["QUANTITY"];
                        $id = $row['PRODUCT_ID'];
                        echo "<div class='card m-3' style='width:16rem;'>
                                <img src='{$product_images}{$img}' class='card-img-top'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$name}</h5>
                                    <p class='card-text mb-0'>Price : {$price} Rs / Pkt</p>
                                    <p class='card-text mt-0'>Quantity : {$qty} gm</p>
                                    <a href='{$id}' class='btn btn-primary'>Buy Now <i class='fas fa-shopping-cart'></i></a>
                                </div>
                            </div>";

                    }
                }
                else
                {
                    echo "error";
                }    
            ?>
        </div>
    </div>
    </div>
</div>