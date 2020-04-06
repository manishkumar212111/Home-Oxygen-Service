<footer>
    <div class="footer">
        <div class="footer_links">
            <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">FAQs</a></li>
            </ul>
        </div>
        <div class="copyright">
            © 2020 Home Oxygen Service, All Rights Reserved.
        </div>
        <div class="clear"></div>
    </div>
</footer>

<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
        } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
        } 
    });
    }

    function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    }

    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        div = document.getElementById("myDropdown");
        a = div.getElementsByTagName("span");
        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
            } else {
            a[i].style.display = "none";
            }
        }
    }

    function handleCityClick(cityName) {
        document.getElementById("myDropdown").classList.toggle("show");
        document.getElementById('dealers').classList.remove('hide');
        document.querySelector('#dealers h3').innerHTML = "Dealers at "+ cityName;

    }

</script>