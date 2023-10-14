<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/Home.css">
  <title>Document</title>
</head>

<body>
  <div class="navbar">


  </div>
  <div class="bg">

    <div class="title">
      S C O R E W A V E
    </div>

    <div class="subtext">

      <div class="sub">
        <pre>M A K E   Y O U R   G A M E   A</pre>
      </div>
      <div
        style="font-size: 14px; ; text-align:left; width:42%; float:left;  ; padding-left:4.7px; color:red; margin-top: -0.6px; ;">
        L I V E
      </div>

    </div>

    <div class="btncreate">
      <button class="create" action="CreateMatch.php" id="creatematch">
        <pre> C R E A T E   M Y   G A M E </pre>
      </button>
    </div>
  </div>

  <div class="context">
    <div class="context about">A B O U T</div>
    <div class="context descript">
      Create or schedule your matches for your sport within few steps! At scorewave every game matters, no matter how
      small!
      Host your own sport matches and publish it live for free !
    </div>


  </div>

  <div class="context support">
    <div class="context contact">
      <pre>C O N T A C T  U S</pre>
    </div>


    <div class="links">

      <div class="images">

        <div class="image1">
          <img src="Instagram.png" alt="" height="120" width="120">
        </div>

        <div class="image2">
          <img src="gmail.jpg" alt="" height="120" width="200">
        </div>

        <div class="image3">
          <img src="github.png" alt="" height="120" width="120">
        </div>

      </div>


      <div class="buttons">

        <div class="buttons redir1">
          <button class="stereo">V I S I T</button>
        </div>

        <div class="buttons redir2">
          <button class="stereo">V I S I T</button>
        </div>

        <div class="buttons redir3">
          <button class="stereo">V I S I T</button>
        </div>

      </div>
      <div class="insta">INSTAGRAM</div>
      <div class="gmail">GMAIL</div>
      <div class="github">GITHUB</div>
    </div>

  </div>

  <script>

    const createButton = document.getElementById("creatematch");

    createButton.addEventListener("click", function () {
      window.open("CreateMatch.php", "_blank");
    });

  </script>

</body>


</html>