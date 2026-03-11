<x-admin.layout_admin>
  <div class="container-fluid py-2" style="height: 800px">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">

          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Collaborators table</h6>
            </div>
          </div>

          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">

              <table class="table align-items-center mb-0">

                <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nome</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">CPF</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Matrícula</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nascimento</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
                </thead>

                <tbody>

                @forelse($users as $user)

                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <div>
                          <img src="../assets/img/team-3.jpg"
                               class="avatar avatar-sm me-3 border-radius-lg"
                               alt="user1">
                        </div>

                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                        </div>
                      </div>
                    </td>

                    <td>
                      <p class="text-xs font-weight-bold mb-0">
                        {{ preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "$1.$2.$3-$4", $user->cpf) }}
                      </p>
                    </td>

                    <td>
                      <p class="text-xs font-weight-bold mb-0">Colaborador</p>
                      <p class="text-xs text-secondary mb-0">{{ $user->registration }}</p>
                    </td>

                    <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm {{ $user->is_active ? 'bg-gradient-success' : 'bg-gradient-secondary' }}">
                          {{ $user->is_active ? 'Ativo' : 'Inativo' }}
                        </span>
                    </td>

                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">
                          {{ $user->date_of_birth }}
                        </span>
                    </td>

                    <td class="align-middle">

                      <a class="cursor-pointer text-secondary font-weight-bold text-xs"
                         data-bs-toggle="modal"
                         data-bs-target="#modal-edit-user"
                         onclick="getUser({{ $user->id }})">

                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="20"
                             height="20"
                             fill="#737373"
                             viewBox="0 0 256 256">
                          <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path>
                        </svg>

                      </a>

                      <a class="cursor-pointer text-secondary font-weight-bold text-xs ms-2"
                         data-bs-toggle="modal"
                         data-bs-target="#modal-address-user"
                         onclick="getAddresses({{ $user->id }})">

                        <svg class="mb-1"
                             xmlns="http://www.w3.org/2000/svg"
                             width="18"
                             height="18"
                             fill="#737373"
                             viewBox="0 0 256 256">
                          <path d="M219.31,108.68l-80-80a16,16,0,0,0-22.62,0l-80,80A15.87,15.87,0,0,0,32,120v96a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V160h32v56a8,8,0,0,0,8,8h64a8,8,0,0,0,8-8V120A15.87,15.87,0,0,0,219.31,108.68ZM208,208H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48V120l80-80,80,80Z"></path>
                        </svg>

                      </a>

                    </td>
                  </tr>

                @empty

                  <tr>
                    <td colspan="6">Não há colaboradores cadastrados no momento.</td>
                  </tr>

                @endforelse

                </tbody>
              </table>

            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  {{-- MODAL EDIT USER --}}
  <div class="modal fade modal-lg" id="modal-edit-user" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg d-flex justify-content-between">
            <img src="../assets/img/team-1.jpg" class="avatar-radius ms-3" alt="user1">
          </div>
        </div>

        <div class="modal-header">
          <div class="d-flex flex-column align-items-start ms-3 mt-3">
            <h4 class="text-lg mb-0" id="name_text"></h4>
            <p class="text-xs text-secondary mb-0" id="email_text"></p>
          </div>
        </div>

        <form id="form-edit-user" class="text-start" method="POST">
          @csrf
          <input type="hidden" name="_method" value="PUT">

          <div class="modal-body ms-3">

            <div class="form-row-custom my-3">

              <label class="label-dash">Nome</label>
              <input type="text"
                     id="name"
                     name="name"
                     class="form-novo input-nome"
                     placeholder="Nome completo">

              <label class="label-dash ms-3">CPF</label>
              <input type="text"
                     id="cpf"
                     name="cpf"
                     class="form-novo input-cpf"
                     placeholder="000.000.000-00">

            </div>

            <div class="form-row-custom my-3">

              <label class="label-dash">Email</label>
              <input type="text"
                     id="email"
                     name="email"
                     class="form-novo input-email"
                     placeholder="exemplo@gmail.com">

              <label class="label-dash ms-3">Matrícula</label>
              <input type="text"
                     id="registration"
                     name="registration"
                     class="form-novo input-matricula"
                     placeholder="00000-0">

            </div>

            <div class="form-row-custom my-3">

              <label class="label-dash">Nascimento</label>
              <input type="date"
                     id="date_of_birth"
                     name="date_of_birth"
                     class="form-novo input-cpf"
                     placeholder="00/00/0000">

              <label class="label-dash ms-3">Senha</label>
              <input type="text"
                     id="password"
                     name="password"
                     placeholder="******"
                     class="form-novo input-email">

            </div>

            <div class="form-row-custom my-3">

              <label class="label-dash">Status</label>

              <label class="switch mb-0">
                <input type="checkbox" id="is_active" name="is_active">
                <span class="slider"></span>
              </label>

            </div>



        </div>

        <div class="modal-footer justify-content-between">

          <div>
            <button class="btn btn-outline-danger">Excluir Colaborador</button>
          </div>

          <div class="d-flex gap-2">
            <button type="button"
                    class="btn btn-ligt-adapt text-dark border border-dark"
                    data-bs-dismiss="modal">
              Cancelar
            </button>

            <button type="submit" class="btn btn-dark">
              Salvar Mudanças
            </button>
          </div>

        </div>
      </form>
      </div>
    </div>
  </div>

  {{-- MODAL ENDEREÇOS --}}
  <div class="modal fade" id="modal-address-user" tabindex="-1">

    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">

        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg d-flex justify-content-between">
            <img src="../assets/img/team-1.jpg" class="avatar-radius ms-3" alt="user1">
          </div>
        </div>

        <div class="modal-header">
          <div class="d-flex flex-column align-items-start ms-3 mt-3">
            <h4 class="text-lg mb-0" id="edit_name_text"></h4>
            <p class="text-xs text-secondary mb-0" id="edit_email_text"></p>
          </div>
        </div>

        <div class="table-responsive p-0">

          <table class="table align-items-center mb-0">

            <thead>
            <tr>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CEP</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">UF</th>
              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cidade</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bairro</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Logradouro</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Número</th>
              <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Complemento</th>
              <th class="text-secondary opacity-7"></th>
            </tr>
            </thead>

            <tbody id="lista_enderecos"></tbody>

          </table>

        </div>

        <div class="modal-footer justify-content-end">

          <div class="d-flex gap-2">
            <button class="btn btn-ligt-adapt text-dark border border-dark" data-bs-dismiss="modal">
              Cancelar
            </button>
          </div>

        </div>

      </div>
    </div>

  </div>

</x-admin.layout_admin>
