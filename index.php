<?php

include "lang.php";

if (isset($_GET["lang"]) && $_GET["lang"] == "en") {
	include "en.php";
}

$jmeno = "Klaun";

$zeme = array(
	l("Česká republika"),
	l("Praha")
);

?>
<!doctype html>
<meta charset="utf-8">
<title><?=l("Test překladu")?></title>
<h1><?=l("Test překladu")?></h1>

<p><?=l("Ahoj %s, máš %s.", 
	array(
		$jmeno, 
		sklonovani(
			mt_rand(1, 5), 
			l("bod"), 
			l("body"), 
			l("bodů")
		)
	)
)?></p>

<select name="" id="">
	<?php foreach ($zeme as $zem): ?>
		<option value=""><?=$zem?></option>
	<?php endforeach ?>
</select>

<hr>

<a href="./?lang=cz">CZ</a> |
<a href="./?lang=en">EN</a>