<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Flash Card Session</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f3f3f3;
    color: #333;
  }
  .sidebar {
    background-color: #000000;
    padding: 20px;
    width: 250px;
    height: 100vh;
    float: left;
  }
  .main-content {
    margin-left: 250px;
    padding: 20px;
  }
  .sidebar img {
    width: 100%;
    height: auto;
    border: 5px solid #ffffff;
    box-sizing: border-box;
  }
  .sidebar button,
  .sidebar .menu-item {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    background-color: #666;
    color: white;
    text-align: left;
    border: none;
    cursor: pointer;
  }
  .sign-out-btn {
    background-color: #ffa500;
    color: #000000;
  }
  .menu-item:hover,
  .sign-out-btn:hover {
    background-color: #777777;
  }
  .profile-pic {
    margin-bottom: 20px;
  }
  .flashcard {
    width: 500px;
    height: 300px;
    margin: 20px auto;
    background-color: #ffffff;
    position: relative;
    text-align: center;
    line-height: 300px;
    font-size: 24px;
  }
  .control-buttons {
    text-align: center;
  }
  .control-buttons button {
    padding: 10px 20px;
    margin: 0 10px;
    background-color: #888;
    color: #fff;
    border: none;
    cursor: pointer;
  }
  .control-buttons button:hover {
    background-color: #aaa;
  }
  .submit-btn {
    background-color: #ff0000;
    color: #ffffff;
  }
  .settings-btn,
  .quit-btn,
  .add-fav-btn {
    float: right;
  }
  .settings-btn {
    background-color: #ff0000;
    color: #ffffff;
  }
  .quit-btn {
    background-color: #0000ff;
    color: #ffffff;
  }
  .add-fav-btn {
    background-color: #ff00ff;
    color: #ffffff;
  }
  .progress-bar {
    width: 100%;
    background-color: #cccccc;
    height: 25px;
    margin-top: 20px;
  }
  .progress-bar-filled {
    width: 0%; /* Dynamic based on progress */
    background-color: #00ff00;
    height: 100%;
  }
</style>
</head>
<body>

<div class="sidebar">
  <div class="profile-pic">Profile pic</div>
  <div class="menu-item">Stats</div>
  <div class="menu-item">Favourites</div>
  <div class="menu-item">Browse Politicians</div>
  <div class="menu-item">Contribute New Data</div>
  <div class="menu-item">Account Management</div>
  <button class="sign-out-btn">Sign Out</button>
</div>

<div class="main-content">
  <div>
    <button class="settings-btn">settings</button>
    <button class="quit-btn">quit game</button>
  </div>
  <h1>FLASH CARD SESSION</h1>
  <div>
    <button class="control-buttons">&#60;</button>
    <div class="flashcard">
      <span>photo of politician</span>
      <!-- Dynamic loading of politician image -->
      <!-- Example from Unsplash for demonstration purposes -->
      <img src="https://source.unsplash.com/random/500x300" alt="Politician">
    </div>
    <button class="control-buttons">&#62;</button>
    <button class="add-fav-btn">add to favourite</button>
  </div>
  <div class="control-buttons">
    <button>option 1</button>
    <button>option 2</button>
    <button>option 3</button>
    <button>option 4</button>
  </div>
  <button class="submit-btn">submit</button>
  <div class="progress-bar">
    <div class="progress-bar-filled"></div>
  </div>
</