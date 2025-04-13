<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
    <link rel="stylesheet" href="input-box.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="logo">
            <img src="../assest/logo.png" alt="Logo" class="logo">
        </div>
        <link rel="stylesheet" href="../styles.css">
        <link rel="stylesheet" href="../style.css">
        <div id="places" class="container-places">
        <ul class="navbar">
            <li ><a href="../home.html">Home</a></li>
            <li><a href="../Places.html" aria-selected="true">Places</a></li>
            <li><a href="../php_project/index.html">FogChat</a></li>
            <li><a href="../About.html">About</a></li>
            <li><a href="Login.html" class="logout"><i class="fas fa-sign-out-alt logout-icon"></i> Log out</a></li>
        </ul>
        <a href="../Places.html" ><i class="fa-solid fa-circle-arrow-left"></i></a>
        <style>
        
        body {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                color: white;
                padding: 300px;
                background:black;
            }
            </style>
    
    </head>
    
    <body>
    <div class="container2">
        <div class="row">
    
    <form action="add_rate.php" method="post">
    
        <div>
            <h3 id="rate"> Rating System </h3>
        </div>
    
        <div>
             <label>Name</label>
             <input type="text" name="name" class="input-purple">
        </div>
    
             <div class="rateyo" id= "rating"
             data-rateyo-rating="4"
             data-rateyo-num-stars="5"
             data-rateyo-score="3">
             </div>
    
        <span class='result'>0</span>
        <input type="hidden" name="rating">
    
        </div>
    
        <div><input type="submit" name="add" class="submit"> </div>
        
    </form>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
    
    <script>
    
    
        $(function () {
            $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
                var rating = data.rating;
                $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
                $(this).parent().find('.result').text('rating :'+ rating);
                $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });
    
    </script>
    </body>
    
    </html>
    <?php
    require 'db_connection.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST["name"];
        $rating = $_POST["rating"];
    
        $sql = "INSERT INTO ratee (name,rate) VALUES ('$name','$rating')";
        if (mysqli_query($conn, $sql))
        {
            echo "New Rate addedddd successfully";
        }
        else
        {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    ?>