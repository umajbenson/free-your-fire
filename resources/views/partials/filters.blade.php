<form method="get" action="/po-bracelets">

    {{ csrf_field() }}

    <label for="precious">Precious Metal</label>
    <input type="checkbox" name="filters" id="precious" value="1">
    <label for="gemstone">Gemstone</label>
    <input type="checkbox" name="filters" id="gemstone" value="1">
    <label for="vintage">Vintage</label>
    <input type="checkbox" name="filters" id="vintage" value="1">
    <label for="rhinestone">Rhinestone</label>
    <input type="checkbox" name="filters" id="rhinestone" value="1">
    <label for="other">Other</label>
    <input type="checkbox" name="filters" id="other" value="1">

    <button id="apply-filters">Apply Filters</button>
</form>