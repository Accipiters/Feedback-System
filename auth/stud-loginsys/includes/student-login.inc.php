<?php

  if (isset($_POST['login-sumbit'])) {
    
    // Connection:
    include ("/var/www/html/config/db-config.php");

    $conn = mysqli_connect($hostname, $dbusername, $dbpassword, 'FEEDBACK_SYS');

    if (mysqli_connect_error()) {
      header("Location: /Feedback-System/auth/stud-loginsys/student-login.html?error=sqlconnectionerror");
      exit();
    }

    $username = $_POST['usn'];
    $pwd = $_POST['pwd'];

    // E1 - CHECK EMPTY FIELDS
    if (empty($username) || empty($pwd)) {
      header("Location: /Feedback-System/auth/stud-loginsys/student-login.html?error=emptyfields");
      exit();
    }
    // Check if user exists
    else {
      $sql = "SELECT * FROM STUDENT_INFO WHERE STUDENT_USN=? OR STUDENT_USERNAME=? OR STUDENT_MAIL_ID=?;";

      $stmt = mysqli_stmt_init($conn);
      // check sql
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: /Feedback-System/auth/stud-loginsys/student-login.html?error=sqlerror0");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "sss", $username, $username, $username);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        //checking password match

        if ($row = mysqli_fetch_assoc($result)) {
          $pwdCheck = password_verify($pwd, $row['STUDENT_PASSWORD']);
          
          if ($pwdCheck == false) {
            header("Location: /Feedback-System/auth/stud-loginsys/student-login.html?error=wrongpwd0");
            exit();
          }
          else if ($pwdCheck == true) {
            session_start();
            $_SESSION['student_name'] = $row['STUDENT_NAME'];
            $_SESSION['student_usn'] = $row['STUDENT_USN'];
            $_SESSION['student_username'] = $row['STUDENT_USERNAME'];
            $_SESSION['student_mail'] = $row['STUDENT_MAIL_ID'];

            header("Location: /Feedback-System/index.php?login=Success");
            exit();
          }
          else {
            header("Location: /Feedback-System/auth/stud-loginsys/student-login.html?error=wrongpwd1");
            exit();
          }
        } 
        else {
          header("Location: /Feedback-System/auth/stud-loginsys/student-login.html?error=nouser");
          exit();
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
  }
  else {
    header("Location: /Feedback-System/auth/stud-loginsys/student-login.html?error=accessdenied");
    exit();
  }
