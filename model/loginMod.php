<?php

include "dbConnect.php";

class Login extends Database

{
    protected function getUser($email, $pwd)
    {
        $stmt = $this->connect()->prepare("SELECT pwd FROM user WHERE email = ? LIMIT 1;");
        $stmt->bindParam(1, $email, PDO::PARAM_STR);

        if (!$stmt->execute()) {
            $stmt = null; //disregard the statement
            header("location: ../index.php?error=selPwdFailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null; //disregard the statement
            header("location: ../index.php?error=noPwdFound");
            exit();
        }

        $db_pwd = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $realPwd = $db_pwd[0]['pwd'];
        $checkPwd = password_verify($pwd, $realPwd);

        if ($checkPwd == false) {
            $stmt = null; //disregard the statement
            header("location: ../index.php?error=wrongpassword");
            exit();
        } else if ($checkPwd == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM user WHERE email = ? AND pwd = ? LIMIT 1;');
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->bindParam(2, $realPwd, PDO::PARAM_STR);

            if (!$stmt->execute()) {
                $stmt = null; //disregard the statement
                header("location: ../index.php?error=selUserFailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null; //disregard the statement
                header("location: ../index.php?error=noUser");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();

            $_SESSION['uid'] = $user[0]['uid'];
            $_SESSION['firstName'] = $user[0]['firstName'];
            $_SESSION['lastName'] = $user[0]['lastName'];
            $_SESSION['userRole'] = $user[0]['userRole'];

            //echo 'session started';
            header("location: ../index.php?error=none");
        }
    }
    /*


            $stmt = $this->connect()->prepare('SELECT employee.*, emp_unit.unit, emp_position.position FROM employee
            JOIN emp_unit ON
            emp_unit.unitId = employee.unitId
            JOIN emp_position ON
            emp_position.posId = employee.posId
            WHERE userId = ? LIMIT 1;');

            $stmt->bindParam(1, $_SESSION['id'], PDO::PARAM_STR);

            if (!$stmt->execute()) {
                $stmt = null; //disregard the statement
                //header("location: ../index.php?error=selUserFailed");
                echo 'could not select';
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null; //disregard the statement
                //header("location: ../index.php?error=noUser");
                echo 'could not select';
                exit();
            }

            $welcome = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $_SESSION['unit'] = $welcome[0]['unit'];
            $_SESSION['position'] = $welcome[0]['position'];

            include "timeRec.php";
        }
    }

    
    protected function checkRole($email)
    {
        $stmt = $this->connect()->prepare('SELECT * FROM user WHERE email = ? AND priv = " ";');
        $stmt->bindParam(1, $email, PDO::PARAM_STR);
        if (!$stmt->execute()) {
            $stmt = null; //disregard the statement
            header("location: ../index.php?error=searchFailed");
            exit();
        }
        $result = false;
        if ($stmt->rowCount() > 0) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }
    protected function setTimeIn($userId, $clockInDate, $clockInTime)
    {
        $stmt = $this->connect()->prepare("INSERT INTO emp_att (userId, att_date, clock_in, clock_out) VALUES (?,?,?,' ');");
        $stmt->bindParam(1, $userId, PDO::PARAM_INT);
        $stmt->bindParam(2, $clockInDate);
        $stmt->bindParam(3, $clockInTime);
        if (!$stmt->execute()) {
            $stmt = null; //disregard the statement
            //header("location: ../employees.php?error=selEmpFailed");
            echo 'failed22222';
            exit();
        } elseif ($stmt->rowCount() == 0) {
            $stmt = null; //disregard the statement
            //header("location: ../employees.php?error=noEmp");
            echo 'passed';
            exit();
        } else {
            $_SESSION['clockInTime'] = $clockInTime;
            //echo 'saved';
            header("location: ../dashboard.php?error=none");
        }
    }

    protected function setTimeOut($sessionId, $clockIn, $clockOutTime)
    {
        $stmt = $this->connect()->prepare("UPDATE emp_att SET clock_out = ? WHERE (userId = ? AND clock_in = ?);");
        $stmt->bindParam(1, $clockOutTime);
        $stmt->bindParam(2, $sessionId);
        $stmt->bindParam(3, $clockIn);
        if (!$stmt->execute()) {
            $stmt = null; //disregard the statement
            //header("location: ../employees.php?error=selEmpFailed");
            echo 'failed11111';
            exit();
        } elseif ($stmt->rowCount() == 0) {
            $stmt = null; //disregard the statement
            //header("location: ../employees.php?error=noEmp");
            echo 'passed';
            exit();
        } else {
            session_start();
            session_unset();
            session_destroy();
            header("location: ../index.php?error=none");
        }
    }

    */
}
