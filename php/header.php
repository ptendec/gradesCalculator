<?php

	include ("form_reg_auth.php");
	session_start(); ?>
<section class="header">
	<div class="container">
		<div class="row no-gutters">
			<div class="col-xl-10 col-lg-9">
				<ul>
					<li><a class="main_page_link" href="../index.php">Главная страница</a></li>
					<li><a class="calculate_link" href="../php/calculate.php">Рассчитать</a></li>
					<!--<li><a class="rating_link" href="">Рейтинг</a></li>-->
					<li><a class="statistic_link" href="../php/statistics.php">Ваша статистика</a></li>
					<li><a class="about_author_link" href="author.php">Об авторах</a></li>
				</ul>
			</div>
			
			<?php
				if(isset($_SESSION['email'])){
					$user_name_session = $_SESSION['name'];
					$user_surname_session = $_SESSION['surname'];
					echo "<div class=\"col-xl-2\">
					<p class=\"user_info\">" . $user_name_session ."</p>
					<p class=\"user_info\">" . $user_surname_session ."</p>
					<a href=\"../php/log_out.php\">Выйти</a>
				</div>";
				}
				elseif(isset($_COOKIE['email'])){
					$user_name_cookie = $_COOKIE['name'];
					$user_surname_cookie = $_COOKIE['surname'];
					echo "<div class=\"col-xl-2\">
					<p class=\"user_info\">" . $user_name_session ."</p>
					<p class=\"user_info\">" . $user_surname_session ."</p>
					<a href=\"../php/log_out.php\">Выйти</a>
				</div>";
				}
				else{
				echo "<div class=\"col-xl-2\">
						<input class=\"popup_reg_button\" id=\"popup_reg_button\" onclick=\"display_reg_button()\" 
						type=\"button\" value=\"Регистрация\">

						<input class=\"popup_auth_button\" id=\"popup_auth_button\" onclick=\"display_auth_button()\" 
						type=\"button\" value=\"Авторизация\">
					</div>";
				}
			?>
			
		</div>
	</div>
</section>


