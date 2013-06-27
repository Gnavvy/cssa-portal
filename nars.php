

<!-- Header -->
<?php require_once('header.php'); ?>

<!-- Content -->
<div id="content">

<!-- Page Content -->
<div class="page-content">

	<!-- 960 Container -->
	<div class="container">

		<!-- Sixteen Columns -->
		<div class="sixteen columns">


            <?php
                ini_set('display_errors', 'On');
                error_reporting(E_ALL);

                $dbc = mysqli_connect("localhost", "root", "root", "cssa");
                $query = "SELECT `email` FROM `newbie` WHERE `gender` = 0";
                $result = mysqli_query($dbc, $query);

                while ($row = mysqli_fetch_array($result)) {
                    $email = $row["email"];
                    echo $email;
                    echo "<br />";
                };
            ?>

		</div>

	</div>
	<!-- 960 Container / End -->

</div>
<!-- Page Content / End -->


</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

<!-- Footer -->
<?php require_once('footer.php'); ?>