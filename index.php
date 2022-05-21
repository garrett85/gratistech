<?php
if(!isset($_SESSION)) { session_start(); }
require_once('includes/init.php');

?>

<!doctype html>
<html lang="en">

<?php
require('./header.php');

?>
<main>
<?php
	if(!isset($_SESSION['user']))
		echo "<div style='text-align: right'><a href='login.php'>Log In</a></div>";
	else
		echo "<div sytle='text-align: right'>{$_SESSION['user']}</div>";
?>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Car Lot</h1>
        <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
        <p>
          <!-- <a href="#" class="btn btn-primary my-2">Main call to action</a>
          <a href="#" class="btn btn-secondary my-2">Secondary action</a> -->
        </p>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
		<?php

		$product = array();
		$info = array();
		$loopCounter = 0;
		$item = 1;
		while($row = $queryInventory->fetch_assoc())
		{
			$product[$loopCounter] = new Vehicle($row['vehicleID'], $row['make'], $row['model'], $row['year'], $row['price']);

			// foreach($product as $model)
			// {
			// 	$info = ($model->get_vehicle_id, $model->get_make, $model->get_model, $model->get_year, $model->get_price);
			// }
			$loopCounter++;
			$item++;
		echo <<<_ITEM
        <div class="col">
          <div class="card shadow-sm">
            <img width='100%' height='100%' src={$inventoryImagePath}car{$item}-large.jpg></img>
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">Add To Favorites</button>
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
_ITEM;
}

foreach($product as $car)
	echo $car->get_price()."<br>"
?>

      </div>
    </div>
  </div>

</main>

<?php
require './footer.php';
 ?>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
