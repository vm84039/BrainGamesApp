@if ($jump->contains('position', $i))
    <button type="submit" name="jump" value="{{$i}}" formaction="jump">
        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="lightblue" class="bi bi-dot" viewBox="0 0 16 16">
            <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
        </svg>
    </button>
@else
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="black" class="bi bi-dot" viewBox="0 0 16 16">
        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"/>
    </svg>
@endif
