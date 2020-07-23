<?php 
    session_start();
    if (!isset($_SESSION['student_usn'])) {
        header("Location: /Feedback-System/auth/stud-loginsys/student-login.php?error=accessdenied");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scheduled Feedback</title>
    <link rel="stylesheet" href="/Feedback-System/css/var_feed.css">
    <link rel="icon" href="/Feedback-System/css/img/college_icon.png">
</head>
<body>
    <header>
        <!-- header -->
        <div class="title-div">
            <a href="/Feedback-System/index.php"><img src="/Feedback-System/css/img/college_icon.png" alt="Logo" id="college_icon"></a>
            <h1 id="title">College Name</h1>
        </div>
        <div class="navbar">
            <a href="/Feedback-System/index.php" class="nav-a">Home</a>
            <a href="#" class="nav-a">Events</a>
            <a href="#" class="nav-a">Extras</a>
            <?php if (isset($_SESSION['student_usn'])) { ?>
                <div class="dropdown" style="float:right;">
                    <button class="dropbtn" style="font-weight: bold;"><?php echo $_SESSION['student_name'];?></button>
                    <div class="dropdown-content">
                        <a href="/Feedback-System/auth/stud-loginsys/includes/logout.php" class="nav-a">Log Out</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </header>
    <main>
        <!-- main content -->
        <div class="block">            
            <div class="sub-block">
                <img src="/Feedback-System/css/img/feedback_icon.jpg" alt="Feedback Icon" id="vfb-icon">
            <h3>Scheduled Feedback</h3>
            <form action="#" method="POST">
                <div class="sblock-content">
                    <p>Do you have access to internet?<span class="required"> *</span></p>
                    <table>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="access" id="yes" value="Yes">
                                <label for="yes">Yes</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="access" id="no" value="No">
                                <label for="no">No</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="access" id="some" value="Sometimes">
                                <label for="some">Sometimes</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                    <p>What was the platform used to conduct your online classes?<span class="required"> *</span></p>
                    <table>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="platform" id="" value="Online videos">
                                <label for="">Online videos</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="platform" id="" value="Zoom App">
                                <label for="">Zoom App</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="platform" id="" value="Cisco Webex">
                                <label for="">Cisco Webex Meet</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="platform" id="" value="Google Meet">
                                <label for="">Google Meet</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                    <p>Webinar Sessions attended? <span class="required"> *</span></p>
                    <table>
                        <tr>
                            <td class="block-td-left">
                                <input type="checkbox" name="attended" id="" value="None">
                                <label for="">None</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="checkbox" name="attended" id="" value="VTU">
                                <label for="">VTU e-learning</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="checkbox" name="attended" id="" value="e-library or digital library">
                                <label for="">e-library or digital library (links)</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="checkbox" name="attended" id="" value="NPTL Videos">
                                <label for="">NPTL videos</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="checkbox" name="attended" id="" value="Youtube">
                                <label for="">YouTube videos</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                    <p>Assignments Given? <span class="required"> *</span></p>
                    <table>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="assignment" id="" value="Yes">
                                <label for="">Yes</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="assignment" id="" value="No">
                                <label for="">No</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                <p>Assignments Submitted? <span class="required"> *</span></p>
                    <table>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="assignment-submit" id="" value="Yes">
                                <label for="">Yes</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="assignment-submit" id="" value="No">
                                <label for="">No</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                    <p>How many internals were conducted? (During LOCK-DOWN) <span class="required"> *</span></p>
                    <span id="select-pad">
                        <select name="internal-num" id="select-left">
                            <option value="" selected disabled>Choose</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </span>
                </div>
                <div class="sblock-content">
                    <p>How is your mindset to face exams? <span class="required"> *</span></p>
                    <table>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="mindset" id="" value="confident">
                                <label for="">Confident</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="mindset" id="" value="confused">
                                <label for="">Confused</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="mindset" id="" value="stressed">
                                <label for="">Stressed</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="mindset" id="" value="scared">
                                <label for="">Scared</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="mindset" id="" value="help needed">
                                <label for="">Need help/Need to talk to my teacher</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                    <p>How useful were the online classes ? <span class="required"> *</span></p>
                    <table>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="online-use" id="" value="not much">
                                <label for="">Not much</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="online-use" id="" value="okay">
                                <label for="">Okay</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="online-use" id="" value="helpful">
                                <label for="">Helpful</label>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                    <p>How much were you able to understand? (THEORY)<span class="required"> *</span></p>
                    <textarea name="student-msg-understanding-theory" id="" cols="50" rows="5" placeholder="Write here"></textarea>
                </div>
                <button type="submit" name="feed-sumbit">Submit</button>
            </div>
            </form>
        </div>
        <!-- Design a basic form -->
    </main>
    <footer>
        <!-- foot code -->
        <div class="div-contact">
            <ul id="ul-foot">
                <li class="li-foot"><a href="https://github.com/StealthAdder/Feedback-System" class="a-foot" target="_blank">TeamX Hypertext</a></li>
                <li class="li-foot" style="float: right;"><a href="https://github.com/StealthAdder" class="a-foot" target="_blank">StealthAdder</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>