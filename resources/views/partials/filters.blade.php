{!! Form::open(['route' => ['products.filter']]) !!}
    <input class="hidden-input" name="baseUrl" value="{{ url()->current() }}">
    <label for="precious">Precious Metal</label>
    <input type="checkbox" name="filters[preciousMetals]" id="precious" value="1" @if(isset($queriesFiltered) && array_key_exists('preciousMetals', $queriesFiltered)) checked @endif>
    <label for="gemstone">Gemstone</label>
    <input type="checkbox" name="filters[gemstones]" id="gemstone" value="1" @if(isset($queriesFiltered) && array_key_exists('gemstones', $queriesFiltered)) checked @endif>
    <label for="vintage">Vintage</label>
    <input type="checkbox" name="filters[vintages]" id="vintage" value="1" @if(isset($queriesFiltered) && array_key_exists('vintages', $queriesFiltered)) checked @endif>
    <label for="rhinestone">Rhinestone</label>
    <input type="checkbox" name="filters[rhinestones]" id="rhinestone" value="1" @if(isset($queriesFiltered) && array_key_exists('rhinestones', $queriesFiltered)) checked @endif>
    <label for="other">Other</label>
    <input type="checkbox" name="filters[others]" id="other" value="1" @if(isset($queriesFiltered) && array_key_exists('others', $queriesFiltered)) checked @endif>

    <button type="submit" id="apply-filters">Apply Filters</button>

{!! Form::close() !!}