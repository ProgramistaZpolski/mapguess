<?php

// A copy of Artisan

$templates = [
	"controller" => "<?php

namespace App\Controllers;

class {{Name}}
{
	public function master()
	{
		return view('index');
	}
}",
	"model" => "<?php

namespace App\Models;

class {{Name}}
{
	// Code here
}",
	"view" => "<?php require('partials/head.php'); ?>

<h1>Empty View</h1>

<?php require('partials/footer.php'); ?>",
	"partial" => "<?php use App\Core\App; ?>",
	"migration" => "<?php

namespace App\Migrations;

class {{Name}}
{
	/**
	 * Run the migration.
	 * @return String A sql query
	 */

	public function up()
	{
		return \"\";
	}

	/**
	 * Reverse the migration.
	 * @return String A sql query
	 */

	public function down()
	{
		return \"\";
	}
}"
];

if ($argv[1] == "controller") {
	// Make a controller
	file_put_contents("app/controllers/" . $argv[2] . ".php", str_replace("{{Name}}", $argv[2], $templates["controller"]));
} else if ($argv[1] == "model") {
	// Make a model
	file_put_contents("app/models/" . $argv[2] . ".php", str_replace("{{Name}}", $argv[2], $templates["model"]));
} else if ($argv[1] == "view") {
	// Make a view
	file_put_contents("app/views/" . $argv[2] . ".view.php", $templates["view"]);
} else if ($argv[1] == "partial") {
	// Make a partial
	file_put_contents("app/views/partials/" . $argv[2] . ".php", $templates["partial"]);
} else if ($argv[1] == "migration") {
	// Make a partial
	file_put_contents("app/migrations/" . $argv[2] . ".php", str_replace("{{Name}}", $argv[2], $templates["migration"]));
} else if ($argv[1] == "blade") {
	// Compile a Blade Template
	$template = file_get_contents("app/blade/{$argv[2]}.blade.php");
	$template = str_replace("{{ ", "<?= ", $template);
	$template = str_replace(" }}", " ?>", $template);
	$template = str_replace("@php", "<?php", $template);
	$template = str_replace("@endphp", "?>", $template);
	$template = str_replace("@endif", "<?php endif; ?>", $template);
	$template = str_replace("@endforeach", "<?php endforeach; ?>", $template);
	// I spend like half an hour on these stupid regex-es
	$template = preg_replace("/@extends\('([a-z]*)'\)/i", "<?php require_once('partials/$1.php'); ?>", $template);
	$template = preg_replace("/@if \(([^@]*)\)/i", "<?php if ($1) : ?>", $template);
	$template = preg_replace("/@foreach \(([^)-]*)\)/i", "<?php foreach ($1) : ?>", $template);
	file_put_contents("app/views/{$argv[2]}.view.php", "<?php /* Compiled from a Blade Template on " . Date("d-m-Y H:i:s") . " */ ?>\n" . $template);
	echo "Compiled!";
}
// Note: A handler for running the migrations must be written individually for each project.