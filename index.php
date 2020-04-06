
<?php require 'header.php' ?>
<?php 
    $products = file_get_contents('./Data/products.json');
    $productList = json_decode($products, true);
?>
<div class="body">
    <div class="content">
        <div class="page_banner">                                                		
        </div>
        <div class="" id="product">
            <h2>Our Products</h2>
            <div class="row">
                <?php foreach($productList['products'] as $prod) { ?>        
                    <div class="col-25">
                        <div class="product">
                            <div class="product_box">
                                <img class="p_img" src="<?php echo $prod['images']?>" title=""></img>
                                <div class="product_short_des">
                                    <h2><?php echo $prod['title'] ?></h2>
                                    <table> 
                                        <tr><th>Units Sold</th><th>Flow</th><th>Battery  </th></tr>
                                        <tr><td><?php echo $prod['units_sold'] ?></td><td><?php echo $prod['flow'] ?></td><td><?php echo $prod['battery'] ?></td></tr>
                                    </table>
                                    <a href="/pages/productDetail.php?product_id=<?php echo $prod['id'];?>" class="button btnFullWidth">View Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>    
                
            </div>    
        </div>


        <div class="shadow">
            <div class="adv_section">
                <div class="">
                    <h2>The Perfect Oxygen Solution</h2>
                </div>
            </div>
            <div class="adv_section_desc">
                <div class="row">
                    <div class="col-70">
                        <div class="">
                            <div class="">
                                <h3>Why Convert to POCs?</h3>
                                <ul>
                                    <li>Declining Medicare reimbursement rates</li>
                                    <li>Accelerating rate of POC adoption</li>
                                    <li>Cash sale viability of POCs</li>
                                    <li>No tanks or deliveries result in decreased overhead and inventory complexity</li>
                                    <li>No service calls</li>
                                    <li>Decreases travel coordination required with oxygen tanks and less ambulatory devices</li>
                                </ul>
                                    <!-- <a href="/solutions/provider-benefits" class="button">Read More Benefits</a> -->
                            </div>
                            <div class="">
                                <h3 style="margin-top:30px">Why Inogen?</h3>
                                <ul>
                                    <li>Global market leader with more than half a million units sold worldwide in more than 45 countries</li>
                                    <li>Technology and thought leader in the POC space</li>
                                    <li>Superior product reliability and decreased maintenance costs</li>
                                    <li>More peer-reviewed and published clinical studies surrounding the product line than any other available portal oxygen equipment</li>
                                </ul>
                                <!-- <a href="/about" class="button">Get to Know Inogen</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-50">
                        <img src="https://d1io3yog0oux5.cloudfront.net/_41f6428623531fa1277d18df692443c5/inogenproviders/db/382/1823/image.png" alt="">
                    </div>

                </div>
            </div>
        </div>           



        <div class="youtube_video shadow">
            <h2>Our youtube Videos</h2>
            <div class="row">
                <!-- <div class="video col-100"><iframe width="auto" height="315" src="https://www.youtube.com/embed/SD4Z8dlZPd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div> -->
                <!-- <div class="video col-25"><iframe width="auto" height="315" src="https://www.youtube.com/embed/SD4Z8dlZPd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video col-25"><iframe width="auto" height="315" src="https://www.youtube.com/embed/SD4Z8dlZPd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                <div class="video col-25"><iframe width="auto" height="315" src="https://www.youtube.com/embed/SD4Z8dlZPd8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>  -->
            
            </div>    
        </div>
        
        <div class="shadow youtube_video">
            <div class="row" style="text-align: center;">
                <div class="col-50">
                    <h2>Find Dealers in Your City</h2>
                </div>
                <div class="col-50">
            
                    <div class="dropdown">
                        <button onclick="myFunction()" class=" button dropbtn">Select City</button>
                            <div id="myDropdown" class="dropdown-content">
                            <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                            <span onclick="handleCityClick('Jaipur')">Jaipur</span>
                            <span onclick="handleCityClick('Jodhpur')">Jodhpur</span>
                            <span onclick="handleCityClick('Kota')">Kota</span>
                            <span onclick="handleCityClick('Bikaner')">Bikaner</span>
                            <span onclick="handleCityClick('Ajmer')">Ajmer</span>
                            <span onclick="handleCityClick('Udaipur')">Udaipur</span>
                            <span onclick="handleCityClick('Bhilwara')">Bhilwara</span>
                            <span onclick="handleCityClick('Alwar')">Alwar</span>
                            <span onclick="handleCityClick('Bharatpur')">Bharatpur</span>
                            <span onclick="handleCityClick('Sri Ganganagar')">Sri Ganganagar</span>
                            <span onclick="handleCityClick('Sikar')">Sikar</span>
                            <span onclick="handleCityClick('Pali')">Pali</span>
                            <span onclick="handleCityClick('Hanumangarh')">Hanumangarh</span>
                        </div>
                    </div>
                    <div class='dealers hide' id="dealers">
                        <h3></h3>
                        <div class="row">
                            <div class="col-70">Innerpeace healthsupport solutions. 46, Muktanand Nagar, Gopalpura BP, Jaipur. Mob : 9929545206</div>
                            <div class="col-30"><a class="button" href="tel:9929545206">Call Now</a></div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>

        <div class="youtube_video shadow" id="faq">
            <h2>Frequently Asked Questions</h2>
            <button class="accordion">Section 1</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            
            <button class="accordion">Section 1</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 1</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <button class="accordion">Section 1</button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
        </div>

    </div>
</div>

<?php require 'footer.php' ?>

