<div class="col-sm-3 collection-filter">

    <!-- side-bar colleps block stat -->
    <div class="collection-filter-block">

        <!-- brand filter start -->
        <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                    aria-hidden="true"></i> back</span></div>
        <div class="collection-collapse-block open">
            <h3 class="collapse-block-title">Category</h3>
            <div class="collection-collapse-block-content">
                <div class="collection-brand-filter pt-3">

                    <?php  
                        if ( isset($_GET['gen']) ) {
                            $cateId = $_GET['gen'];

                            $sql = "SELECT sc.*, c.name AS category_name FROM subcategory sc JOIN category c ON sc.cat_id = c.id WHERE sc.status = 1 AND sc.cat_id = '$cateId' ORDER BY sc.id ASC";
                            $query = mysqli_query($db, $sql);

                            while ($row = mysqli_fetch_assoc($query)) {
                                $subid      = $row['id'];
                                $name       = $row['name'];

                                ?>
                                <div class="d-flex align-items-center">
                                    <i class="fa-solid fa-caret-right"></i>
                                    <h6> <a href="" class="form-check-label ps-2 text-dark fs-6"><?php echo $name; ?></a></h6>
                                </div>
                                <?php
                            }
                        }
                    ?>

                    

                </div>
            </div>
        </div>

        <!-- price filter start here -->
        <div class="collection-collapse-block border-0 open">
            <h3 class="collapse-block-title">price</h3>
            <div class="collection-collapse-block-content">
                <div class="wrapper mt-3">
                    <div class="range-slider">
                        <input type="text" class="js-range-slider" value="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- silde-bar colleps block end here -->

    <!-- side-bar single product slider start -->
    <div class="theme-card">
        <h5 class="title-border">new product</h5>
        <div class="offer-slider slide-1">
            <?php  
                $sql = "SELECT * FROM products WHERE cat_id='$cateId' ORDER BY id DESC";
                $query = mysqli_query($db, $sql);

                while($row = mysqli_fetch_assoc($query)) {
                    $id             = $row['id'];
                    $prd_code       = $row['prd_code'];
                    $name           = $row['name'];
                    $price          = $row['price'];
                    $dsc_price      = $row['dsc_price'];
                    $img1           = $row['img1'];
                    ?>
                    <div>
                        <div class="media">

                            <a href="details.php?did=<?php echo $id; ?>"> <?php  
                                if ( !empty($img1) ) {
                                    echo '<img src="admin/assets/images/products/' . $img1 . '" alt="" class="img-fluid blur-up lazyload">';
                                }
                                else { ?>
                                    <img
                                src="assets/images/pro3/36.jpg"
                                 alt="">
                               <?php }
                            ?></a>
                            <div class="media-body align-self-center">
                                <span class="text-secondary"><?php echo $prd_code; ?></span>
                                <a href="details.php?did=<?php echo $id; ?>">
                                    <h6 class="text-dark mb-0"><?php echo $name; ?></h6>
                                </a>
                                <h4>BDT <?php echo $dsc_price; ?><br> <span><del> ৳ <?php echo $price; ?></del></span></h4>
                            </div>
                        </div>
                    </div>
                    <?php
                }

            ?>
        </div>
    </div>
    <!-- side-bar single product slider end -->
    <!-- side-bar banner start here -->
    <div class="collection-sidebar-banner">
        <?php  
            $sql = "SELECT * FROM products WHERE cat_id='$cateId' ORDER BY id DESC LIMIT 1";
            $query = mysqli_query($db, $sql);

            while($row = mysqli_fetch_assoc($query)){
                $id   = $row['id'];
                $img3   = $row['img3'];
                ?>
                <a href="details.php?did=<?php echo $id; ?>">
                    <?php  
                        if ( !empty($img3) ) {
                            echo '<img src="admin/assets/images/products/' . $img3 . '" alt="" class="img-fluid blur-up lazyload">';
                        }
                        else { ?>
                            <img src="assets/images/pro3/36.jpg" alt="">
                        <?php }
                    ?>
                </a>
                <?php
            }
        ?>

                
    </div>
    <!-- side-bar banner end here -->
</div>