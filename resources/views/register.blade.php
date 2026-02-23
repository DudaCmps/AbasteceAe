<x-layout>

  <main class="py-10">

    <section class="bg-white max-w-150 mx-auto p-10 pb-6 border-2 mt-4">

      <h1 class="font-bold text-xl">
        Cadastre-se
      </h1>

      <p>
        Preencha os campos abaixo para criar sua conta
      </p>
      <form action="#" method="POST" class="flex flex-col">
        @csrf

        <div class="flex flex-col gap-2 mb-2">
          <label for="name">
            Nome
          </label>
          <input
            type="text"
            name="name"
            placeholder="Seu nome"
            class="bg-white p-2 border-2 @error('name') border-red-600 @enderror"
          >

          @error('name')
          <p class="text-red-600">
            {{ $message }}
          </p>
          @enderror
        </div>

        <div class="flex flex-col gap-2 mb-2">
          <label for="email">
            Email
          </label>
          <input
            type="email"
            name="email"
            placeholder="example@email.com"
            class="bg-white p-2 border-2 @error('email') border-red-600 @enderror"
          >

          @error('email')
          <p class="text-red-600">
            {{ $message }}
          </p>
          @enderror
        </div>

        {{-- DIV ENVELOPE--}}
        <div class="flex flex-row justify-between gap-2 mb-2">

          <div class="flex flex-col gap-2 mb-2 flex-1">
          <label for="matricula">
            Matrícula
          </label>
          <input
            type="text"
            name="matricula"
            placeholder="30127-2"
            class="bg-white p-2 border-2 @error('matricula') border-red-600 @enderror"
          >

          @error('matricula')
          <p class="text-red-600">
            {{ $message }}
          </p>
          @enderror
          </div>

          <div class="flex flex-col gap-2 mb-2 flex-1">
            <label for="cpf">
              CPF
            </label>
            <input
              type="text"
              name="cpf"
              placeholder="000000000-00"
              class="bg-white p-2 border-2 @error('cpf') border-red-600 @enderror"
            >

            @error('cpf')
            <p class="text-red-600">
              {{ $message }}
            </p>
            @enderror
          </div>
        </div>
        {{-- FIM DIV ENVELOPE--}}


        <div class="flex flex-col gap-2 mb-2">
          <label for="data_nasc">
            Data de Nascimento
          </label>
          <input
            type="date"
            name="data_nasc"
            placeholder="example@email.com"
            class="bg-white p-2 border-2 @error('data_nasc') border-red-600 @enderror"
          >

          @error('data_nasc')
          <p class="text-red-600">
            {{ $message }}
          </p>
          @enderror
        </div>

        <div class="flex flex-col gap-2 mb-4">

          <label for="password">
            Senha
          </label>
          <input
            type="password"
            name="password"
            placeholder="********"
            class="bg-white p-2 border-2 @error('password') border-red-600 @enderror"
          >

          @error('password')
          <p class="text-red-600">
            {{ $message }}
          </p>
          @enderror
        </div>

        <div class="flex flex-col gap-2 mb-4">

          <label for="password_confirmation">
            Repita sua senha
          </label>
          <input
            type="password"
            name="password_confirmation"
            placeholder="********"
            class="bg-white p-2 border-2 @error('password') border-red-600 @enderror"
          >

          @error('password')
          <p class="text-red-600">
            {{ $message }}
          </p>
          @enderror
        </div>

        <button type="submit" class="cursor-pointer bg-white p-2 border-2">
          Cadastrar
        </button>
      </form>

      <p class="text-center mt-4">
        Já tem uma conta?
        <a href="{{ route('site.login') }}" class="underline hover:opacity-50 transition">
          Faça login
        </a>
      </p>

    </section>
  </main>
</x-layout>
