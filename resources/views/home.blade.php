<x-user.layout>
  <main class="d-flex flex-column w-75 px-5 my-auto ">
    <h1 class="text-8xl text-white fw-light">
      O melhor sistema de abastecimento de <br>veículos  para a sua empresa!
    </h1>

    @auth
        <p class="text-lg fw-light mt-3 lh-extra">
          Bem-vindo, <span class="font-bold">{{ auth()->user()->name }}</span>! Explore as funcionalidades do sistema para <br> gerenciar o abastecimento de veículos da sua empresa de forma eficiente.
        </p>
    @endauth

    @guest
      <p class="text-center mt-4 text-lg max-w-5xl">
        Faça login para acessar o sistema e gerenciar o abastecimento de veículos da sua empresa de forma eficiente.
      </p>
    @endguest

    <div class="d-flex flex-row gap-3">
      <a class="btn bg-gradient-light py-3 px-4" href="{{ route('site.login') }}">
        Começar agora
      </a>
      <a class="btn bg-dark py-3 text-white border" href="{{ route('site.login') }}">
        Sou colaborador
      </a>
    </div>

  </main>
</x-user.layout>
