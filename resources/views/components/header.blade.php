<header class="bg-white border-b-2 justify-between flex items-center p-4">
  {{-- HEADER --}}
  <div class="habit-btn p-2 habit-shadow-lg">
    logo
  </div>

  {{-- LOGIN/REGISTRO--}}

  @auth
    <form
      action="{{ route('auth.logout') }}"
      method="POST"
      class="inline">
      @csrf

      <button type="submit" class="habit-btn p-2 habit-shadow-lg bg-white">
        Sair
      </button>
    </form>
  @endauth

  @guest
    <a class="habit-btn p-2 habit-shadow-lg bg-white" href="{{ route('site.login') }}">Login</a>
  @endguest
</header>

