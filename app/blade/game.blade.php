@extends('head')

@if ($won === true)
    <div role="alert" class="alert alert-success consended">
        Congratulations, you won this round!
    </div>
@elseif ($won == false)
    <div role="alert" class="alert alert-error consended">
        Try again!
    </div>
@endif

<img src="{{ $map }}" alt="A map" loading="lazy" decoding="async" class="img-thumbnail img-round">

<form method="post" action="/results">
    <input type="hidden" name="map" value="{{ $map }}">
    <fieldset>
        <legend>Country/Countries on the Map</legend>

        @foreach ($place as $key => $value)
            <input type="checkbox" name="{{ $value['computed'] }}" id="{{ $value['computed'] }}">
            <label for="{{ $value['computed'] }}">{{ $value['human'] }}</label>
        @endforeach

        <br><br>
        <button type="submit" class="btn btn-normal">OK</button>
    </fieldset>
</form>

<i>Mapy - <a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors</a></i>

@extends('footer')
