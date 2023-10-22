<!DOCTYPE html>
<html>
<head>
  <title>Murphy Game Dashboard</title>
  <link rel="stylesheet" href="dashboardcss.css">
</head>


<body>
  <header>
    <h1>Murphy Game Dashboard</h1>
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Players</a></li>
        <li><a href="#">Cards</a></li>
        <li><a href="#">Settings</a></li>
      </ul>
    </nav>
  </header>
  
  <main>
    <section>
      <h2>Game Status</h2>
      <p>Game ID: 12345</p>
      <p>Team A Score: 5</p>
      <p>Team B Score: 3</p>
      <p>Time Left: 10:25</p>
      <button>End Game</button>
    </section>
    
    <section>
      <h2>Player Stats</h2>
      <table>
        <thead>
          <tr>
            <th>Player</th>
            <th>Team</th>
            <th>Score</th>
            <th>Questions Asked</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Player 1</td>
            <td>Team A</td>
            <td>2</td>
            <td>5</td>
          </tr>
          <tr>
            <td>Player 2</td>
            <td>Team A</td>
            <td>3</td>
            <td>6</td>
          </tr>
          <tr>
            <td>Player 3</td>
            <td>Team B</td>
            <td>1</td>
            <td>4</td>
          </tr>
          <tr>
            <td>Player 4</td>
            <td>Team B</td>
            <td>2</td>
            <td>3</td>
          </tr>
        </tbody>
      </table>
    </section>
    
    <section>
      <h2>Card List</h2>
      <ul>
        <li>Card 1: This is a clue.</li>
        <li>Card 2: This is another clue.</li>
        <li>Card 3: This is a third clue.</li>
        <!-- Repeat for all cards -->
      </ul>
    </section>
  </main>
  
  <footer>
    <p>&copy; 2023 Murphy Game</p>
  </footer>
  <script src="main.js"></script>

</body>
</html>
