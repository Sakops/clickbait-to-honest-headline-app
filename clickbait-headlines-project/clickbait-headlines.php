<?php 
    define("TITLE", "Clickbait headlines turned honest");
    include_once("functions.php");

    if(isset($_POST["submit-btn"])){
        clickBaitReplacer();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css"></link:style>
    <title><?php echo TITLE;?></title>
</head>
<body>
    <div class="container">
        <h2><?php echo TITLE;?></h2>
        <p class="lead">Let's turn those clickbait headlines into honest ones using this program</p>
        <div class="row">
            <form action="" class="col-sm-8 col-sm-offset-2" method="post">
                <textarea class="form-control input-lg" placeholder="Paste clickbait headline here" name="clickbait-headline" id="" cols="20" rows="10">
                </textarea><br>
                <button type="submit" class="btn btn-outline-primary btn-lg" name="submit-btn" id="submitBtn">Submit</button>
            </form>
        </div>
        <?php
            if(isset($_POST["submit-btn"])){
                $clickbait = clickbaitReplacer()[0];
                $honestHeadline = clickbaitReplacer()[1];
                
                displayClickbait($clickbait, $honestHeadline);
            }
        ?>
    </div>
</body>
</html>
