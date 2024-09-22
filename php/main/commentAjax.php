<?php

define('DB_NAME', 'if0_37364255_monster_forest');
define('DB_USER', 'if0_37364255');
define('DB_PASSWORD', 'e2HSIaZg5n');
define('DB_HOST', 'sql210.infinityfree.com');

// Create connection
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function deleteComm($id) {
    global $conn;

    $del = "DELETE FROM Comments WHERE id = '$id'";
    $result = $conn->query($del);
}

function insertComm($comm) {
    global $conn;
        $num = $_COOKIE['userid'];
        $sql = "SELECT firstname, lastname
            FROM accounts
            WHERE id='$num'";
        $name = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($name);
        $fn = $row["firstname"];
        $ln = $row["lastname"];
        $insert = "INSERT INTO Comments (comment, firstname, lastname)
        VALUES ('$comm', '$fn', '$ln')";

        $result = $conn->query($insert);
}

function insertEmail($address) {
    global $conn;

    $insert = "INSERT INTO Emails (email)
    VALUES ('$address')";

    $result = $conn->query($insert);
}

function showComm() {
    global $conn;
    $sql = "SELECT * FROM Comments";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $delurl = "<a href='' onclick=return(deleteComm('$id'))>delete</a>";
        echo "<div class='user-c'> <p>" . $row["comment"] . "</p>" . "<span> - " . $row["firstname"] . " " . $row["lastname"] ."</span>". "$delurl</div>";
    }
    } else {
    echo "0 results";
    }
}

$cmd = $_GET['cmd'];

if ($cmd == 'create') {
    insertComm($_GET['comm']);
} else if ($cmd == 'delete') {
    $id = $_GET['id'];
    deleteComm($id);
} else if ($cmd == 'subscribe') {
    insertEmail($_GET['address']);
}

showComm();

mysqli_close($conn);

?>