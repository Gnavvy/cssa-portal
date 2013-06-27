<!-- Header -->
<?php require_once('header.php'); ?>

<!-- Content -->
<div id="content">

<!-- Page Content -->
<div class="page-content">

	<div class="container">

		<div class="sixteen columns">
            <div id="skill-bars">
                <?php
                    ini_set('display_errors', 'On');
                    error_reporting(E_ALL);

                    $dbc = mysqli_connect("localhost", "root", "root", "cssa");

                    $query_date_count = "
                        SELECT      COUNT(`date`) as count, `date` as date
                        FROM        `newbie`
                        WHERE       `date` > 20130101
                        GROUP BY    `date`
                        ORDER BY    count DESC
                    ";

                    $result_date_count = mysqli_query($dbc, $query_date_count);

                    $max_date_count = 1;
                    while ($entry = mysqli_fetch_array($result_date_count)) {
                        $max_date_count = $entry["count"] < $max_date_count ? $max_date_count : $entry["count"];
                    };
                    mysqli_data_seek($result_date_count, 0);

                    while ($entry = mysqli_fetch_array($result_date_count)) {
                        if ($entry["count"] < 10) continue;
                        $percentage = $entry["count"];
                        echo "<div class=\"skill-bar\">";
                            echo "<div class=\"skill-bar-content\" data-percentage=\"$percentage\"></div>";
                            echo "<span class=\"skill-title\">" . $entry["date"] . "</span>";
                        echo "</div>";
                    };
                ?>
            </div>
		</div>
	</div>

</div>
<!-- Page Content / End -->


</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

<!-- Footer -->
<?php require_once('footer.php'); ?>