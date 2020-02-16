<?php
    include_once 'variables.php';
    include_once 'quotes.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Date.IO</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- Start of Navbar -->
    <nav>
        <div class="brand">
            <h1>
                date.io
            </h1>
        </div>
    </nav>
    <!-- End of Navbar -->

    <!-- Start of Profile -->
    <div class="profile">
        <div class="name">Mr. Anaghan,</div>
        <div class="call">
            <form action="connect.php" method="post">
                <button style="border:none; background: none; padding 0; height: 100%; width: 100%;margin: 0; font-size: inherit;"type="submit" value="c" name="submit">
                    <img src="https://www.pngkit.com/png/full/110-1103824_19-telephone-clip-black-and-white-download-phone.png" style="width:20px;" alt="">
                </button>

            </form>
        </div>
    </div>
    <!-- End of Profile -->

    <!-- Start of Content -->
    <section class="content-wrapper">
    <?php
        $difference = $currentDate - $userLastCall;
        if( $difference > $frequency && $distance > 201)
        {
    ?>
        <div class="central">
            <h1 style="text-align:center;">Missing Her????</h1>
            <h6>
            This function only works if the couples are in distant relationship ie, greater than 201KM (As said by Google).
            </h6>
            <!-- "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati ipsam tenetur nisi. Eaque autem esse neque obcaecati accusamus nobis? Praesentium quo impedit consequuntur temporibus, ut quidem! Numquam temporibus nostrum aliquid?" -->
        </div>
    <?php
        }
        else
        {
    ?>
        <div class="central">
                <h3>Calling Some Love Quotes....</h3>
                <?php
                    echo $quotes[rand(0,6)];
                ?>                
        </div>
    <?php
        }
    ?>
    </section>
    <!-- End of Content -->
</body>
</html>