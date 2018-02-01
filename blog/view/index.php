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
  <a class="navbar-brand" href="/"><b>Hello,
    <?php if (isset($this->session['username'])) {
    echo $this->session['username'] . '!';
  }
  else echo 'user';?></b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav"><a href="/?r=/addPost">
      <button type="button" class="btn btn-secondary">
        add new post <span class="sr-only">(current)</span>
      </button></a>&nbsp;&nbsp;<li></ul>
    <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Sort by
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Author</a>
    <a class="dropdown-item" href="#">Date</a>
    <a class="dropdown-item" href="#">title</a>
  </div>
</div>
</li>&nbsp;&nbsp;
  <b>Most recent comment:</b>&nbsp;&nbsp; <?php
    print_r ($this->postModel->recentComment());
  ?>&nbsp;&nbsp;

  <?php if ($this->isLoggedIn()) { ?>
              <form method="POST" action="/index.php?r=/logout">
                <input type="submit" class="btn btn-danger" name="logout" value="Logout!">
              </form>
            <?php } else { ?>
              <a href="/?r=/register">register</a>&nbsp;&nbsp;
              <a href="/?r=/login">login</a>
            <?php } ?></div>

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
    <nav>
          <ul class="pagination">
            <li class="page-item <?php if ($currentPage == 1) { echo 'active'; } ?>">
              <a class="page-link" href="/index.php?r=/&page=1">First page</a>
            </li>
            <?php
              $start = ($currentPage < 4) ? 1 : $currentPage - 3;
              $stop = ($currentPage > $pageNumber - 3) ? $pageNumber : $currentPage + 3;

              for($i = $start; $i <= $stop; $i++) { ?>
              <li class="page-item <?php if ($i == $currentPage) { echo 'active'; } ?>">
                <a class="page-link" href="/index.php?r=/&page=<?php echo $i; ?>"><?php echo $i; ?></a>
              </li>
            <?php }?>
            <li class="page-item <?php if ($currentPage == $pageNumber) { echo 'active'; } ?>">
              <a class="page-link" href="/index.php?r=/&page=<?php echo $pageNumber; ?>">Last page</a>
            </li>
          </ul>
        </nav>

  </body>
</html>
