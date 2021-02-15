<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error <?= $code ?> - Ignition at <?= $_SERVER['HTTP_HOST'] ?></title>
	<?php /* Inlining styles as error pages should not be making any additional requests, and also IE needs 512+ bytes */ ?>
	<style>
		body {
			margin: 6rem;
			line-height: 1.5;
			background-color: #2e3440;
			color: white;
			font-family: 'Ubuntu', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, "Helvetica Now Text", "Helvetica Neue", "Helvetica", Cantarell, Oxygen, Arial, Tahoma, Geneva, Verdana, "Noto Sans", sans-serif;
		}

		h1 {
			font-size: 3.5rem;
		}

		p {
			font-size: 1.75rem;
		}

		ul {
			font-size: 1.5rem;
		}

		svg {
			position: fixed;
			left: -50px;
			top: -50px;
			z-index: -1;
			opacity: 0.5;
		}

		@media (max-width: 768px) {
			body {
				margin: 2rem;
			}
		}
	</style>
</head>

<body>
	<?php if ($data["signal"] == "error") : ?>
		<svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" fill="#ebcb8b" viewBox="0 0 16 16" aria-hidden="true">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
		</svg>
	<?php elseif ($data["signal"] == "info") : ?>
		<svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" fill="#5e81ac" viewBox="0 0 16 16">
			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
		</svg>
	<?php else : ?>
		<svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" fill="#ea3f50" viewBox="0 0 16 16" aria-hidden="true">
			<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
		</svg>
	<?php endif; ?>

	<h1><?= $data["name"] ?></h1>
	<p><?= $data["description"] ?></p>
	<?php if ($data["causes"] != []) : ?>
		<p>Some possible reasons for this:</p>
		<ul>
			<?php foreach ($data["causes"] as $key => $val) : ?>
				<li><?= $val ?></li>
			<?php endforeach; ?>
		</ul>
	<?php endif; ?>
</body>

</html>