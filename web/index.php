<?php

	require_once __DIR__.'/../vendor/autoload.php';

	//http://v-ie.uek.krakow.pl/~s187772/pp5/php/jokes2/web/index.php

	use JPelenska\Jokes\Jokes;

	$jokeApi = new Jokes();
	$randomJoke = $jokeApi->randomJoke();
	$jokeTab = $jokeApi->all();
	
	
?>

<html>
	<body>
		<h3>
			<?php
				echo "Random joke:";
			?>
		</h3>
		<p>
			<?php
				echo $randomJoke;
			?>
		</p>
		<br>
		<h3>
			<?php
				echo "All jokes:";
			?>
		</h3>
		<?php
			$i = 1;
			foreach ($jokeTab as $joke) {
				echo "<p>";
				echo sprintf("%s. %s", $i, $joke);
				echo "</p>";
				$i++;
			}
		?>
	</body>
</html>
