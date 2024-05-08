<!-- Functions -->
<?php
define('DB_NAME', 'ytang23');
define('DB_USER', 'ytang23');
define('DB_PASSWORD', 'ytang23');
define('DB_HOST', 'localhost');

function checkUser($username, $password) {
    // Create connection
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT id, username, password FROM accounts";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            if ($row["username"] == $username && $row["password"] == $password) {
                return $row["id"];
            }
        }
        } else {
            return -1;
        }

    mysqli_close($conn);
}
?>

<!-- Set Cookies -->
<?php
session_start();
if ($_POST['username'] != '' && $_POST['password'] != '') {
    if (checkUser($_POST['username'], $_POST['password']) > 0) {
        setcookie("userid", checkUser($_POST['username'], $_POST['password']), time() + (86400 * 30), "/");
        header("Location: " . $_SESSION['current_page']);
    } else {
         setcookie("userid", "", time() - 3600, "/");
         print("Username and password are not correct.");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MFLogin</title>
    <link rel="stylesheet" href="../../resources/fonts/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="../../resources/css/fontfaces.css" />
    <link rel="stylesheet" href="../../resources/css/general.css" />
    <link rel="stylesheet" href="../../resources/css/login.css" />
    <link rel="stylesheet" href="../../resources/css/logout.css" />
    <script src="./JQuery/jquery-3.6.0.js"></script>
  </head>
  <body>
    <nav class="logout">
      <a href="./logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>
    </nav>
    <header>
      <div class="container">
        <a class="logo" href="../overview/overview.html" id="mf">Monster Forest</a>
        <nav>
          <ul>
            <li><a href="./index.php">HOME</a></li>
            <li><a href="./squat.php">SQUAT</a></li>
            <li><a href="./bench.php">BENCH</a></li>
            <li><a href="./deadlift.php">DEADLIFT</a></li>
            <li>
              <a href="#"
                id="user-icon"><img
                  src="../../resources/images/user-icon.png"
                  alt="User Icon"
              /></a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <main>
      <form method="post">
        <h2>My account</h2>
        <div class="login-field">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" value />
          <label for="password">Password</label>
          <input type="password" name="password" id="password" value />
          <input id="login" class="button" type="submit" value="LOG IN" />
        </div>
      </form>
    </main>

    <footer>
      <div class="subscribe" id="center">
        <h2>SUBSCRIBE FOR MORE ARTICLES!</h2>
        <form onsubmit="return(insertEmail())">
          <input
            type="email"
            value=""
            name="EMAIL"
            id="email"
            placeholder="Email Address"
            required
          />
          <button type="submit" id="subscribe" class="button">Subscribe</button>
        </form>
      </div>
      <div id="result"></div>
      <div class="contacts" id="center">
        <h2 id="mf">Monster Forest</h2>
        <h4><span>EMAIL: </span>monsterforest@mmail.com</h4>
        <h4 id="phone"><span>PHONE: </span>(555)678-9346</h4>
      </div>
      <p>©copyright Monster Forest 2022</p>
    </footer>

    <script src="../../resources/js/logout.js"></script>
    <script>
        const mail = document.querySelector("#email");
        function clearArea(element) {
          element.value = "";
        }
        function insertEmail() {
          email = $('#email').val();
          $.get("./commentAjax.php", {"cmd" : "subscribe", "address" : email}, function(data) {
          });
          clearArea(mail);
          return(false);
        }
    </script>
  </body>
</html>
