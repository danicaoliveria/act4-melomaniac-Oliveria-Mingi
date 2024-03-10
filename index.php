<!DOCTYPE html>
<html>
<head>
	<title>Echoes of the Soul</title>
	
	<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
			background-color: pink;
		}
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 20px;
		}
		
		.song {
			width: 200px;
			text-align: center;
		}
		.song-title {
        margin-top: 10px;
        font-weight: bold;
        color: #000080;
        }
		.song-image {
            width: 150px;
            height: auto;
            border-radius: 10px;
		}
		.song-title{
			margin-top: 10px;
			font-weight: bold;
		}
		.song-artist {
            margin-top: 5px;
            font-size: 14px;
            color:  black;
        }
        
		</style>
</head>
  
<body>
<h1 style="display: flex; justify-content: flex-start; align-items: center;">
  <span style="margin-right: 120px;">Echoes of the Soul</span>
</h1>
<div class="container">
        <div class="song">
			<img class="song-image" src="song1.png" alt="Best Part">
            <p class="song-title"><a href="song1.php">Best Part</a></p>
            <p class="song-artist">song by Daniel Caesar</p>
        </div>
        <div class="song">
			<img class="song-image" src="song2.png" alt="One">
            <p class="song-title"><a href="song2.php">One</a></p>
            <p class="song-artist">song by Ed Sheeran</p>
        </div>
        <div class="song">
	 		<img class="song-image" src="song3.png" alt="Daylight">
            <p class="song-title"><a href="song3.php">Daylight</a></p>
            <p class="song-artist">song by Taylor Swift</p>
        </div>
    </div>
    <div class="container">
        <div class="song">
			<img class="song-image" src="song4.png" alt="Kiss Me">
            <p class="song-title"><a href="song4.php">Kiss Me</a></p>
            <p class="song-artist">song by Sixpence None The Richer</p>
        </div>
        <div class="song">
			<img class="song-image" src="song5.png" alt="The Archer">
            <p class="song-title"><a href="song5.php">The Archer</a></p>
            <p class="song-artist">song by Taylor Swift</p>
        </div>
    <ul>
</body>
</html>