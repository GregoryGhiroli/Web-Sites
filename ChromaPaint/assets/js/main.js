// Repeatly used
function $i(id) {
    return document.getElementById(id);
}
function $n(name) {
    return document.getElementsByName(name)[0];
}

// Navigation
var open = false;
function controlNav() {
    if(open) {
        $i("nav").style.display = "none";
        open = false;
    }
    else {
        $i("nav").style.display = "block";
        open = true;
    }
}

// Auto slideshow
window.setInterval(changeHeaderImg, 10000);
var i = 1;
var imgs = ["rooms_1.jpg", "rooms_2.jpg", "rooms_3.jpg", "rooms_4.jpg", "rooms_5.jpg"];
var links = ["http://architect-wiki.com/modern-interior-home-design/modern-living-room-new-house-plans-interior-decors/", "http://www.zillow.com/digs/budget-kitchens/", "http://www.zillow.com/digs/budget-kitchens/", "http://www.zillow.com/digs/budget-kitchens/", "http://almlaeb.com/table-living-room/living-room-wiki-inspirational-decor-on-living-design-ideas/"];
function changeHeaderImg() {
    if(i == imgs.length)
        i = 0;
    $i("bkgrdimg").style.background = "url(assets/img/" + imgs[i] + ") no-repeat center center";
    $i("bkgrdimg").style.backgroundSize = "cover";
    $i("imageLink").href = links[i];
    i++;
}

// Store
function changeColor(toChange) {
    $i("backgroundColor").style.backgroundColor = "#" + toChange;
    $i("colorToChange").innerHTML = toChange;
    $n("color").value = toChange;
}
function editCost(elem, cost) {
    var totalCost = $i("totalCost").innerHTML;
    totalCost = totalCost.replace("$", "");
    var tCost = parseFloat(totalCost);
    if(elem.checked)
        $i("totalCost").innerHTML = "$" + (tCost + cost) + ".00";
    else
        $i("totalCost").innerHTML = "$" + (tCost - cost) + ".00";
}
function shopValidate() {
    if($n("name").value.length <= 100)
        if($n("street").value.length <= 100)
            if($n("city").value.length <= 50)
                if($n("zipcode").value.length == 5)
                    return true;
    alert("Not all inputs filled out correctly!\nStreet must be 100 characters or less!\nCity must be 50 characters or less!\nZipcode must be in ##### format!");
    return false;
}
function shopSuccess() {
    alert("Thank you for shopping! It has\nbeen stored in the database!");
}

// Contact
function contactValidate() {
    if($n("name").value.length <= 100)
        if($n("email").value.length <= 50)
            if($n("telephone").value.length == 10)
                if($n("subject").value.length <= 25)
                    if($n("message").value.length <= 255)
                        return true;
    alert("Not all inputs filled out correctly!\nName must be 100 characters or less!\nEmail must be 50 characters or less!\nTelephone must be in ########## format!\nSubject must be 25 characters or less!\nMessage must be 255 characters or less!");
    return false;
}
function contactSuccess() {
    alert("Thank you for contacting us!\nWe will contact you soon!");
}