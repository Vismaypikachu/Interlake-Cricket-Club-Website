<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="announcements.css" type="text/css">
    <title>Interlake Cricket Club | Announcements</title>
    <link rel="icon" type="image/x-icon" href="/src/images/ICC LOGO.svg">
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img height="60px" src="/src/images/ICC LOGO.svg"/>
            </a>
            <a class="navbar-brand" href="index.php">
                <h4 style = "font-size: 25px; font-family: Avenir;">Interlake Cricket Club</h4>
            </a>
        
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://my-store-b94780.creator-spring.com/">Club Merch</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Announcements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://bit.ly/ihscricket">Join the Club</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="matchesList.php">Matches</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="IYANVGO.php">IYANVGO!</a>
                    </li>
                </ul>
                <span class="navbar-text"></span>
            </div>
        </div>
    </nav>

    <div class="image1">
        <h1 id="iccHeading" class="blue">Interlake <span class="red">Cricket Club </span>Announcements</h1>
    </div>
    <br>

    <h3 class="announcementsHeader">Announcements</h3>

    <div class="articleHolder">
        <?php
            $host = "ibcasserver.mysql.database.azure.com";
            $username = "ibcasvismay@ibcasserver";
            $password = "jointechsavvyyouth1!";
            $db_name = "cricket";
            
            $conn = mysqli_init();
            mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

            $sql = "SELECT * FROM announcements order by id desc;";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <div class=\"article\">
                            <img src=\"" . $row['imageURL'] . "\" class=\"card-img-top\">
                            <div class=\"articleBody\">
                                <h5 style = \"font-family: Avenir;\" class=\"articleHeading\">" . $row['heading'] . "</h5>
                                <p style = \"font-family: Avenir;\" class=\"articleSummary\">" . $row['summary'] . "<br>ID (internal use): ". $row["id"] ."</p>
                                <form action=\"" . $row['articleLink'] ."\" method=\"post\" style = \"text-align: middle\">
                                    <button class=\"btn btn-outline-primary\" style=\"margin: 0 auto\" name = \"articleNumber\" type=\"submit\" value = \"". $row['id'] ."\">Read this</button>
                                </form>
                            </div>
                        </div>
                    ";
                }
            } 
            else {
                echo "Error, please contact Vismay Patel";
            }
            $conn->close();
        ?>

    </div>


    <br><br><br><br><br>
    <footer>
        <h3 style="font-size: 16px;">Created and Coded by <a style="color: white; text-decoration: underline;" href="https://vismaypatel.com">Vismay Patel</a> © 2022</h3>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>