<?php include("class-jukebox.php"); ?>
<?php
    //create the Jukebox object
    $theJukebox = new jukebox();
?><!doctype html>
<html lang="en">
  <head>
    <title>Music Jukebox</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body style="margin-top: 25px">

      <div class="container">
		<div class="row">
    		<div class="col-5">
				<?php
                    //show the jukebox playlit
                    $theJukebox->showPlaylist();
				?>
    		</div>
    		<div class="col-7">
                <h5>Now Playing</h5> <h3 id="now-playing">...</h3>
                <br /><br /><br />
                <button type="button" id="btn-play" class="btn btn-success" disabled>Pause/Play</button>
                <button type="button" id="btn-stop" class="btn btn-danger" disabled>Stop</button>
    		</div>
  		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script>
        //when a song is cliked, update what is playing and enable buttons
        $('#musiclist a').on('click', function (e) {
            e.preventDefault();
            $songName = $(this)[0].innerHTML;
            $('#now-playing').html($songName);
            $('.btn').prop('disabled', false);
        });

        //set behaviour on stop button
        $('#btn-stop').on('click', function(e) {
            e.preventDefault(); 
            $(this).prop('disabled', true);
        });
        
        //set behaviour on play button
        $('#btn-play').on('click', function(e) {
            e.preventDefault(); 
            $('#btn-stop').prop('disabled', false);
        });
    </script>
  </body>
</html>
