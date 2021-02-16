<?php /* Compiled from a Blade Template on 16-02-2021 11:23:52 */ ?>
<?php require_once('partials/head.php'); ?>

<?php if ($won === true) : ?>
    <div role="alert" class="alert alert-success consended">
        Congratulations, you won this round!
    </div>
<?php elseif ($won == false) : ?>
    <div role="alert" class="alert alert-error consended">
        Try again!
    </div>
<?php endif; ?>

<img src="<?= $map ?>" alt="A map" loading="lazy" decoding="async" class="img-thumbnail img-round">

<form method="post" action="/results">
    <input type="hidden" name="map" value="<?= $map ?>">
    <fieldset>
        <legend>Country/Countries on the Map</legend>

        <?php foreach ($place as $key => $value) : ?>
            <input type="checkbox" name="<?= $value['computed'] ?>" id="<?= $value['computed'] ?>">
            <label for="<?= $value['computed'] ?>"><?= $value['human'] ?></label>
        <?php endforeach; ?>

        <br><br>
        <button type="submit" class="btn btn-normal">OK</button>
    </fieldset>
</form>

<i>Mapy - <a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors</a></i>

<?php require_once('partials/footer.php'); ?>
