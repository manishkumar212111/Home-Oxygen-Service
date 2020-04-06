<?php require './../header.php' ?>

<?php 
    $rental_product_id = $_GET['product_id'];
    if (!$rental_product_id) {
        header("Location: /");
        exit;
    }
    $productList = json_decode(file_get_contents('./../Data/rental.json'), true);
    $products = '';
    foreach($productList['products'] as $prod) {
        if($prod['id'] == $rental_product_id){
            $products = $prod;
        }
    }
?>
<link rel="stylesheet" href="/../../static/css/contact.css">

<div class="body">
    <div class="content shadow">
        <div class="row">
            <div class="col-50">
                <img src="<?php echo $products['image'];?>">
                </img>
            </div>
            <div class="col-50 rental">
                <h2><?php echo $products['title'];?></h2>
                <ul>
                <?php                    
                    foreach($products['prices'] as $prod) {?>   
                    <li class="<?php echo $prod['plan'] == 'short' ? 'active' : ''; ?>"" onclick='handletabClick(this,"<?php echo $prod["plan"]; ?>")'><span><?php echo $prod['plan']; ?></span></li>
                    <?php } ?>
                </ul>
                <div class="tab-content <?php echo $products['prices'][0]['plan']; ?> currentActive">
                    <table class="table">
                        <tbody >
                            <tr>
                                <th scope="row">1</th>
                                <th>Rent per day</th>
                                <th id="per_day_cost">₹<?php echo $products['prices'][0]['per_day_cost']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <th>Minimum Rental Value</th>
                                <th id="minimum_rental_value">₹<?php echo $products['prices'][0]['minimum_rental_value']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <th>Lock-in period</th>
                                <th id = "lock_in_period"><?php echo $products['prices'][0]['lock_in_period']; ?></th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="center extra_section">
                        <span>Selected Plan : <span class="inner"><?php echo $products['prices'][0]['plan'];?></span> </span>
                        <span>Refundable Deposit:<span class="inner"> ₹<?php echo $products['prices'][0]['refundable_amount'];?></span></span>
                        <span>Shipping Charges:  <span class="inner">₹<?php echo $products['prices'][0]['shipping_fee']; ?></span>

                    </div>
                    
                </div>
                <div class="tab-content <?php echo $products['prices'][1]['plan'];?> hide">
                    <table class="table">
                
                    <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <th>Rent per day</th>
                                    <th id="per_day_cost">₹<?php echo $products['prices'][1]['per_day_cost']; ?></th>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <th>Minimum Rental Value</th>
                                    <th id="minimum_rental_value">₹<?php echo $products['prices'][1]['minimum_rental_value']; ?></th>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <th>Lock-in period</th>
                                    <th id = "lock_in_period"><?php echo $products['prices'][1]['lock_in_period']; ?></th>
                                </tr>
                            </tbody>
                    </table>
                    <div class="center extra_section">
                        <span>Selected Plan : <span class="inner"><?php echo $products['prices'][1]['plan'];?></span> </span>
                        <span>Refundable Deposit:<span class="inner"> ₹<?php echo $products['prices'][1]['refundable_amount'];?></span></span>
                        <span>Shipping Charges:  <span class="inner">₹<?php echo $products['prices'][1]['shipping_fee']; ?></span>

                    </div>

                </div>
                <div class="tab-content <?php echo $products['prices'][2]['plan'];?> hide">
                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <th>Rent per day</th>
                                <th id="per_day_cost">₹<?php echo $products['prices'][2]['per_day_cost']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <th>Minimum Rental Value</th>
                                <th id="minimum_rental_value">₹<?php echo $products['prices'][2]['minimum_rental_value']; ?></th>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <th>Lock-in period</th>
                                <th id = "lock_in_period"><?php echo $products['prices'][2]['lock_in_period']; ?></th>
                            </tr>
                        </tbody>
                    </table>
                    <div class="center extra_section">
                        <span>Selected Plan : <span class="inner"><?php echo $products['prices'][2]['plan'];?></span> </span>
                        <span>Refundable Deposit:<span class="inner"> ₹<?php echo $products['prices'][2]['refundable_amount'];?></span></span>
                        <span>Shipping Charges:  <span class="inner">₹<?php echo $products['prices'][2]['shipping_fee']; ?></span>

                    </div>
                </div> 
            </div>
        </div>
        </div>
        <div class="content shadow">
            <div class="padding-25">
                <h3 class="marg-l-30">Advantages of <?php echo $products['title'];?></h3>
                <ul>
                    <?php foreach($products['advantages'] as $adv) {?> 
                        <li style="list-style:circle;"><?php echo $adv ?></li>
                    <?php } ?>
                </ul>
            </div>   
        </div>
    
</div>

<?php 

    $sticky_mobile_number = '9878786767';
    include './../sticky-footer.php';
    require './../footer.php';

?>

<script>
    function handletabClick(event , plan){
        console.log(event)
        // toggle active class of current tabs
        document.querySelector('.rental .active').classList.toggle('active');
        event.classList.add('active');


        document.querySelector('.currentActive').classList.toggle('hide');
        document.querySelector('.currentActive').classList.remove('currentActive');
        document.querySelector('.'+plan).classList.toggle('hide');
        document.querySelector('.'+plan).classList.add('currentActive');
        
        document.getElementById('selected_plan').innerHTML = plan;


    }
</script>
