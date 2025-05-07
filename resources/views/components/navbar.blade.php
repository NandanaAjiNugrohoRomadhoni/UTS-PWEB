<nav class="navbar navbar-expand-lg bg-green w-100">
    <div class="container-fluid">
        <img src="{{ asset('images/logo.png') }}" alt="Lehuula Farms" class="img-fluid" width="80px" height="80px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @if(isset($link))
                @foreach($links as $link)
                    <a class="nav-link{{ $link['active'] ?? false ? 'active text-white' : 'text-white'}}"
                       href="{{ $link['url']}}">{{$link['label']}}</a>
                @endforeach
            @else
                <a class="nav-link active text-white" aria-current="page" href="/dashboard?username={{request('username')}}">Home</a>
                <a class="nav-link text-white" href="/pengelolaan?username={{request('username')}}">Pengelolaan</a>
                <a class="nav-link text-white" href="/profile?username={{request('username')}}">Profile</a>
            @endif
        </div>
      </div>
    </div>
  </nav>
