    <?php include "assets/php/header.php"; ?>
    <body>
        <?php 
            include "assets/php/navbar.php";
            
            // Database Connection
            $host = "localhost";
            $user = "root";
            $pass = "manhattan07";
            $db = "webandmobile";
            
            if($_SERVER['REQUEST_METHOD'] == "POST") {
                // Variables
                $name = $_POST['name'];
                $email = $_POST['email'];
                $telephone = $_POST['telephone'];
                $subject = $_POST['subject'];
                $message = $_POST['message'];
                
                // Opens the conection
                $con = new mysqli($host, $user, $pass, $db);
                if($con->connect_error)
                    die("Connection failed: " . $con->connect_error);
                else {
                    if($con->query("INSERT INTO contact VALUES (NULL, '$name', '$email', '$telephone', '$subject', '$message');"))
                        echo "<script>contactSuccess();</script>";
                    else
                        die("Error while trying to insert information: " . $con->error);
                }
                $con->close();
            }
        ?>
        <section id="contact">
            <h1>Contact Us</h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" onsubmit="return contactValidate();" method="post">
                <div class="form">
                    <label>First and Last name:</label>
                    <input type="text" name="name" placeholder="Enter your name" required>
                </div>
                <div class="form">
                    <label>Email:</label>
                    <input type="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form">
                    <label>Phone#:</label>
                    <input type="tel" name="telephone" placeholder="Telephone #" required>
                </div>
                <div class="form">
                    <label>Subject:</label>
                    <input type="text" name="subject" placeholder="Subject" required>
                </div>
                <div class="form">
                    <label>Message:</label>
                    <textarea name="message" placeholder="Message" required></textarea>
                </div>
                <div class="form">
                    <input type="submit" value="Contact Us">
                </div>
            </form>
        </section>
        <div id="contacts">
            <?php
                // Opens the conection
                $con = new mysqli($host, $user, $pass, $db);
                if($con->connect_error)
                    die("Connection failed: " . $con->connect_error);
                else {
                    $res = $con->query("SELECT * FROM contact;");
                }
                
                while($r = $res->fetch_assoc()) {
                    echo "<div class='contact'>";
                    echo "<h2>" . $r['subject'] . "</h2>";
                    echo "<p>" . $r['message'] . "</p>";
                    echo "<h3>" . $r['name'] . " - " . $r['email'] . "</p>";
                    echo "</div>";
                }
                $con->close();
            ?>
        </div>
        <?php include "assets/php/footer.php"; ?>
    </body>
</html>