<html>
  <head>
    <title>PHP Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

     <?php
      $link = '';
      $linkname = fopen('https://jsonplaceholder.typicode.com/post/','r') or die($php_errormsg); 
      while (! feof($linkname)){
        $link .= fread($linkname,1048576);
        echo $link["title"];
      }
      ?>
    <section>
      <div class="row bg-color">
        <div class="col-lg-4">
          <div class="card mt-3 mb-3" >
            <div class="card-body">
              <h5 class="card-title">Apple Introduces Search Ads Basic</h5>
              <p class="card-text">It is a long establish fact that a reader will be distracted by readable content of a page when looking at its layout. The point of using Lorem Ipsum s that it has a more-or-less normal</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-3 mb-3">
            <div class="card-body">
              <h5 class="card-title">Apple Introduces Search Ads Basic</h5>
              <p class="card-text">It is a long establish fact that a reader will be distracted by readable content of a page when looking at its layout. The point of using Lorem Ipsum s that it has a more-or-less normal</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card mt-3 mb-3">
            <div class="card-body">
              <h5 class="card-title">Apple Introduces Search Ads Basic</h5>
              <p class="card-text">It is a long establish fact that a reader will be distracted by readable content of a page when looking at its layout. The point of using Lorem Ipsum s that it has a more-or-less normal</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script> 
  </body>
</html>