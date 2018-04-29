{!! Form::open(['route' => ['products.filter']]) !!}
    <input class="hidden-input" name="baseUrl" value="{{ url()->current() }}">
    <div class="nowrap">
        <label for="precious">Precious Metal</label>&nbsp;
        <input type="checkbox" name="filters[preciousMetals]" id="precious" value="1" @if(isset($queriesFiltered) && array_key_exists('preciousMetals', $queriesFiltered)) checked @endif>
    </div>
    <div class="nowrap">
        <label for="gemstone">Gemstone</label>&nbsp;
        <input type="checkbox" name="filters[gemstones]" id="gemstone" value="1" @if(isset($queriesFiltered) && array_key_exists('gemstones', $queriesFiltered)) checked @endif>
    </div>
    <div class="nowrap">
        <label for="vintage">Vintage</label>&nbsp;
        <input type="checkbox" name="filters[vintages]" id="vintage" value="1" @if(isset($queriesFiltered) && array_key_exists('vintages', $queriesFiltered)) checked @endif>
    </div>
    <div class="nowrap">
        <label for="rhinestone">Rhinestone</label>&nbsp;
        <input type="checkbox" name="filters[rhinestones]" id="rhinestone" value="1" @if(isset($queriesFiltered) && array_key_exists('rhinestones', $queriesFiltered)) checked @endif>
    </div>
    <div class="nowrap">
        <label for="other">Other</label>&nbsp;
        <input type="checkbox" name="filters[others]" id="other" value="1" @if(isset($queriesFiltered) && array_key_exists('others', $queriesFiltered)) checked @endif>
    </div>

    <button type="submit" id="apply-filters">Apply Filters</button>

{!! Form::close() !!}