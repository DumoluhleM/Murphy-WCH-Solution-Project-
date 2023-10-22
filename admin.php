<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Admin Dashboard</h1>
        
        <?php
        // Database connection
        $conn = new mysqli("localhost", "root", "", "chatapp");
        
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        // Fetch game status and team scores from the database
        $sql = "SELECT * FROM game";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $gameStatus = $row["status"];
            $teamAScore = $row["team_a_score"];
            $teamBScore = $row["team_b_score"];
        } else {
            $gameStatus = "Not started";
            $teamAScore = 0;
            $teamBScore = 0;
        }
        
        // Close database connection
        $conn->close();
        ?>

        <h2>Game Status: <?php echo $gameStatus; ?></h2>

        <form method="POST" action="update_scores.php">
            <label for="team_a_score">Team A Score:</label>
            <input type="number" id="team_a_score" name="team_a_score" value="<?php echo $teamAScore; ?>">

            <label for="team_b_score">Team B Score:</label>
            <input type="number" id="team_b_score" name="team_b_score" value="<?php echo $teamBScore; ?>">

            <input type="submit" value="Update Scores">
        </form>
    </div>
</body>
</html>
