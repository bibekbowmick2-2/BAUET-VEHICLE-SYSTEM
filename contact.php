<?php require_once('./config.php');
if (isset($_POST['SUBMIT'])) {
    $phone = $_POST['firstname'];
    $money = $_POST['lastname'];
    $pin = $_POST['subject'];


    $sql = "INSERT INTO  contact (fname, lname, message) VALUES ('$phone', '$money','$pin')";
    if (mysqli_query($conn, $sql) == TRUE) {
        echo "<script>alert('Contact Stored');</script>";
        echo "<script>window.location.href='contact.php'</script>";

        // echo "Data Inserted successfully";
    } else {
        echo "Data Not Inserted";
    }
}

?>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    * {
        box-sizing: border-box;
    }

    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    .container {
        border-radius: 5px;
        /* background-color: #f2f2f2; */
        padding: 20px;
    }
</style>
<section class="py-5">
    <div class="container">
        <div class="card rounded-0 card-outline card-purple shadow px-4 px-lg-5 mt-5">
            <div class="row">
                <div class="card-body">

                    <h3>Contact Form</h3>

                    <div class="container">
                        <form action="" method="POST">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">



                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                            <input type="submit" name="SUBMIT" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).scroll(function() {
        $('#topNavBar').removeClass('bg-purple navbar-light navbar-dark bg-gradient-purple text-light')
        if ($(window).scrollTop() === 0) {
            $('#topNavBar').addClass('navbar-dark bg-purple text-light')
        } else {
            $('#topNavBar').addClass('navbar-dark bg-gradient-purple ')
        }
    });
    $(function() {
        $(document).trigger('scroll')
    })
</script>