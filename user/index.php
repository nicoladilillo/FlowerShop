<?php $type = "user"; require('../partial/head.php'); ?>

	<button value="list_purchase.php">List Purchase</button>

	<main>
	    <form method="POST" action="count.php" class="buy">

	      <?php
	        require 'all_product.php';
	      ?>
	      <input type="submit" value="Buy" />
	    </form>
	</main>

    <script src="../assets/js/router.js"></script>

  </body>
</html>
