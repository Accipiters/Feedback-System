<?php
// check access
    if (isset($_POST['feedback-submit'])) {

        // Connection
        include ("/var/www/html/config/db-config.php");

        $conn = mysqli_connect($hostname, $dbusername, $dbpassword, 'FEEDBACK_SYS');

        if (mysqli_connect_error()) {
            header("Location: /Feedback-System/index.php?error=sqlconnectionerror");
            exit();
        }
        
        // short vars
        $dept = $_POST['dept'];
        $sem = $_POST['sem'];
        $feedmsg = htmlspecialchars($_POST['msg']);
        date_default_timezone_set('Asia/Kolakata');
        $time = date('d/m/Y h:i:s a', time());
        
        // E1 check empty fields
        if (empty($dept) || empty ($sem) || empty($feedmsg)) {
            header("Location: /Feedback-System/pages/Feedback.php?error=emptyfields");
            exit();
        }

        // STMT
        $sql = "INSERT INTO AFB (DEPARTMENT, SEM, FEEDBACK, TIME_STAMP) VALUES(?, ?, ?, ?)";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /Feedback-System/pages/Feedback.php?error=sqlerror0");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "ssss", $dept, $sem, $feedmsg, $time);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            header("Location: /Feedback-System/pages/Feedback.php?info=sent");
            exit();
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else {
        header("Location: /Feedback-System/index.php?error=accessdenied");
        exit();
    }