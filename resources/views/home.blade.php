<x-layout>
  <main class="flex items-center flex-col mx-auto py-10 min-h-[calc(100vh-140px)] px-4">
    <h1 class="text-5xl text-center mt-10 p-4">
      O melhor sistema de abastecimento de veículos <br> para a sua empresa!
    </h1>

    @auth
        <p class="text-center mt-4 text-lg ">
          Bem-vindo, <span class="font-bold">{{ auth()->user()->name }}</span>! Explore as funcionalidades do sistema para gerenciar o abastecimento de veículos da sua empresa de forma eficiente.
        </p>
    @endauth
  </main>
</x-layout>
