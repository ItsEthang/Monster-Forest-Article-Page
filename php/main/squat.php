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
    <title>MFSquatGuide</title>
    <link rel="stylesheet" href="../../resources/fonts/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="../../resources/css/fontfaces.css" />
    <link rel="stylesheet" href="../../resources/css/general.css" />
    <link rel="stylesheet" href="../../resources/css/squat.css">
    <link rel="stylesheet" href="../../resources/css/article.css">
    <link rel="stylesheet" href="../../resources/css/comment.css">
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
    <nav class="hover-nav">
      <div class="hover-content">
        <h2>Contents</h2>
        <a href="#"><h3>Squat Guide</h3></a>
        <ol>
          <li><a href="#bws">before we start</a></li>
          <li><a href="#setup">set up</a></li>
          <li><a href="#descend">descending</a></li>
          <li><a href="#ascend">ascending</a></li>
          <li><a href="#adjustments">possible adjustments</a></li>
          <li><a href="#variations">squat variations</a></li>
          <li><a href="#conclusion">conclusion</a></li>
        </ol>
      </div>
      <div id="arrow">
        <i class="fa fa-caret-right" style="font-size:5rem"></i>
      </div>
    </nav>

    <header>
      <div class="container">
        <a class="logo" href="../overview/overview.html" id="mf">Monster Forest</a>
        <nav>
          <ul>
            <li><a href="./index.php">HOME</a></li>
            <li><a href="#">SQUAT</a></li>
            <li><a href="./bench.php">BENCH</a></li>
            <li><a href="./deadlift.php">DEADLIFT</a></li>
            <li>
              <a href="./login.php"
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
        <section class="page-hero">
            <div class="text" id="center">
              <h1>A BASIC GUIDE TO</h1>
              <h1 id="pw">SQUATING</h1>
              <p id="quote">
                <i>“LIGHT WEIGHT BABY! YAAAHHH!!!”</i>
              </p>
              <p id="author">&#8209Ronnie Coleman</p>
            </div>
        </section>

        <div class="articles">
          <p><span id="big">L</span>orem ipsum dolor sit amet, consectetur adipisicing elit. Nisi architecto qui id quas voluptatem corporis, et modi similique quo dolorum debitis assumenda recusandae quisquam doloremque dolore voluptatum velit? Est, enim!</p>
            <section id="bws">
                <h2>Before we start</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas 
                    necessitatibus nihil, odio, cumque deleniti quibusdam adipisci perferendis 
                    officia omnis voluptas minima reiciendis commodi ipsam incidunt voluptates. 
                    Quis, repudiandae. Sunt, assumenda!</p>
                <h3>Breathing and bracing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae 
                    dolorum atque voluptates accusantium, possimus ratione, tempore, 
                    perspiciatis temporibus laborum maiores dolor. Veniam dicta 
                    temporibus enim alias illo facere! Praesentium, labore.</p>
                <h3>Gears Options</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste debitis incidunt delectus quaerat facere, est consequuntur eaque dolorem necessitatibus! Enim veritatis repellat eius dolor, error nam hic nihil officia laboriosam.</p>
                <ul>
                    <li><h4>Belts</h4></li>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, a aliquid reprehenderit atque neque pariatur quidem quod cumque totam odio, nihil repellat maiores quas in vitae porro. Reprehenderit, asperiores labore.</p>
                    <li><h4>Shoes</h4></li>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem cupiditate placeat porro minus, voluptate reprehenderit laboriosam illum repellat! Autem saepe eligendi distinctio, harum iste eos laborum deserunt impedit earum sapiente.</p>    
                </ul>    
            </section>
        <?php if(isset($_COOKIE['userid'])) { ?>
            <section id="setup">
              <h2>The set up</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga corporis voluptates dolores odio. Explicabo deleniti illum sapiente. Esse id laboriosam, quos reiciendis autem doloremque modi harum hic quibusdam natus neque:</p>
              <ol>
                <li><p>In, velit natus! Harum cum reiciendis nihil atque mollitia, maiores molestiae sed repellendus provident
                  tatibus dolorum fugiat.</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint quae minus dignissimos nisi deleniti nulla. Mollitia, aspernatur error!</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis nisi est voluptate?</p></li>
                <li><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit consequatur architecto natus, expedita veritatis nisi?</p></li>
                <li><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, officiis.</p></li>
              </ol>
            </section>

            <section id="descend">
              <h2>The descending</h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium cum, perspiciatis beatae suscipit expedita impedit voluptatum neque culpa dolorum odit optio rerum quasi consequatur quaerat reiciendis inventore delectus magnam doloremque.</p>
              <p>Quo autem numquam nostrum at inventore voluptatibus labore eaque. Ex totam beatae laboriosam corrupti et vero culpa enim doloribus placeat cupiditate sunt deserunt laborum, praesentium, sint quibusdam, corporis officia veniam.</p>
              <h3>depth rants</h3>
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque quos natus obcaecati neque autem officiis voluptatibus libero modi numquam suscipit, officia asperiores accusamus facere dolorem, consequatur, quia corporis iste animi!</p>
            </section>

            <section id="ascend">
              <h2>The ascending</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni similique suscipit soluta rerum voluptate recusandae, sit distinctio. Repellat necessitatibus quos asperiores, nostrum perferendis, aspernatur corporis dolore quidem facere, hic accusamus!</p>
              <p>At corporis pariatur quod, architecto alias doloribus vitae ex repellat velit numquam dicta dolore, facere optio repudiandae iusto recusandae earum nemo, eligendi sapiente? Magni reiciendis autem labore placeat laboriosam impedit.</p>
            </section>

            <section id="adjustments">
              <h2>Possible adjustments</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos porro, pariatur provident quas nobis consequatur deserunt facilis optio deleniti possimus.</p>
              <h3>stance width</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum odio magnam quia? Quis, aspernatur asperiores.</p>
              <h3>toe angle</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste facilis enim aliquid suscipit explicabo dolorem commodi temporibus nihil, error officiis vel quaerat laudantium repellat, et cumque, nisi earum blanditiis. Ipsum?</p>
              <h3>Bar position</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, unde! Optio obcaecati delectus et exercitationem illum. Perferendis vero, debitis eveniet ipsa cupiditate, quasi suscipit tenetur ea quia consectetur iusto vel?</p>
            </section>

            <section id="variations">
              <h2>Squat Variations</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae dolorum voluptatem cumque deserunt reiciendis, in quas esse animi laboriosam sed.</p>
              <h3>paused squats</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius consectetur ex sapiente adipisci labore tenetur dolore delectus molestias, veniam provident possimus obcaecati natus. Aspernatur, ea harum minima odit distinctio sapiente?</p>
              <h3>Banded Squats</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, velit quod voluptatibus eligendi, expedita repudiandae nostrum pariatur eos ducimus illum quae mollitia quidem voluptatum animi quasi voluptates tempora deserunt et!</p>
              <h3>Pin Squats</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus qui fuga voluptate rerum repellat fugiat officiis aliquid. Amet, delectus consequatur architecto asperiores ipsum dolore? Voluptate sit quidem aut tempore repudiandae.</p>
              <h3>Front Squats</h3>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid repellat odit maxime optio eaque amet quos. Voluptas neque voluptatum architecto, perspiciatis voluptates adipisci dolorem pariatur suscipit aliquam sit alias quam!</p>
            </section>

            <section id="conclusion">
              <h2>Conclusion</h2>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas, nemo quas harum officia ipsum dolorem a quaerat odit quo suscipit aliquam tempore impedit quos eaque illum doloremque corporis illo eius!</p>
              <p>Soluta vero illo repellendus vel illum, animi nobis culpa temporibus ut suscipit minus veniam, ab cumque cupiditate deleniti consectetur repudiandae pariatur saepe? Temporibus facere commodi odit sed amet deserunt fugiat?</p>
            </section>
        </div>
    </main>

    <div class="comment-sec" id="#comment">
      <div class="container">
        <h2>Leave Us a Comment</h2>
        <form onsubmit="return(insertComm())">
          <textarea oninput="auto_grow(this)" maxlength="300" placeholder="Add Your Comment" type="text" id="comm-text" required></textarea>
          <div class="btn">
            <input type="submit" value='Comment'>
            <button id='clear' type="button" href='#comment'>Cancel</button>
          </div>
        </form>
      </div>
    </div>

  
    <div id="show-comm">
    </div>

    <?php } else { ?>
          <section id="non-user" style="text-align: center">
            <h2 style="
    margin:0 auto;
">Please Login to read the full Article!</h2>
            <p style="
    width: 50%;
    margin: 1rem auto;
">Thank you for visiting Monster Forest's official guide!
              Sign up for a membership today to gain full access to both the gym
              and the guides!
            </p>
            <div style="margin-top: 3rem;">
              <a href="./login.php" style="
    padding: 1rem;
    text-decoration: none;
" class="button">Login Here</a>
            </div>
          </section>
        </div>
      
    <?php } ?>

    <footer>
        <div class="subscribe" id="center">
          <h2>SUBSCRIBE FOR MORE ARTICLES!</h2>
          <form onsubmit="return(insertEmail())">
            <input type="email" value="" name="EMAIL" id="email" placeholder="Email Address" required/>
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
    <script src="../../resources/js/hoverNav.js"></script>
    <script src="../../resources/js/comment.js"></script>
    <script>
        $(document).ajaxComplete(function(){
          if($('#show-comm').length != 0) {
            $('.user-c').css({"padding": "0 8rem 0 8rem"});
            $('#show-comm').css({"background-color": "rgb(40, 40, 40)",
              "text-align" : "center",
              "height": "10rem",
              "overflow" : "scroll"});
            $('#show-comm a').css("display", "none");
            $('#show-comm p').css({"margin-right" : "2rem", 
              "display" : "inline-block", 
              "font-family" : "Hind-Madurai_Light, sans-serif",
              "font-style" : "italic",
              "font-size" : "1.2rem"});
            $('#show-comm span').css({"font-style" : "italic", 
              "display" : "inline-block",
              "font-size" : "smaller"});
          }
        });
    </script>
    <script>
        const area = document.querySelector("#comm-text");
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

        function auto_grow(element) {
            element.style.height = "5px";
            element.style.height = (element.scrollHeight)+"px";
        }
        
        function insertComm() {
          comment = $("#comm-text").val();
          $.get("./commentAjax.php", {"cmd" : "create", "comm" : comment}, function(data) {
              $("#show-comm").html(data);
          });
          clearArea(area);
          return(false);
        }
        function deleteComm(id) {
              $.get("./commentAjax.php", {"cmd" : "delete", "id" : id}, function(data) {
                $("#show-comm").html(data);
            });
            return(false);
        }
        function showComm() {
            $.get("./commentAjax.php", {"cmd" : ""}, function(data) {
                $("#show-comm").html(data);
            });
            return(false);
        }
        showComm();
    </script>
  </body>
</html>
