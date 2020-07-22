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
                        <a href="../Feedback-System/auth/stud-loginsys/includes/logout.php" class="nav-a">Log Out</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </header>
    <main>
        <!-- main content -->
        <div class="block">            
            <div class="sub-block">
            <h2>Scheduled Feedback</h2>
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
                    <p>Subject & Syllabus covered in total<span class="required"> *</span> </p>
                    <table>
                        <th></th>
                        <th class="percent">20-40%</th>
                        <th class="percent">40-60%</th>
                        <th class="percent">60-80%</th>
                        <th class="percent">100%</th>
                        <tr>
                            <th class="subjects">CNS (17CS61)</th>
                            <td class="block-td-center"><input type="radio" name="CNS" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="CNS" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="CNS" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="CNS" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="subjects">CGV (17CS62)</th>
                            <td class="block-td-center"><input type="radio" name="CGV" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="CGV" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="CGV" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="CGV" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="subjects">SSCD (17CS63)</th>
                            <td class="block-td-center"><input type="radio" name="SSCD" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="SSCD" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="SSCD" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="SSCD" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="subjects">OS (17CS64)</th>
                            <td class="block-td-center"><input type="radio" name="OS" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="OS" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="OS" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="OS" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="subjects">DMDW (17CS651)</th>
                            <td class="block-td-center"><input type="radio" name="DMDW" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="DMDW" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="DMDW" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="DMDW" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="subjects">PAP (17CS664)</th>
                            <td class="block-td-center"><input type="radio" name="PAP" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="PAP" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="PAP" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="PAP" id="4" value="100%"></td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                    <p>Subject Faculty Evalution<span class="required"> *</span></p>
                    <table>
                        <th></th>
                        <th class="percent">OKAY</th>
                        <th class="percent">GOOD</th>
                        <th class="percent">VERY GOOD</th>
                        <th class="percent">EXCELLENT</th>
                        <tr>
                            <th class="teachers">CNS (17CS61) - Mr.Chandrashekar</th>
                            <td class="block-td-center"><input type="radio" name="CNS" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="CNS" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="CNS" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="CNS" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="teachers">CGV (17CS62) - Ms.Rajani</th>
                            <td class="block-td-center"><input type="radio" name="CGV" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="CGV" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="CGV" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="CGV" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="teachers">SSCD (17CS63) - Mrs.Shazia</th>
                            <td class="block-td-center"><input type="radio" name="SSCD" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="SSCD" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="SSCD" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="SSCD" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="teachers">OS (17CS64) - Mrs.Shivaranjini</th>
                            <td class="block-td-center"><input type="radio" name="OS" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="OS" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="OS" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="OS" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="teachers">DMDW (17CS651) - Mrs.Pushpalatha</th>
                            <td class="block-td-center"><input type="radio" name="DMDW" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="DMDW" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="DMDW" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="DMDW" id="4" value="100%"></td>
                        </tr>
                        <tr>
                        <th class="teachers">PAP (17CS664) - Mrs.Geetha</th>
                            <td class="block-td-center"><input type="radio" name="PAP" id="1" value="20-40%"></td>
                            <td class="block-td-center"><input type="radio" name="PAP" id="2" value="40-60%"></td>
                            <td class="block-td-center"><input type="radio" name="PAP" id="3" value="60-80%"></td>
                            <td class="block-td-center"><input type="radio" name="PAP" id="4" value="100%"></td>
                        </tr>
                    </table>
                </div>
                <div class="sblock-content">
                    <p>How much of the topics covered were you able to understand?<span class="required"> *</span></p>
                    <table>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="understanding" id="1" value="0-25%">
                                <label for="1">Understood 0-25%</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="understanding" id="2" value="25-50%">
                                <label for="2">Understood 25-50%</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="understanding" id="3" value="50-75%">
                                <label for="3">Understood 50-75%</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="understanding" id="4" value="75-100%">
                                <label for="4">Understood 75-100%</label>
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
                                <input type="radio" name="" id="" value="not much">
                                <label for="">Not much</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="" id="" value="okay">
                                <label for="">Okay</label>
                            </td>
                        </tr>
                        <tr>
                            <td class="block-td-left">
                                <input type="radio" name="" id="" value="helpful">
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