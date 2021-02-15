<?php /* Compiled from a Blade Template on 15-02-2021 16:49:17 */ ?>
<?php require_once('partials/head.php'); ?>

<img src="<?= $map ?>" alt="A map" loading="lazy" decoding="async" class="img-thumbnail img-round">
<i>Mapy - <a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors</a></i>

<form method="post" action="/results">
	<input type="hidden" name="map" value="<?= $map ?>">
    <fieldset>
        <legend>Country/Countries on the Map</legend>

		<?php foreach ($place as $key => $value) : ?>
			<input type="checkbox" name="<?= $value["computed"] ?>" id="<?= $value["computed"] ?>">
			<label for="<?= $value["computed"] ?>"><?= $value["human"] ?></label>
		<?php endforeach; ?>

		<br>
		<button type="submit" class="btn btn-normal">OK</button>
	</fieldset>
</form>

<?php require_once('partials/footer.php'); ?>
