
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Home oxygen service</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="/static/css/style.css">


<div class="container">
    <div class="logo">
    <a href="/">Home Oxygen Service</a>
    </div>
    <div class="call_button fa"><a href="tel:9090909090">&#xf095;</a> </div>
    <div class="navbar">
        <div class="icon-bar" onclick="Show()">
            <i></i>
            <i></i>
            <i></i>
        </div>

        <ul id="nav-lists">
            <li class="close"><span onclick="Hide()">×</span></li>
            <li><a href="/" onclick="Hide()">Home</a></li>
            <li><a href="/pages/about.php" onclick="Hide()">About</a></li>
            <li><a href="/#product" onclick="Hide()">Products</a></li>
            <li><a href="/#faq" onclick="Hide()">FAQs</a></li>
            <li><a href="/pages/contact.php" onclick="Hide()">Contact</a></li>
            <li>
            <div class="dropdown">
                <a>Rental Products <i class="arrow down"></i></a>
                <div class="dropdown-content">
                    <a href="/pages/rental.php?product_id=1">product 1</a>
                    <a href="/pages/rental.php?product_id=2">product 2</a>
                    
                </div>
            </div>    
            <li>
        </ul>

    </div>
</div>

<script>
var navList = document.getElementById("nav-lists");
function Show() {
navList.classList.add("_Menus-show");
}

function Hide(){
navList.classList.remove("_Menus-show");
}
</script>
