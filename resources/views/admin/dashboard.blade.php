<x-layout>
  <div>
    <h1 class="text-5xl text-center mt-10 p-4">
      Dashboard
    </h1>

    @auth
        <p>
          Bem-vindo, Administrador!!
        </p>
    @endauth
  </div>
</x-layout>
