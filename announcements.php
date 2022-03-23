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
    <div class="header">
        <div class="leftHeader">
            <img height="60px" src="/src/images/ICC LOGO.svg">
            <span class="headerTitle">Interlake Cricket Club</span>
        </div>
        <div class="navLinks">
            <a href="index.html">Home</a>
            <a class="active" href="announcements.php">Announcements</a>
            <a href="index.html">Join the Club</a>
        </div>
    </div>


    <div class="image1">
        <h1 id="iccHeading" class="blue">Interlake <span class="red">Cricket Club </span>Announcements</h1>
    </div>
    <br>


    <div class="articleHolder">
        <h3>Announcements</h3>
        <?
            $host = "ibcasserver.mysql.database.azure.com";
            $username = "ibcasvismay@ibcasserver";
            $password = "jointechsavvyyouth1!";
            $db_name = "cricket";
            
            $conn = mysqli_init();
            mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

            $sql = "SELECT * FROM announcements";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <div class=\"article\" style=\"width: 18rem;\">
                            <img src=\"" . $row['imageURL'] . "\" class=\"card-img-top\">
                            <div class=\"card-body\">
                                <h5 class=\"card-title\">" . $row['heading'] . "</h5>
                                <p class=\"card-text\">" . $row['summary'] . "</p>
                                <form action=\"" . $row['articleLink'] . "\">
                                    <button type=\"submit\">Read this</button>
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


    <br><br>
    <footer>
        <h3 style="font-size: 16px;">Created and Coded by <a style="color: white; text-decoration: underline;" href="https://vismaypatel.com">Vismay Patel</a> © 2022</h3>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        function jumpScroll(x) {
            if (x == 1) {
                window.scroll(0, 2175);
            }
        }
    </script>
</body>

</html>