<!doctype html>
<html lang="en">
  <head>
    <title>Single Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><b>Back to homepage</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"><a href="/?r=/addPost">
      <button type="button" class="btn btn-secondary">
        add new post <span class="sr-only">(current)</span>
      </button></a>&nbsp;&nbsp;<li>
    </ul>
  </div>
</nav><br>
    <div class="container">
    <div class="card bg-light mb-3" style="max-width: 50rem;">
  <div class="card-header"><b>
    <?php echo $post['title']; ?></b></div>
  <div class="card-body">
    <p class="card-text"><?php echo  $post['body']; ?></p>
    <p style="font-size:8px" align="right"><form method="POST" action="/index.php?r=/deletePost">
  <input type="hidden" value="<?php echo $post['id'] ?>" name="id" >
<button style="font-size:8px" type="submit" class="btn-xs btn-danger" value="Destroy!">Delete</button></input>
      <p style="font-size:8px" align="right"><?php echo  $post['author']; ?></p></p>
        </form></p>
              </div>
            </div>
      </div>
      <?php foreach ($comments as $comment ){?>
        <div class="card">
          <div class="card-body">
            <b><?php echo $comment['author'];?></b>: <?php echo $comment['body']; ?>
          </div>
        </div>
      <?php }?>

  </body>
</html>
