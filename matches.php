<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="matches.css" type="text/css">
    <title>Interlake Cricket Club | Matches</title>
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
            <a href="announcements.php">Announcements</a>
            <a href="index.html">Join the Club</a>
            <a class="active" href="matches.php">Matches</a>
        </div>
    </div>


    <div class="image1">
        <h1 id="iccHeading" class="blue">Interlake <span class="red">Cricket Club </span>Matches</h1>
    </div>
    <br>


    <div class="matchList">
        <h3>Matches</h3>

        <table id="table">
            <tr>
                <th>ID (Internal Use)</th>
                <th>Match Date</th>
                <th>Home Team</th>
                <th>Away Team</th>
                <th>Player of the Match</th>
            </tr>
        <?php
            $host = "ibcasserver.mysql.database.azure.com";
            $username = "ibcasvismay@ibcasserver";
            $password = "jointechsavvyyouth1!";
            $db_name = "cricket";
            
            $conn = mysqli_init();
            mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);

            $sql = "SELECT * FROM matches";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <td class = \"id\">". $row["id"] ."</td>
                            <td>". $row["matchDate"] ."</td>
                            <td>". $row["homeTeam"] . "</td>
                            <td>". $row["awayTeam"] ."</td>
                            <td class = \"playerOfMatch\">". $row["playerOfTheMatch"] ."</td>
                        </tr>
                    ";
                }
                echo "</table>";
            } 
            else {
                echo "Error, please contact Vismay Patel";
            }
            $conn->close();
        ?>

    </div>

</body>
</html>