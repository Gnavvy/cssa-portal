<!-- Header -->
<?php require_once('header.php'); ?>

<!-- Content -->
<div id="content">

<!-- 960 Container -->
<div class="container floated">

	<!-- Sidebar -->
	<div class="four floated sidebar left">
		<aside class="sidebar">

			<!-- Search -->
			<nav class="widget-search">
				<form action="404-page.html" method="get">
					<button class="search-btn-widget"></button>
					<input class="search-field" type="text" onblur="if(this.value=='')this.value='Search';" onfocus="if(this.value=='Search')this.value='';" value="Search" />
				</form>
			</nav>
			<div class="clearfix"></div>

			<!-- Categories -->
			<nav class="widget">
				<h4>常用链接</h4>
				<ul class="categories">
					<li><a href="#">Business</a></li>
					<li><a href="#">Entertainment</a></li>
					<li><a href="#">News & Politics</a></li>
					<li><a href="#">Social Media</a></li>
					<li><a href="#">Technology</a></li>
				</ul>
			</nav>
            <div class="clearfix"></div>

		</aside>
	</div>
	<!-- Sidebar / End -->

	<!-- Page Content -->
	<div class="eleven floated right">
		<div class="page-content">

			<h3 class="margin-reset"> 新生接机及临时住宿服务 </h3><br />
			<!--<p><img class="image-right" src="images/portfolio/portfolio-05.jpg" style="width: 45%;" alt="" />-->
			<p>亲爱的各位同学，学者：</p>
            <p>祝贺大家即将到达加州大学戴维斯分校学习工作，并加入到中国学生学者联合会的大家庭中。我们代表CSSA全体成员向大家的到来表示热烈欢迎。为了保证每年新生、访问学者接待工作顺利进行，CSSA将会安排一系列注册，接机，临时住房，生活必需品采购等相关服务，为大家的到来提供更多的便利，使各位新成员能够更快的适应Davis的生活，早日投入到学习科研中。</p>

            <p>每年新生接待工作一般从8月下旬开始，为了配合我们的工作，我们希望大家注意以下事项：</p>
            <!--<div class="notification notice">-->
				<!--<p>每年新生接待工作一般从8月下旬开始，为了配合我们的工作，我们希望大家注意以下事项：</p>-->
			<!--</div>-->

            <p>1. 注册使用NARS系统</p>
			<p>NARS（Newcommer Arrival Registration System）系统帮助我们统计新生到达信息，更好的安排接机服务。CSSA将在每年五月至六月期间公布2-3个接机日期（一般在9月初），请您根据您的日程选择适合您的接机日期，预定机票，并且在NARS注册您的个人信息。在接机日CSSA会派专人去旧金山国际机场（SFO）等候，并且帮助预定机场巴士（Airporter）。SFO到Davis的Airporter费用一般在$30-$40每人（每年会略有增长）。如果您在非接机日单独到达也可以联系Airporter (http://www.davisairporter.com/)，不过费用相对会贵些。另外还有其他方式可供选择（Public ground transportation from Sacramento and San Francisco to Davis）。CSSA强烈推荐大家在有接机服务的日期到达。</p>

            <div class="line" style="margin: 40px auto 40px -40px"></div>

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

            <div class="line" style="margin: 40px auto 40px -40px"></div>

            <section id="pickup-info">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="first-name">First Name</label>
                    <input name="first-name" type="text" id="first-name"/>

                    <label for="last-name">Last Name</label>
                    <input name="last-name" type="text" id="last-name"/>

                    <label for="gender">Gender</label>
                    <input name="gender" type="text" id="gender"/>

                    <label for="hometown">Hometown</label>
                    <input name="hometown" type="text" id="hometown"/>

                    <label for="email">Email</label>
                    <input name="email" type="text" id="email"/>

                    <label for="original-university">Original University</label>
                    <input name="original-university" type="text" id="original-university"/>

                    <label for="original-major">Original Major</label>
                    <input name="original-major" type="text" id="original-major"/>

                    <label for="ucd-major">UCD Major</label>
                    <input name="ucd-major" type="text" id="ucd-major"/>

                    <label for="departure-airport">Departure Airport</label>
                    <input name="departure-airport" type="text" id="departure-airport"/>

                    <label for="arrival-airport">Arrival Airport</label>
                    <input name="arrival-airport" type="text" id="arrival-airport"/>

                    <label for="arrival-date">Arrival Date</label>
                    <input name="arrival-date" type="text" id="arrival-date"/>

                    <label for="arrival-time">Arrival Time</label>
                    <input name="arrival-time" type="text" id="arrival-time"/>

                    <label for="flight">Flight</label>
                    <input name="flight" type="text" id="flight"/>

                    <label for="pickup">Need Pickup</label>
                    <input name="pickup" type="text" id="pickup"/>

                    <label for="accommodation">Temporary Accommodation</label>
                    <input name="accommodation" type="text" id="accommodation"/>

                    <label for="luggage">Luggage</label>
                    <input name="luggage" type="text" id="luggage"/>

                    <label for="message">Message</label>
                    <input name="message" type="text" id="message"/>
                </form>
            </section>


		</div>
	</div>
	<!-- Page Content / End -->

</div>
<!-- 960 Container / End -->

</div>
<!-- Content / End -->

</div>
<!-- Wrapper / End -->

<!-- Footer -->
<?php require_once('footer.php'); ?>