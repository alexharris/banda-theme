<?php get_header(); ?>



    <!-- Marketing messaging and featurettes
    ================================================== -->

    <div class="container">
    <div class="row maincontent">
        <div class="col-sm-12">
            <div class="jumbotron jumbotron-fluid" style="background-color: #fff;">
            	<div class="container">
            		<h2 class="display-4">Everything is awesome</h1>
                <p class="lead">When you're part of a theme</p>
              </div>
            </div>
        </div>
    </div>
      <!-- Three columns of text below the carousel -->
      <div class="row maincontent">
          <div class="col-sm-12">
            <h2>Testing this</h2>
          </div>
        <div class="col-sm-4">
          <?php if ( is_active_sidebar( 'front-1' ) ) : ?>
              <?php dynamic_sidebar( 'front-1' ); ?>
          <?php else : ?>
              <div class="card">
              	<img class="card-img-top img-fluid" src="https://placebear.com/500/300" alt="Card image cap">
              	<div class="card-block">
              		<h4 class="card-title">Card title</h4>
              		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              		<a href="#" class="btn btn-primary">Go somewhere</a>
              	</div>
              </div>
          <?php endif; ?>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <?php if ( is_active_sidebar( 'front-2' ) ) : ?>
              <?php dynamic_sidebar( 'front-2' ); ?>
          <?php else : ?>
        <div class="card">
        	<img class="card-img-top img-fluid" src="https://placebear.com/600/300" alt="Card image cap">
        	<div class="card-block">
        		<h4 class="card-title">Card title</h4>
        		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        		<a href="#" class="btn btn-primary">Go somewhere</a>
        	</div>
        </div>
          <?php endif; ?>
        </div><!-- /.col-sm-4 -->
        <div class="col-sm-4">
          <?php if ( is_active_sidebar( 'front-3' ) ) : ?>
              <?php dynamic_sidebar( 'front-3' ); ?>
          <?php else : ?>
        <div class="card">
        	<img class="card-img-top img-fluid" src="https://placebear.com/400/300" alt="Card image cap">
        	<div class="card-block">
        		<h4 class="card-title">Card title</h4>
        		<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        		<a href="#" class="btn btn-primary">Go somewhere</a>
        	</div>
        </div>
          <?php endif; ?>
        </div><!-- /.col-sm-4 -->
      </div><!-- /.row -->
      <div class="row maincontent">
          <div class="col-sm-12">
            <h2>Testing this</h2>
            <p>You know, I don't want to spoil the party but, does anyone notice that we're stuck in the middle of the ocean on this couch? Do you know what kind of sunburn I'm going to get? None, 'cause I'm covered in latex, but you guys are going to get seriously fried. I mean it's not like a... like a big gigantic ship is just going to come out of nowhere and save US by gosh.</p>
          </div>
          <div class="col-sm-12">
              <table class="table table-bordered">
              	<thead>
              		<tr>
              			<th>#</th>
              			<th>First Name</th>
              			<th>Last Name</th>
              			<th>Username</th>
              		</tr>
              	</thead>
              	<tbody>
              		<tr>
              			<th scope="row">1</th>
              			<td>Mark</td>
              			<td>Otto</td>
              			<td>@mdo</td>
              		</tr>
              		<tr>
              			<th scope="row">2</th>
              			<td>Mark</td>
              			<td>Otto</td>
              			<td>@TwBootstrap</td>
              		</tr>
              		<tr>
              			<th scope="row">3</th>
              			<td>Jacob</td>
              			<td>Thornton</td>
              			<td>@fat</td>
              		</tr>
              		<tr>
              			<th scope="row">4</th>
              			<td colspan="2">Larry the Bird</td>
              			<td>@twitter</td>
              		</tr>
              	</tbody>
              </table>
          </div>
      </div>


      <!-- START THE FEATURETTES -->

      <div class="row maincontent">
         <div class="col-sm-4 about">
            <?php dynamic_sidebar( 'front-5' ); ?>
        </div>
        <div class="col-sm-8 video">
        <?php dynamic_sidebar( 'front-4' ); ?>
        </div>

      </div><!-- /.row -->



<?php get_footer(); ?>
