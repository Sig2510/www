<!doctype html>
<html lang="en">
  <head>
    <title>Blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><b>Hello, user!</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="/?r=/addPost">add new post <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<br>
        <?php foreach ($posts as $index => $post) { ?>
    <div class="card bg-light mb-3" style="max-width: 35rem; margin-left: 20px;">
  <div class="card-header"><b>
    <a href="/index.php?r=/post&id=<?php echo $post['id']; ?>" style="color: black">
        <?php echo $post['title']; ?>
        </a></b></div>
  <div class="card-body">
    <p class="card-text"><?php echo  $post['body']; ?></p>
    <p class="card-text">
      <a href="/index.php?r=/editPost&id=<?php echo $post['id']; ?>" style="color: black">
          edit
          </a>
  <input type="hidden" value="<?php echo $post['id'] ?>" name="id" >
<button style="font-size:8px" type="submit" class="btn-xs btn-danger" value="Destroy!">Delete</button></input>
      <p style="font-size:8px" align="right"><?php echo  $post['author']; ?>
      <br>comments:<?php echo $post ['comments_count']; ?></p></p>
        </form></div>
    </div>
	</div>
	</div>
		<?php } ?>

  </body>
</html>
