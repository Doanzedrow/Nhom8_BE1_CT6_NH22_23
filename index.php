<?php include 'header.php' ?>

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- shop -->
                <?php foreach($get3HotTop6Products as $value):
					foreach($getAllProtypes as $v):
						if($value['type_id'] == $v['type_id']):
				?>
                <div class="col-md-4 col-xs-6">
                    <div class="shop">
                        <div class="shop-img">
                            <img src="./img/<?php echo $value['image'] ?>" alt="">
                        </div>
                        <div class="shop-body">
                            <h3><?php echo $v['type_name'] ?><br>Collection</h3>
                            <a href="product.php?id=3" class="cta-btn">Shop now <i
                                    class="fa fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <?php endif; endforeach; endforeach; ?>
                <!-- /shop -->


            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">New Products</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab1" class="tab-pane active">
                                <div class="products-slick" data-nav="#slick-nav-1">
                                    <?php foreach($getAllNewProducts as $v):
                                        foreach($getAllProtypes as $va):
                                            if($va['type_id'] == $v['type_id']): ?>
                                    <!-- product -->
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="./img/<?php echo $v['image'] ?>" alt=""
                                                style="width:263px; height:300px">
                                            <div class="product-label">
                                                <span class="sale">-<?php echo $v['discount'] ?>%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category"><?php echo $va['type_name'] ?></p>
                                            <h3 class="product-name"><a
                                                    href="<?php echo 'product.php?id='.$v['id'] ?>"><?php echo substr($v['name'],0,23); ?></a>
                                            </h3>
                                            <h4 class="product-price">
                                                <?php echo  $v['price'] - $v['price'] * number_format($v['discount']) /100 ?>
                                                <del class="product-old-price"><?php echo $v['price'] ?></del>
                                            </h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                               <button class="add-to-wishlist"><a href="wishlist.php?id=<?php echo $v['id'] ?>"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></a></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span
                                                        class="tooltipp">quick view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="cart.php?id=<?php echo $v['id'] ?>"><button type="submit"
                                                    class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                                    cart</button></a>
                                        </div>

                                    </div>
                                    <?php endif; endforeach; endforeach; ?>
                                    <!-- /product -->
                                </div>
                                <div id="slick-nav-1" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->



    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <!-- section title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="title">Top selling</h3>
                    </div>
                </div>
                <!-- /section title -->

                <!-- Products tab & slick -->
                <div class="col-md-12">
                    <div class="row">
                        <div class="products-tabs">
                            <!-- tab -->
                            <div id="tab2" class="tab-pane fade in active">
                                <div class="products-slick" data-nav="#slick-nav-2">
                                    <!-- product -->
                                    <?php foreach($get5TopSellingProducts as $v): ?>
                                    <div class="product">
                                        <div class="product-img" style="width:263px; height:300px">
                                            <img src="./img/<?php echo $v['image'] ?>" alt="">
                                            <div class="product-label">
                                                <span class="sale">-<?php echo $v['discount'] ?>%</span>
                                                <span class="new">NEW</span>
                                            </div>
                                        </div>
                                        <div class="product-body">
                                            <p class="product-category">Category</p>
                                            <h3 class="product-name"><a
                                                    href="<?php echo 'product.php?id='.$v['id'] ?>"><?php echo substr($v['name'],0,23) ?></a>
                                            </h3>
                                            <h4 class="product-price">
                                                <?php echo $v['price'] - $v['price'] * number_format($v['discount']) /100 ?>
                                                <del class="product-old-price"><?php echo $v['price'] ?></del>
                                            </h4>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product-btns">
                                            <button class="add-to-wishlist"><a href="wishlist.php?id=<?php echo $v['id'] ?>"><i class="fa fa-heart-o"></i><span
                                                        class="tooltipp">add to wishlist</span></a></button>
                                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span
                                                        class="tooltipp">add to compare</span></button>
                                                <button class="quick-view"><i class="fa fa-eye"></i><span
                                                        class="tooltipp">quick view</span></button>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="cart.php?id=<?php echo $v['id'] ?>"><button type="submit"
                                                    class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to
                                                    cart</button></a>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                    <!-- /product -->



                                </div>
                                <div id="slick-nav-2" class="products-slick-nav"></div>
                            </div>
                            <!-- /tab -->
                        </div>
                    </div>
                </div>
                <!-- /Products tab & slick -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-3" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-3">

                        <div>
                            <?php foreach($getAllTopSellingProducts as $v): 
                                    if($v['type_id'] == 1):?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/<?php echo $v['image'] ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a
                                            href="<?php echo 'product.php?id='.$v['id'] ?>"><?php echo $v['name'] ?></a>
                                    </h3>
                                    <h4 class="product-price"><?php echo $v['price'] ?> <del
                                            class="product-old-price"><?php echo $v['price']*30/100 ?></del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <?php endif; endforeach; ?>
                        </div>

                    </div>

                </div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-4" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-4">
                        <div>
                            <?php foreach($getAllTopSellingProducts as $v):
                                if($v['type_id'] == 2): ?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/<?php echo $v['image'] ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a
                                            href="<?php echo 'product.php?id='.$v['id'] ?>"><?php echo $v['name'] ?></a>
                                    </h3>
                                    <h4 class="product-price"><?php echo $v['price'] ?> <del
                                            class="product-old-price"><?php echo $v['price']*30/100 ?></del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <?php endif; endforeach; ?>
                        </div>

                    </div>
                </div>

                <div class="clearfix visible-sm visible-xs"></div>

                <div class="col-md-4 col-xs-6">
                    <div class="section-title">
                        <h4 class="title">Top selling</h4>
                        <div class="section-nav">
                            <div id="slick-nav-5" class="products-slick-nav"></div>
                        </div>
                    </div>

                    <div class="products-widget-slick" data-nav="#slick-nav-5">

                        <div>
                            <?php foreach($getAllTopSellingProducts as $v):
                                if($v['type_id'] == 5): ?>
                            <!-- product widget -->
                            <div class="product-widget">
                                <div class="product-img">
                                    <img src="./img/<?php echo $v['image'] ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Category</p>
                                    <h3 class="product-name"><a
                                            href="<?php echo 'product.php?id='.$v['id'] ?>"><?php echo $v['name'] ?></a>
                                    </h3>
                                    <h4 class="product-price"><?php echo $v['price'] ?> <del
                                            class="product-old-price"><?php echo $v['price']*30/100 ?></del></h4>
                                </div>
                            </div>
                            <!-- /product widget -->

                            <?php endif; endforeach; ?>
                        </div>


                    </div>
                </div>

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->

    <?php include 'footer.php' ?>