<!doctype html>
<html lang="en">
  <head>
    <title>Edit Post</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/"><b>Back to Homepage</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">

  </div>
</nav>

      </div>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-md-10">
          <?php if (isset($validateErrors)) {
              foreach ($validateErrors as $error) { ?>
                <div class="alert alert-danger" role="alert">
                  <?php echo $error; ?>
                </div>
            <?php }
          } ?>

          <form method="POST" action="/index.php?r=/editPost" class="form">
            <?php if (isset($oldValues)) { ?>
              <input type="text" name="title" placeholder="title" value="<?php echo $oldValues['title']; ?>"><br><br>
			  <textarea name="body"><?php echo $oldValues['body']; ?></textarea><br><br>
              <input type="text" name="author" placeholder="author" value="<?php echo $oldValues['author']; ?>"><br><br>

            <?php } else { ?>
              <input type="text" name="author" placeholder="author" value="<?php echo $post['author']; ?>"><br><br>
              <input type="text" name="title" placeholder="title" value="<?php echo $post['title']; ?>"><br><br>
              <textarea name="body"><?php echo $post['body']; ?></textarea><br><br>
            <?php }?>
            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
            <input type="submit" value="Edit"><br><br>
          </form>
        </div>

      </div>
    </div>
  </body>
</html>
