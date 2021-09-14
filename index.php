<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ความรู้</title>
    <!--icon ของเว็บไซต์-->
    
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/bootstrap-icons.svg">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <style>
    .fakeimg {
        height: 200px;
        background: #aaa;
    }
    </style>
    <!--ส่วนหัวบนสุด-->
    <div>
    <?php include("head-top.php"); ?>
    </div>
    <div class="container">
        <?php
                if (isset($_SESSION['useremail'])) :?>
                <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
                <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
        <?php endif ?>
    </div>

    <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 16px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

#myBtn:hover {
  background-color: #555;
}
</style>

</head>
<body>
    <!--ส่วนหัว-->
    <div>
        <?php include("head.php"); ?>
    </div>
    <!--ส่วนเมนู-->
    <div>
        <?php include("menu.php"); ?>
    </div>
    <!--ส่วนเนื้อหา-->
    <div class="container" style="margin-top:30px">
        <?php include("content.php") ?>
    </div>
    <!--ส่วนล่าง-->
    <div class="jumbotron text-center" style="margin-bottom:0">
        <?php include("footer.php"); ?>
    </div>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>