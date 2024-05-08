<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MFOfficialGuide</title>
    <link rel="stylesheet" href="../../resources/fonts/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="../../resources/css/index.css" />
    <link rel="stylesheet" href="../../resources/css/fontfaces.css" />
    <link rel="stylesheet" href="../../resources/css/general.css">
    <link rel="stylesheet" href="../../resources/css/logout.css" />
    <script src="./JQuery/jquery-3.6.0.js"></script>
  </head>
  <body>
    <?php
    $_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
    ?>
    <nav class="logout">
      <a href="./logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>Log Out</a>
    </nav>
    <header>
      <div class="container">
        <a class="logo" href="../overview/overview.html" id="mf">Monster Forest</a>
        <nav>
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="./squat.php">SQUAT</a></li>
            <li><a href="./bench.php">BENCH</a></li>
            <li><a href="./deadlift.php">DEADLIFT</a></li>
            <li><a href="./login.php" id="user-icon"><img src="../../resources/images/user-icon.png" alt="User Icon"></a></li>
          </ul> 
        </nav>
      </div>
    </header>

    <main>
      <section class="page-hero">
        <div class="text" id="center">
          <h1>A BASIC GUIDE TO</h1>
          <h1 id="pw">POWERLIFTING</h1>
          <p id="quote">
            <i
              >“It is a disgrace to grow old through sheer carelessness before
              seeing what manner of man you may become by developing your bodily
              strength and beauty to their highest limit.”</i
            >
          </p>
          <p id="author">&#8209Socrates</p>
        </div>
      </section>

      <section class="welcome">
        <h4 id="center">
          Welcome to Monster Forest's first official guide to powerlifting!
        </h4>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea facere ex
          eaque, perspiciatis quidem mollitia, architecto nihil consectetur aut
          perferendis molestias quis esse debitis velit dolorem minima
          provident. Ipsum, assumenda!
        </p>
        <div class="three-opt">
          <div class="box" id="center">
            <a href="./squat.php"><img src="../../resources/images/squat.jpg" alt="A Woman Squating Big Weight"></a>
            <h4>SQUAT</h4>
          </div>
          <div class="box" id="center">
            <a href="./bench.php"><img src="../../resources/images/bench.jpg" alt="A Man Bench Pressing"></a>
            <h4>BENCH</h4>
          </div>
          <div class="box" id="center">
            <a href="./deadlift.php"><img src="../../resources/images/deadlift.jpeg" alt="A Man Getting Ready to Deadlift"></a>
            <h4>DEADLIFT</h4>
          </div>
        </div>
      </section>

      <div class="articles">
        <section class="intro">
          <h2>INTRODUCTION</h2>
          <p>
            <img src="../../resources/images/milo-of-croton.png" alt="Milo of Croton carries a cow in three stages." />
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro
            voluptates non culpa, autem repellendus ex maxime enim, ducimus
            pariatur deserunt, tempore minima. Ullam excepturi ad reiciendis
            facere hic minus rerum?
          </p>
          <p>
            Nemo veniam, dolorum impedit alias praesentium consequatur dolor ad
            tempora quia facere hic incidunt, dolore quas, autem error quisquam
            recusandae corporis? Corporis dolorum itaque tenetur velit ducimus
            eius accusamus omnis.
          </p>
        </section>

        <section class="rants">
          <h2>TECHNIQUE RANTS</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia
            consectetur ipsam a quidem minus inventore quasi corporis voluptatem
            tempora, qui cupiditate sint placeat cumque accusamus aliquam
            voluptate. Deserunt, tempora labore.
          </p>
          <p>
            Quod fugiat unde repudiandae, modi eum sequi? Perspiciatis veritatis,
            non officia repellat quibusdam repellendus minus odio excepturi
            voluptatum rerum eaque similique amet, accusantium ducimus ea? Soluta
            labore itaque provident voluptatibus!
          </p>
        </section>

        <section class="conclusion">
          <h2>CONCLUSION</h2>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates,
            nemo ratione consectetur inventore, natus magnam eligendi a autem
            accusamus expedita deserunt dolor error aliquam. Officia facere fuga
            aut placeat a.
          </p>
        </section>
      </div>
    </main>

    <footer>
      <div class="subscribe" id="center">
        <h2>SUBSCRIBE FOR MORE ARTICLES!</h2>
        <form onsubmit="return(insertEmail())">
          <input value ="" type="text" id="email" placeholder="Email Address" name="usr-email" required/>
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
