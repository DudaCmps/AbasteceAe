<header class="bg-white border-b-2">
  {{-- HEADER --}}
  <div class="max-w-5/6 mx-auto flex items-center justify-between p-4">
    <div class="habit-btn p-2 habit-shadow-lg">
      AbasteceAe
    </div>

    {{-- LOGIN/REGISTRO--}}
    @auth
      <div class="flex items-center gap-4 justify-between">
        <div class="habit-btn py-2 px-4 habit-shadow-lg bg-white text-blue-500">
          {{ auth()->user()->name[0] }}
        </div>
        <form
          action="{{ route('auth.logout') }}"
          method="POST"
          class="inline">
          @csrf

          <button type="submit" class="habit-btn p-2 habit-shadow-lg bg-white">
            Sair
          </button>
        </form>
        </div>
    @endauth

    @guest
      <div>
        <a class="habit-btn p-2 habit-shadow-lg bg-white" href="{{ route('site.login') }}">Login</a>
        <a class="habit-btn p-2 habit-shadow-lg bg-white" href="{{ route('site.register') }}">Cadastre-se</a>
      </div>
    @endguest
  </div>
</header>

