<x-layout>

  <main class="py-10">

    <section class="bg-white max-w-150 mx-auto p-10 pb-5 border-2 mt-2">

      <h1 class="font-bold text-xl">
        Cadastre-se
      </h1>

      <p>
        Preencha os campos abaixo para criar sua conta
      </p>
      <form action="{{ route('auth.register') }}" method="POST" class="flex flex-col">
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
          <label for="registration">
            Matrícula
          </label>
          <input
            type="text"
            name="registration"
            placeholder="30127-2"
            class="bg-white p-2 border-2 @error('registration') border-red-600 @enderror"
          >

          @error('registration')
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
          <label for="date_of_birth">
            Data de Nascimento
          </label>
          <input
            type="date"
            name="date_of_birth"
            placeholder="example@email.com"
            class="bg-white p-2 border-2 @error('date_of_birth') border-red-600 @enderror"
          >

          @error('date_of_birth')
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
