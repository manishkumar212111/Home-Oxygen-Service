<?php require './../header.php' ?>


<?php
    $product_id = $_GET['product_id'];
    if (!$product_id) {
        header("Location: /");
        exit;
    }
    $productList = json_decode(file_get_contents('./../Data/products.json'), true);
    $products = '';
    foreach($productList['products'] as $prod) {
        if($prod['id'] == $product_id){
            $products = $prod;
        }
    }
    // printf($products['id']);
    // echo "Product page";
?>
<link rel="stylesheet" href="/../../static/css/product.css">

<div class="body">
    <div class="content">
        <div class="product_page_banner" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('../<?php echo $products['images']?>');">
            <h2><?php echo $products['title']; ?></h2>                     		
        </div>
        
        <div class="shadow">
            <div class="row page-content">
                <div class="col-50">
                    <h2><?php echo $products['overView']['title']; ?></h2>
                    <div class="content">
                        <?php echo $products['overView']['description']; ?>
                        <a href="/contact?product=<?php echo $product_id?>" class="button">Book Now</a>
                    </div>
                </div>
                <div class="col-50">
                    <img src="<?php echo $products['downloadable_content']['image']; ?>" title="<?php echo $products['downloadable_content']['title'] ?>" />
                    <div class="content">
                        <?php echo $products['downloadable_content']['description'];?>
                        <a href="<?php echo $products['downloadable_content']['link'];?>" class="button" download><?php echo $products['downloadable_content']['download_button_text']?></a>
                    </div>        
                </div>
            </div>
        </div>

        <div class="shadow">
            <div class="row page-content">
                
                <div class="col-40">
                    <img src="<?php echo $products['specifications']['image']; ?>" title="<?php echo $products['specifications']['title'] ?>" />
                </div>
                <div class="col-60">
                    <div class="content">
                    <h2><?php echo $products['specifications']['title']; ?></h2>
                        <table class="table">
                            <?php foreach($products['specifications']['specifications'] as $spec) { ?>
                                <tr><td class="spec_key"><?php echo $spec['key']; ?></td><td class="spec_value"><?php echo $spec['value']; ?></td></tr>    
                            <?php } ?> 
                        </table>
                    </div>        
                </div>
            </div>
        </div>

        <div class="shadow">
            <div class="row page-content">
                <div class="col-100">
                    <h2><?php echo $products['advantages']['title']; ?></h2>
                    <div class="advantages">
                        <ul>
                            <?php foreach($products['advantages']['advantages'] as $adv) { ?>
                                 <li><?php echo $adv['description']; ?></li>   
                            <?php } ?>
                        </ul>
                            <!-- <a href="/solutions/provider-benefits" class="button">Read More Benefits</a> -->
                    </div>
                </div>
            </div>
        </div>

        <div class="shadow">
            <div class="page-content">
                <h2><?php echo $products['resources']['title']; ?></h2>
                <?php foreach($products['resources']['resources'] as $resource) { ?>
                    <div class = "col resources-desc">
                        <div class="col-sm-70">
                            <div class="resources">
                                <?php echo $resource['description']?>
                            </div>
                        </div>
                        <div class="col-sm-30 resources">
                            <a href="<?php echo $resource['link']?>" class="button" download>Download</a>   
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>

        <div class="youtube_video shadow">
            <h2>Our youtube Videos</h2>
            <div class="row">
                <div class="video col-100"><iframe width="auto" height="315" src="https://www.youtube.com/embed/SD4Z8dlZPd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <!-- <div class="video col-25"><iframe width="auto" height="315" src="https://www.youtube.com/embed/SD4Z8dlZPd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video col-25"><iframe width="auto" height="315" src="https://www.youtube.com/embed/SD4Z8dlZPd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video col-25"><iframe width="auto" height="315" src="https://www.youtube.com/embed/SD4Z8dlZPd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>  -->
            
            </div>    
        </div>    
    </div>
</div>



<?php require './../footer.php' ?>
