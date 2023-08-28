<?php require_once('./config.php');

if (isset($_POST['btn'])) {
    $phone = $_POST['phone'];
    $money = $_POST['money'];
    $pin = $_POST['pin'];


    $sql = "INSERT INTO  payment (phonee, moneyy, pinn) VALUES ('$phone', '$money','$pin')";
    if (mysqli_query($conn, $sql) == TRUE) {
        echo "<script>alert('Payment Successful');</script>";
        echo "<script>window.location.href='process_payment.php'</script>";

        // echo "Data Inserted successfully";
    } else {
        echo "Data Not Inserted";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<style>
    .button {
        background-color: #4CAF50;
        /* Green */
        border: none;
        color: white;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
    }


    .button3 {
        padding: 14px 40px;
    }
</style>

<body>
    <form action="" method="POST">
        <div class="container">
            <h1>Confirm Your Payment</h1>
            <div class="first-row">
                <div class="owner">
                    <h3>Phone Number</h3>
                    <div class="input-field">
                        <input type="text" name="phone">
                    </div>
                </div>
                <div class="cvv">
                    <h3>Money Limit</h3>
                    <div class="input-field">
                        <input type="text" name="money">
                    </div>
                </div>
            </div>
            <div class="second-row">
                <div class="card-number">
                    <h3>Pin Number</h3>
                    <div class="input-field">

                        <input type="password" name="pin">
                    </div>
                </div>
            </div>
            <div class="third-row">
                <h3>Date</h3>
                <div class="selection">

                    <input type="date" id="birthday" name="birthday">
                    <div class="cards">
                        <img src="th.jpeg" alt="">
                        <!-- <img src="th (1).jpeg" alt=""> -->

                    </div>
                </div>
            </div>
            <button class="button button3" name="btn">Confirm</button>
            <a href="index.php">Go to the homepage</a>

        </div>
    </form>

</body>

</html>