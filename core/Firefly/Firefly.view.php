<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Error - Firefly at <?= $_SERVER['HTTP_HOST'] ?></title>
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

		pre {
			word-wrap: break-word;
			white-space: break-spaces;
			font-size: 1.3rem;
		}

		body>svg {
			position: fixed;
			left: -50px;
			top: -50px;
			z-index: -1;
			opacity: 0.5;
		}

		small {
			font-size: 1.75rem;
			font-weight: 400;
		}

		footer {
			position: fixed;
			bottom: 0;
			left: 0;
			width: 100vw;
			text-align: center;
			background-color: #3b4252;
			padding: 20px;
		}

		button {
			background-color: #434c5e;
			border: none;
			color: white;
			padding: 15px 25px;
			cursor: pointer;
			transition: 0.15s;
			border-radius: .1rem;
		}

		button:hover,
		button[data-active] {
			background-color: #4c566a;
		}

		.alert {
			display: flex;
			background-color: #5e81ac;
			padding: 10px 30px;
			justify-content: space-between;
		}

		.alert svg {
			opacity: 0.75;
			position: relative;
		}

		.alert h2 {
			font-size: 2rem;
			font-weight: 500;
		}

		.alert h3 {
			font-weight: 500;
			font-size: 1.3rem;
		}

		@media (max-width: 768px) {
			body {
				margin: 2rem;
			}
		}
	</style>
</head>

<body>
	<svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" fill="#ea3f50" viewBox="0 0 16 16" aria-hidden="true">
		<path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
	</svg>
	<h1>An unexpected error has occurred. <small>Error at <?= $source ?></small></h1>
	<pre><?= $th ?></pre>
	<?php if ($hint) : ?>
		<div class="alert">
			<div>
				<h2><?= $hint["name"] ?></h2>
				<h3><?= $hint["tip"] ?></h3>
			</div>
			<svg xmlns="http://www.w3.org/2000/svg" width="192" height="192" fill="currentColor" viewBox="0 0 16 16">
				<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412l-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
			</svg>
		</div>
	<?php endif; ?>
	<footer>
		<button onclick="stacktrace();">Stack Trace</button>
		<button onclick="request();">Request</button>
		<button onclick="clippy('pre');">Share</button>
	</footer>
	<script>
		"use strict";

		function clippy(selector) {
			let text;
			let elem = document.querySelector(selector);
			if (elem.hasAttribute("data-clippy")) {
				text = elem.getAttribute("data-clippy");
			} else {
				text = elem.innerText;
			};
			document.body.innerHTML += `<input type="text" id="clippy-temp" value="${text}" style="width: 0px; height: 0px;">`;
			let h = document.querySelector("#clippy-temp");
			h.select();
			document.execCommand("copy");
			h.remove();
			document.querySelector(`button[onclick="clippy('pre');"]`).innerText = "Copied to clipboard";
		};

		function request() {
			document.querySelector("pre").innerHTML = `URL: <?= $_SERVER['REQUEST_URI'] ?>\n
Arguments: <?php var_dump($_REQUEST) ?>`;
			document.querySelector(".alert").style.display = "none";
		}

		function stacktrace() {
			document.querySelector("pre").innerText = `<?= $th ?>`;
			document.querySelector(".alert").style.display = "flex";
		}
	</script>
</body>

</html>