<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<?php

session_start();


if(count($_SESSION) == 0){
    header('location: 404.php');
}

$users = [
    [
        "username" => "john@codeseed.in",
        "password" => "123",
        "email" => "john@codeseed.in",
        "address" => "ABC lane , XYZ landmark , 112233"
    ],
    [
        "username" => "jane@codeseed.in",
        "password" => "456",
        "email" => "jane@codeseed.in",
        "address" => "123 Elm St, Apt 5, 456789"
    ],
    [
        "username" => "mike@codeseed.in",
        "password" => "789",
        "email" => "mike@codeseed.in",
        "address" => "789 Oak Ave, Near Park, 987654"
    ],
    [
        "username" => "alice@codeseed.in",
        "password" => "abc",
        "email" => "alice@codeseed.in",
        "address" => "456 Maple Rd, Block 3, 234567"
    ],
    [
        "username" => "bob@codeseed.in",
        "password" => "def",
        "email" => "bob@codeseed.in",
        "address" => "555 Pine St, Suite 12, 654321"
    ],
    [
        "username" => "charlie@codeseed.in",
        "password" => "ghi",
        "email" => "charlie@codeseed.in",
        "address" => "987 Cedar Blvd, Floor 2, 765432"
    ],
    [
        "username" => "dave@codeseed.in",
        "password" => "jkl",
        "email" => "dave@codeseed.in",
        "address" => "321 Birch St, 3rd Floor, 876543"
    ],
    [
        "username" => "eve@codeseed.in",
        "password" => "mno",
        "email" => "eve@codeseed.in",
        "address" => "654 Willow Ln, Apt 9, 567890"
    ],
    [
        "username" => "frank@codeseed.in",
        "password" => "pqr",
        "email" => "frank@codeseed.in",
        "address" => "432 Spruce Rd, Near Mall, 345678"
    ],
    [
        "username" => "grace@codeseed.in",
        "password" => "stu",
        "email" => "grace@codeseed.in",
        "address" => "876 Ash St, Suite 4, 123456"
    ]
];
?>
<a href="logout.php" class="btn btn-danger">Logout</a>
<?php echo "welcome"."  ".$_SESSION['username'] ?>
<div class="container mt-5 ">

    <table class="table table-bordered table-striped ">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">username</th>
            <th scope="col">password</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th scope="col">action</th>
        </tr>
    </thead>
    <tbody>
        <?php

        for ($i = 0; $i < count($users); $i++) {
            ?>
            <tr>
                <th scope="row"><?php echo $i+1 ?></th>
                <td><?php echo $users[$i]['username'];  ?></td>
                <td><?php echo $users[$i]['password'];  ?></td>
                <td><?php echo $users[$i]['email'];  ?></td>
                <td><?php echo $users[$i]['address'];  ?></td>
                <td col-span="2">
                    <button class="btn btn-success">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
            </tr>
        <?php
        }

        ?>
    </tbody>
</table>
</div>