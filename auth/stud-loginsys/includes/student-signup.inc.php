<?php

include ("/var/www/html/config/db-config.php");

if (isset($_POST['signup-submit'])) {
    // access granted
    
    //CONN
    $conn = mysqli_connect($hostname, $dbusername, $dbpassword, 'FEEDBACK_SYS');
    
    if(mysqli_connect_error()) {
        echo "Error: Check connection";
        header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=sqlconnectionerror");
        exit();
    }

    //declare vars
    $student_name = strtoupper($_POST['sname-f']." ".$_POST['sname-l']);
    $usn = strtoupper($_POST['usn']);
    $dept = strtoupper($_POST['dept']);
    $sem = strtoupper($_POST['sem']);
    $yearofjoin = strtoupper($_POST['yoj']);
    $mail = $_POST['mail'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $passwordCheck = $_POST['pwd-repeat'];

    // CHECKING CHECKING ALL THE MISTAKES
    //E1 - EMPTY FIELDS
    if (empty($student_name) || empty($usn) || empty($dept) || empty($dept) || empty($sem) || empty($yearofjoin) || empty($mail) || empty($username) || empty($password) || empty($passwordCheck)) {
        header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=emptyfields");
        exit();
    }
    // E2 - VALIDATING MAIL ID && username
    else if (!filter_var($mail, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=invalidusernamemailid");
        exit();
    }
    // E3 - mail VALIDATION
    else if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=invalidusername&mailid=".$mail);
        exit();
    }
    // E4 - username VALIDATION
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)) {
        header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=invalidusername&mailid=".$mail);
        exit();
    }

    // E5 - password mismatch
    else if ($password !== $passwordCheck) {
        header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=checkpasswd");
        exit();
    }
    // E6 - CHECK IF USERNAME IS ALREADY TAKEN
    else {
        // SQL
        $sql = "SELECT STUDENT_USERNAME FROM STUDENT_INFO WHERE STUDENT_USERNAME=?;";

        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=sqlerror0");
            exit();
        }
        else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);

            $resultCheck = mysqli_stmt_num_rows($stmt);

            if ($resultCheck > 0) {
                // username exists
                header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=userexists");
                exit();
            }
            else {
                // proceed sign up
                $sql = "INSERT INTO STUDENT_INFO(STUDENT_USN, STUDENT_NAME, STUDENT_DEPARTMENT, STUDENT_SEM, STUDENT_YEAROFJOIN, STUDENT_USERNAME, STUDENT_MAIL_ID, STUDENT_PASSWORD) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

                $stmt = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=sqlerror1");
                    exit();
                }
                else {
                    //HASH INITIATE
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    mysqli_stmt_bind_param($stmt, "ssssssss", $usn, $student_name, $dept, $sem, $yearofjoin, $username, $mail, $hashedPwd);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);


                    header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?Signup=Success");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
else {
    // url force enter error message
    header("Location: /Feedback-System/auth/stud-loginsys/student-signup.html?error=accessdeined");
    exit();
}