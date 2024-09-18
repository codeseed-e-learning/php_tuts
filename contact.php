<?php


session_start();


?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="w-full h-screen bg-gray-600 flex justify-center items-center">
    <form action="insert-user.php" class="p-5 border bg-white h-auto w-96 rounded-lg" method="post">
        <h2 class="text-center text-3xl">Contact Me</h2>
        <div class="form-input">
            <label for="fullname">Enter Your Full Name</label>
            <input type="text" name="fullname" class="h-10 w-full rounded-lg border mt-2 p-2" placeholder="John Doe"
                id="fullname">
        </div>
        <div class="form-input">
            <label for="fullname">Phone Number</label>
            <input type="number" id="phone_number" name="number" class="h-10 w-full rounded-lg border mt-2 p-2"
                placeholder="1234567890" id="">
        </div>
        <div class="form-input">
            <label for="fullname">Your Message</label>
            <textarea id="message" type="number" name="message" class="h-32 w-full rounded-lg border mt-2 p-2"
                placeholder="1234567890" id=""></textarea>
        </div>
        <p id="error" class="text-red-500"></p>
        <input id="submit" type="submit" class="p-2 bg-green-500 w-full text-white mt-2 rounded-lg" value="Submit">
        <?php

        if (isset($_SESSION)) {
            if ($_SESSION['insert_status']) {
               ?>
               <script>
                    document.getElementById("error").innerHTML = "Your inquiry is receoved , we'll get back to you soon";
                    document.getElementById("error").style.color = "green";
               </script>
               <?php 
            }
        }

        ?>
    </form>

    <script>
        const submitForm = document.getElementById("submit");


        submitForm.addEventListener("click", (e) => {
            let fullname = document.querySelector("#fullname");
            fullname = fullname.value;
            let error = document.getElementById("error");

            const phoneNumber = document.getElementById("phone_number").value;
            const message = document.getElementById("message").value;
            console.log(fullname + phoneNumber + message);

            if (fullname == "" || phoneNumber == "" || message == "") {
                error.innerHTML = "please fill all the fields";
                e.preventDefault();
            }

        })
    </script>
</body>

</html>