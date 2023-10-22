<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>MURPHY CHAT SYSTEM</title>
  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
</head>


<body>
    <div class="containerdash">
        
        <h2>Admin Dashboard</h2>
        
        <?php
        // Check if the form is submitted
        if (isset($_POST['submit'])) {
            // Get the scores for each team
            $team1Score = $_POST['team1_score'];
            $team2Score = $_POST['team2_score'];
            $team3Score = $_POST['team3_score'];
            $team4Score = $_POST['team4_score'];
            
            // Update the scores in the database or perform any other required actions
            // ...
            
            echo "<p class='success'>Scores updated successfully!</p>";
        }
        ?>
        
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label>Team 1 Score:</label>
                <input type="number" name="team1_score" required>
            </div>
            
            <div class="form-group">
                <label>Team 2 Score:</label>
                <input type="number" name="team2_score" required>
            </div>
            
            <div class="form-group">
                <label>Team 3 Score:</label>
                <input type="number" name="team3_score" required>
            </div>
            
            <div class="form-group">
                <label>Team 4 Score:</label>
                <input type="number" name="team4_score" required>
            </div>
            
            <div class="form-group">
                <label>Upload Picture:</label>
                <input type="file" name="picture" accept="image/*">
            </div>
            
            <div class="form-group">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
