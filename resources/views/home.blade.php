<x-layout>
  <div>
    <h1 class="text-5xl text-center mt-10 p-4">
      O melhor sistema de abastecimento de veículos <br> para a sua empresa!
    </h1>

    @auth
        <p>
          Bem-vindo, {{ auth()->user()->name }}! Explore as funcionalidades do sistema para gerenciar o abastecimento de veículos da sua empresa de forma eficiente.
        </p>
    @endauth
  </div>
</x-layout>
