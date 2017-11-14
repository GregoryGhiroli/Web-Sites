    <?php include "assets/php/header.php"; ?>
    <body>
        <?php 
            include "assets/php/navbar.php"; 
            
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                // Variables
                $color = $_POST['color'];
                $name = $_POST['name'];
                $street = $_POST['street'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zipcode = $_POST['zipcode'];
                $pickBestColor = $_POST['pickBestColor'];
                $paintBrush = $_POST['paintBrush'];
                $tape = $_POST['tape'];
                $sandpapers = $_POST['sandpapers'];
                $safteyEquipment = $_POST['safteyEquipment'];
                $paintersWear = $_POST['paintersWear'];
                $hireContractor = $_POST['hireContractor'];
                $date = $_POST['date'];
                $cost = 20.00;
                
                if($pickBestColor == 'on')
                    $cost += 30.00;
                else
                    $pickBestColor = 'off';
                if($paintBrush  == 'on')
                    $cost += 5.00;
                else
                    $paintBrush = 'off';
                if($tape == 'on')
                    $cost += 5.00;
                else
                    $tape = 'off';
                if($sandpapers == 'on')
                    $cost += 5.00;
                else
                    $sandpapers = 'off';
                if($safetyEquipment == 'on')
                    $cost += 20.00;
                else
                    $safetyEquipment = 'off';
                if($paintersWear == 'on')
                    $cost += 20.00;
                else
                    $paintersWear = 'off';
                if($hireContractor == 'on')
                    $cost += 50.00;
                else
                    $hireContractor = 'off';
                
                // Database Connection
                $host = "localhost";
                $user = "root";
                $pass = "manhattan07";
                $db = "webandmobile";
                
                // Opens the conection
                $con = new mysqli($host, $user, $pass, $db);
                if($con->connect_error)
                    die("Connection failed: " . $con->connect_error);
                else {
                    if($con->query("INSERT INTO shop VALUES ('$color', '$name', '$street', '$city', '$state', '$zipcode', '$pickBestColor', '$paintBrush', '$tape', '$sandpapers', '$safteyEquipment', '$paintersWear', '$hireContractor', '$date', '$cost');"))
                        echo "<script>shopSuccess();</script>";
                    else
                        die("Error while trying to insert information: " . $con->error);
                }
                $con->close();
            }
        ?>
        <section id="store">
            <h1>Store</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return shopValidate();" method="post">
                <div class="halfPercent">
                    <div id="backgroundColor" style="background-color: #ffffff">
                        <img src="assets/img/roomTest.png" title="An example of the room with your color choice" alt="Example Room Picture" />
                    </div>
                </div>
                <div class="halfPercent">
                    <div id="colors">
                        <h3>Color: #<span id="colorToChange">FFFFFF</span><input type="hidden" value="FFFFFF" name="color"></h3>
                        <button style="background-color: #F44336" onClick="changeColor('F44336'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #B71C1C" onClick="changeColor('B71C1C'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #FF1744" onClick="changeColor('FF1744'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #D50000" onClick="changeColor('D50000'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #E91E63" onClick="changeColor('E91E63'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #880E4F" onClick="changeColor('880E4F'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #F50057" onClick="changeColor('F50057'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #C51162" onClick="changeColor('C51162'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #9C27B0" onClick="changeColor('9C27B0'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #4A148C" onClick="changeColor('4A148C'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #D500F9" onClick="changeColor('D500F9'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #AA00FF" onClick="changeColor('AA00FF'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #673AB7" onClick="changeColor('673AB7'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #311B92" onClick="changeColor('311B92'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #6200EA" onClick="changeColor('6200EA'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #3F51B5" onClick="changeColor('3F51B5'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #1A237E" onClick="changeColor('1A237E'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #2196F3" onClick="changeColor('2196F3'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #0D47A1" onClick="changeColor('0D47A1'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #03A9F4" onClick="changeColor('03A9F4'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #01579B" onClick="changeColor('01579B'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #00BCD4" onClick="changeColor('00BCD4'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #006064" onClick="changeColor('006064'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #00B8D4" onClick="changeColor('00B8D4'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #009688" onClick="changeColor('009688'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #004D40" onClick="changeColor('004D40'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #00BFA5" onClick="changeColor('00BFA5'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #4CAF50" onClick="changeColor('4CAF50'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #1B5E20" onClick="changeColor('1B5E20'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #00C853" onClick="changeColor('00C853'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #8BC34A" onClick="changeColor('8BC34A'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #33691E" onClick="changeColor('33691E'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #64DD17" onClick="changeColor('64DD17'); return false;"><img src="assets/img/cart_dark.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #CDDC39" onClick="changeColor('CDDC39'); return false;"><img src="assets/img/cart_dark.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #827717" onClick="changeColor('827717'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #AEEA00" onClick="changeColor('AEEA00'); return false;"><img src="assets/img/cart_dark.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #FFEB3B" onClick="changeColor('FFEB3B'); return false;"><img src="assets/img/cart_dark.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #F57F17" onClick="changeColor('F57F17'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #FF5722" onClick="changeColor('FF5722'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #BF360C" onClick="changeColor('BF360C'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #795548" onClick="changeColor('795548'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #3E2723" onClick="changeColor('3E2723'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #9E9E9E" onClick="changeColor('9E9E9E'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #212121" onClick="changeColor('212121'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #607D8B" onClick="changeColor('607D8B'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #263238" onClick="changeColor('263238'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #000000" onClick="changeColor('000000'); return false;"><img src="assets/img/cart_light.png" title="Add to Cart" alt="Shopping Cart" /></button>
                        <button style="background-color: #FFFFFF" onClick="changeColor('FFFFFF'); return false;"><img src="assets/img/cart_dark.png" title="Add to Cart" alt="Shopping Cart" /></button>
                    </div>
                </div>
                <div class="halfPercent">
                    <div id="form">
                        <label>
                            <span>First and Last name:</span>
                            <input type="text" name="name" placeholder="John Smith..." required>
                        </label>
                        <label>
                            <span>Street Address:</span>
                            <input type="text" name="street" placeholder="1234 Main Street..." required>
                        </label>
                        <label>
                            <span>City:</span>
                            <input type="text" name="city" placeholder="City" required>
                        </label>
                        <label>
                            <span>State:</span>
                            <select name="state">
                                <option>Missouri</option>
                                <option>Illinois</option>
                                <option>Kansas</option>
                                <option>Iowa</option>
                                <option>Oklahoma</option>
                                <option>Arkansas</option>
                                <option>Tennessee</option>
                                <option>Kentucky</option>
                            </select>
                        </label>
                        <label>
                            <span>Zipcode:</span>
                            <input type="number" min="0" max="99999" name="zipcode" placeholder="12345..." required>
                        </label>
                    </div>
                </div>
                <div id="fixAlignment" class="halfPercent">
                    <fieldset>
                        <legend>Checkout</legend>
                        <div id="checkoutLeft">
                            <p>Services:</p>
                            <label>
                                <input type="checkbox" name="pickBestColor" onClick="editCost(this, 30)"> Picking Best Color ($30)<br />
                            </label>
                            <label>
                                <input type="checkbox" name="paintBrush" onClick="editCost(this, 5)"> Paint Brush ($5)<br />
                            </label>
                            <label>
                                <input type="checkbox" name="tape" onClick="editCost(this, 5)"> Tape ($5)<br />
                            </label>
                            <label>
                                <input type="checkbox" name="sandpapers" onClick="editCost(this, 5)"> Sandpapers ($5)<br />
                            </label>
                            <label>
                                <input type="checkbox" name="safteyEquipment" onClick="editCost(this, 20)"> Saftey Equipment ($20)<br />
                            </label>
                            <label>
                                <input type="checkbox" name="paintersWear" onClick="editCost(this, 20)"> Painter's Wear ($20)<br />
                            </label>
                            <label>
                                <input type="checkbox" name="hireContractor" onClick="editCost(this, 50)"> Hire Contractor ($50)<br />
                            </label>
                            <p>Delivery Date:</p>
                            <label>
                                <input type="date" name="date" required>
                            </label>
                        </div>
                        <div id="checkoutRight">
                            <h2>Total Cost:</h2>
                            <h2 id="totalCost">$20.00</h2>
                            <input type="submit" value="Checkout">
                        </div>
                    </fieldset>
                </div>
            </form>
        </section>
        <?php include "assets/php/footer.php"; ?>
    </body>
</html>