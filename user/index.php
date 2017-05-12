<?php $type = "user"; require('../partial/head.php'); ?>
	
	<button value="list_purchase.php">List Purchase</button>

	<main>
	    <form method="POST" action="count.php" class="buy">

	      <?php
	        require 'all_product.php';
	      ?>
	      <button type="submit">Buy</button>
	    </form>
	</main>

    <script src="../assets/js/router.js"></script>

  </body>
</html>
