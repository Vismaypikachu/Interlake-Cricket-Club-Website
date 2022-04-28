<!DOCTYPE html>
<html lang="en">
    <?php
        $host = "ibcasserver.mysql.database.azure.com";
        $username = "ibcasvismay@ibcasserver";
        $password = "jointechsavvyyouth1!";
        $db_name = "cricket";
        
        $conn = mysqli_init();
        mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

        $sql = "SELECT * FROM article WHERE articleNumber = ". $_POST['articleNumber'] .";";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $heading = $row['heading'];
            $author = $row['author'];
            $articleDate = $row['articleDate'];
            $imageURL = $row['imageURL'];
            $content = $row['content'];
            $articleNumber = $row['articleNumber'];
        }
        else{
            echo "Error, please contact Vismay Patel";
        }

        $conn->close();
    ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="defaultArticle.css" type="text/css">
    <title>Interlake Cricket Club | Test Article</title>
    <link rel="icon" type="image/x-icon" href="/src/images/ICC LOGO.svg">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img height="60px" src="/src/images/ICC LOGO.svg"/>
            </a>
            Interlake Cricket Club
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://my-store-b94780.creator-spring.com/">Club Merch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/announcements.php">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://bit.ly/ihscricket">Join the Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/matches.php">Matches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/IYANVGO.php">IYANVGO!</a>
                    </li>
                </ul>
                <span class="navbar-text"></span>
            </div>
        </div>
    </nav>

    <div class="image1">
        <h1 id="iccHeading" class="blue">Interlake <span class="red">Cricket Club</span></h1>
    </div>
    <br>

    <div class = "article">
        <div class = "articleHeader">
            <h3><?php echo $heading; ?></h3>
        </div>
        <div class = "articleContent">
            <p><?php echo $content; ?></p>
        </div>
    </div>  
    <br><br>
    <footer>
        <h3 style = "font-size: 16px;">Created and Coded by <a style = "color: white; text-decoration: underline;" href = "https://vismaypatel.com">Vismay Patel</a> © 2022</h3>
    </footer>
</body>
</html>