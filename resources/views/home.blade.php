<x-layout>
  <main class="flex items-center flex-col mx-auto py-10 min-h-[calc(100vh-140px)] px-4">
    <h1 class="text-5xl text-center mt-32 p-4 max-w-6xl font-bold leading-relaxed">
      O melhor sistema de abastecimento de veículos para a sua empresa!
    </h1>

    @auth
        <p class="text-center mt-4 text-lg ">
          Bem-vindo, <span class="font-bold">{{ auth()->user()->name }}</span>! Explore as funcionalidades do sistema para gerenciar o abastecimento de veículos da sua empresa de forma eficiente.
        </p>
    @endauth

    @guest
      <p class="text-center mt-4 text-lg max-w-5xl">
        Faça login para acessar o sistema e gerenciar o abastecimento de veículos da sua empresa de forma eficiente.
      </p>
    @endguest

    <a class="habit-btn bg-habit-orange px-8 py-2 mt-8 habit-shadow-lg text-white" href="{{ route('site.login') }}">
      Começar agora
    </a>

  </main>
</x-layout>
