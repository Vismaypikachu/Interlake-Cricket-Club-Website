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
            echo $heading;
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
    
    <div class="header">
        <div class="leftHeader">
            <img height="60px" src="/src/images/ICC LOGO.svg">
            <span class="headerTitle">Interlake Cricket Club</span>
        </div>
        <div class="navLinks">
            <a href="\index.html">Home</a>
            <a href="\announcements.php">Announcements</a>
            <a href="\index.html">Join the Club</a>
            <a href="\matches.php">Matches</a>
        </div>
    </div>


    <div class="image1">
        <h1 id="iccHeading" class="blue">Interlake <span class="red">Cricket Club</span></h1>
    </div>
    <br>

    <div class = "article">
        <div class = "articleHeader">
            <h3><?php echo $heading; ?></h3>
        </div>
    </div>  

</body>
</html>