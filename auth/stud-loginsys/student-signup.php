<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Sign Up</title>
    <link rel="stylesheet" href="/Feedback-System/css/st_signup.css">
    <link rel="icon" href="/Feedback-System/css/img/college_icon.png">
</head>
<body>
    <header>
        <div class="title-div">
            <a href="/Feedback-System/index.php"><img src="/Feedback-System/css/img/college_icon.png" alt="Logo" id="college_icon"></a>
            <h1 id="title">College Name</h1>
        </div>
        <div class="navbar">
            <a href="/Feedback-System/index.php" class="nav-a">Home</a>
            <a href="/Feedback-System/pages/Feedback.php" class="nav-a">Anonymous Feedback</a>
            <a href="#" class="nav-a">Events</a>
            <a href="#" class="nav-a">Extras</a>
        </div>
    </header>
    <main>
        <h3></h3>
        <div class="feed-block">
            <div class="feed-subblock">
                <form action="../stud-loginsys/includes/student-signup.inc.php" method="post" autocomplete="off">
                    <div>
                        <h3 id="form-title-feedback">Student Sign Up form</h3>
                    </div>
                    <div>
                        <?php 
                            // get error
                            if (isset($_GET['error'])) {
                                if ($_GET['error'] == "emptyfields") {
                                    echo '<p class="errors">Fill in all fields</p>';
                                }
                                else if ($_GET['error'] == "invalidusernamemailid") {
                                    echo '<p class="error">Invalid Username & Email ID</p>';
                                }
                                else if ($_GET['error'] == "invalidusername") {
                                    echo '<p class="error">Invalid Username</p>';
                                }
                                else if ($_GET['error'] == "invalidusername") {
                                    echo '<p class="error">Invalid Email ID</p>';
                                }
                                else if ($_GET['error'] == "checkpasswd") {
                                    echo '<p class="error">Check Password</p>';
                                }
                                else if ($_GET['error'] == "sqlerror0") {
                                    echo '<p class="error">Contact TeamX Tech - ERROR CODE: SQL0</p>';
                                }
                                else if ($_GET['error'] == "userexists") {
                                    echo '<p class="error">User Exists - If this is mistake contact teamX Tech</p>';
                                }
                                else if ($_GET['error'] == "sqlerror1") {
                                    echo '<p class="error">Contact TeamX Tech - ERROR CODE: SQL1</p>';
                                }
                                else if ($_GET['error'] == "sqlerror1") {
                                    echo '<p class="error">Contact TeamX Tech - ERROR CODE: SQL1</p>';
                                }
                                else if ($_GET['error'] == "accessdenied") {
                                    echo '<p class="error">User reported with Session ID - Code Protected!</p>';
                                }
                            } 
                            else if ($_GET['Signup']) {
                                echo '<p class="success">Sign Up was a Success!</p>';
                                echo '<p>Welcome aboard</p>';
                            }
                        ?>
                    </div>
                    <div class="feed-content">
                        <label for="" id="name-title">Name</label>
                        <input type="text" name="sname-f" placeholder="Firstname" required>
                        <input type="text" name="sname-l" placeholder="Lastname" required>
                    </div>
                    <div class="feed-content">
                        <label for="" id="usn-title">USN</label>
                        <input type="text" name="usn" placeholder="1RGYYBRNUM" required>
                    </div>
                    <div class="feed-content">
                        <label for="" id="branch-title">Branch</label>
                        <select name="dept" id="">
                            <option value="" disabled selected>Select</option>
                            <option value="CSE">CSE</option>
                            <option value="ECE">ECE</option>
                        </select>
                        <label for="" id="sem-title">Semester</label>
                        <select name="sem" id="">
                            <option value="" disabled selected>Select</option>
                            <option value="I">I SEM</option>
                            <option value="II">II SEM</option>
                            <option value="III">III SEM</option>
                            <option value="IV">IV SEM</option>
                            <option value="V">V SEM</option>
                            <option value="VI">VI SEM</option>
                            <option value="VII">VII SEM</option>
                            <option value="VIII">VIII SEM</option>
                        </select>
                        <label for="" id="Year-of-Joining">Year of Joining</label>
                        <select name="yoj" id="">
                            <option value="" selected disabled>Select</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                        </select>
                    </div>
                    <div class="feed-content">
                        <label for="">Username</label>
                        <input type="text" name="username" placeholder="Username" required>
                    </div>
                    <div class="feed-content">
                        <label for="" id="mail-title">E-mail Address</label>
                        <input type="text" name="mail" placeholder="Mail ID" required>
                    </div>
                    <div class="feed-content">
                        <label for="password-title">Passsword</label>
                        <input type="password" name="pwd" placeholder="Password" required>
                        <input type="password" name="pwd-repeat" placeholder="Repeat-Password" required>
                    </div>
                    <button type="submit" name="signup-submit">Sign Up</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <!-- footer -->
        <div class="div-contact">
            <ul id="ul-foot">
                <li class="li-foot"><a href="https://github.com/StealthAdder/Feedback-System" class="a-foot" target="_blank">TeamX Hypertext</a></li>
                <li class="li-foot" style="float: right;"><a href="https://github.com/StealthAdder" class="a-foot" target="_blank">StealthAdder</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>