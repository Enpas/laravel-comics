<header>
  <div class="header">

    <a href="/"><img src="{{ asset('img/dc-logo.png') }}" alt="Logo"></a>

    <ul>
      <li class="{{ (request()->is('/')) ? 'active' : '' }}">
        <a href="{{ route('characters') }}">Characters</a>
      </li>
      <li class="{{ (request()->is('comic')) ? 'active' : '' }}">
        <a href="{{ route('comic') }}">Comics</a>
      </li>
      <li class="{{ (request()->is('movies')) ? 'active' : '' }}">
        <a href="{{ route('movies') }}">Movies</a>
      </li>
      <li class="{{ (request()->is('tv')) ? 'active' : '' }}">
        <a href="{{ route('tv') }}">TV</a>
      </li>
      <li class="{{ (request()->is('games')) ? 'active' : '' }}">
        <a href="{{ route('games') }}">Games</a>
      </li>
      <li class="{{ (request()->is('collectibles')) ? 'active' : '' }}">
        <a href="{{ route('collectibles') }}">Collectibles</a>
      </li>
      <li class="{{ (request()->is('videos')) ? 'active' : '' }}">
        <a href="{{ route('videos') }}">Videos</a>
      </li>
      <li class="{{ (request()->is('fans')) ? 'active' : '' }}">
        <a href="{{ route('fans') }}">Fans</a>
      </li>
      <li class="{{ (request()->is('news')) ? 'active' : '' }}">
        <a href="{{ route('news') }}">News</a>
      </li>
      <li class="{{ (request()->is('shop')) ? 'active' : '' }}">
        <a href="{{ route('shop') }}">Shop</a>
      </li>
    </ul>
    
  </div> <!-- /end container -->
</header>