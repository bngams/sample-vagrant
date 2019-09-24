<h1>Details of : <?php $movie['title'] ?></h1>

<div class="row">
  <div class="col-md-4"><img src="<?php echo $movie['img_url'] ?>" alt="" /></div>
  <div class="col-md-4"><strong><?php echo $movie['title'] ?></strong><p>
      <?php echo $movie['plot'] ?>
  </p></div>
  <div class="col-md-4">
      <ul>
          <li>Durée : <?php echo $movie['runtime'] ?></li>
          <li>Langue : <?php echo $movie['language'] ?></li>
          <li>Récompenses : <?php echo $movie['awards'] ?></li>
      </ul>
  </div>
</div>
