<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contribute Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            float: left;
            width: 200px;
            padding: 10px;
        }
        .profile-img {
            width: 180px;
            height: 180px;
            background-color: #ddd;
        }
        .menu-item {
            background-color: #f5f5f5;
            margin-bottom: 8px;
            padding: 10px;
            color: #333;
            text-decoration: none;
            display: block;
            text-align: center;
        }
    
        .menu-item:hover {
            background-color: #e9e9e9;
        }
        .main-content {
            margin-left: 220px;
            padding: 10px;
        }
        .deck-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }
        .deck {
            height: 150px;
            background-color: #e0e0e0;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
        }
        .deck:hover {
            background-color: #cccccc;
        }
        .deck-title {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="profile-img"></div>
        <div class="menu-item">stats</div>
        <div class="menu-item">Favourites</div>
        <div class="menu-item">Browse politicians</div>
        <div class="menu-item">Account Management</div>
        <div class="menu-item">sign out</div>
    </div>
    <div class="main-content">
        <h1>CHOOSE A DECK TO MEMORIZE</h1>
        <div class="deck-container">
            <div class="deck"><span class="deck-title">USA</span></div>
            <div class="deck"><span class="deck-title">CHINA</span></div>
            <div class="deck"><span class="deck-title">GERMANY</span></div>
            <div class="deck"><span class="deck-title">PAKISTAN</span></div>
            <div class="deck"><span class="deck-title">KENYA</span></div>
            <div class="deck"><span class="deck-title">BRAZIL</span></div>
            <div class="deck"><span class="deck-title">SOUTH AFRICA</span></div>
            <div class="deck"><span class="deck-title">ARGENTINA</span></div>
            <div class="deck"><span class="deck-title">POLAND</span></div>
        </div>
    </div>
</body>
</html>