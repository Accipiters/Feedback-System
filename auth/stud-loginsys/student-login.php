<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login</title>
    <link rel="stylesheet" href="/Feedback-System/css/st_login.css">
    <link rel="icon" href="/Feedback-System/css/img/college_icon.png">
</head>
<body>
    <header>
        <div class="title-div">
            <a href="../Feedback-System/index.html"><img src="/Feedback-System/css/img/college_icon.png" alt="Logo" id="college_icon"></a>
            <h1 id="title">College Name</h1>
        </div>
        <nav>
            <ul class="nav-ul">
                <li class="nav-li"><a href="/Feedback-System/index.php" class="nav-a">Home</a></li>
                <li class="nav-li"><a href="" class="nav-a">News</a></li>
                <li class="nav-li" style="float: right;"><a href="../stud-loginsys/student-signup.php" class="nav-a">Sign Up</a></li>
                <!-- Signup float right -->
            </ul>
        </nav>
    </header>
    <main>
        <!-- center the content -->
        <!-- <h3 id="page-title">Welcome Student</h3> -->
        <div class="feed-block">
            <form action="../stud-loginsys/includes/student-login.inc.php" method="post" autocomplete="off">
            <div class="feed-subblock">
                <div>
                    <h3 id="form-title-feedback">Student Login</h3>
                </div>
                <div>
                    <?php
                        if (isset($_GET['error'])) {
                            if ($_GET['error'] == "accessdenied") {
                                echo '<p class="error">Access Denied!</p>';
                            }
                            elseif ($_GET['error'] == "sqlconnectionerror") {
                                echo '<p class="error">ERROR CODE: SQL_CON_ERR </p><span>Contact: </span><a href="/Feedback-System/pages/Tech_Support.html" class="ts">TeamX Support</a>';
                                // Future update to transfer to pg with delay and might even care the error code witht the transfer...
                            }
                            elseif ($_GET['error'] == "emptyfields") {
                                echo '<p class="error">Fill in all fields</p>';
                            } 
                            else if ($_GET['error'] == "sqlerror0") {
                                echo '<p class="error">ERROR CODE: SQL0 </p><span>Contact: </span><a href="/Feedback-System/pages/Tech_Support.html" class="ts">TeamX Support</a>';
                            }
                            elseif ($_GET['error'] == "wrongpwd0") {
                                echo '<p class="error">Wrong Password!</p>';
                            }
                            else if ($_GET['error'] == "wrongpwd1") {
                                echo '<p class="error">ERROR CODE: WRNG_PWD_1 </p><span>Contact: </span><a href="#" class="ts">TeamX Support</a>';
                                // need some work here
                            }
                            elseif ($_GET['error'] == "nouser") {
                                echo '<p class="error">User Doesn`t exist!</p>';
                            }
                        }
                    ?>
                </div>
                <div class="feed-content">
                    <input type="text" placeholder="USN/Username/Mail ID" name="usn" required>
                </div>
                <div class="feed-content">
                    <input type="password" placeholder="Password" name="pwd" required>
                </div>
                <div class="feed-content">
                    <button type="submit" name="login-sumbit">Log In</button>
                </div>
            </div>
            </form>
        </div> 
    </main>
    <footer>
        <!-- footer design later -->
        <div class="div-contact">
            <ul id="ul-foot">
                <li class="li-foot"><a href="https://github.com/StealthAdder/Feedback-System" class="a-foot" target="_blank">TeamX Hypertext</a></li>
                <li class="li-foot" style="float: right;"><a href="https://github.com/StealthAdder" class="a-foot" target="_blank">StealthAdder</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>