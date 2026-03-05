<header class="d-flex flex-row px-5">
  {{-- HEADER --}}
  <div class="d-flex flex-row justify-content-between align-items-center w-100 py-3">

    <a href="/" class="text-white text-1xl">
      Abasteceae
    </a>

    {{-- LOGIN/REGISTRO--}}
    @auth
      <div class="d-flex flex-row gap-4 items-center">

        <form
          action="{{ route('auth.logout') }}"
          method="POST"
          class="inline">
          @csrf

          <button type="submit" class="btn btn-dark px-5 mb-0 py-2 border">
            Sair
          </button>
        </form>
      </div>
    @endauth

    @guest
      <div>
        <a class="btn btn-light px-5 mb-0 py-2 border" href="{{ route('site.login') }}">Login</a>
        <a class="btn btn-dark px-5 mb-0 py-2 border" href="{{ route('site.register') }}">Cadastre-se</a>
      </div>
    @endguest
  </div>
</header>

