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
                          <img src="../assets/img/team-3.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                          <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{ preg_replace("/(\d{3})(\d{3})(\d{3})(\d{2})/", "$1.$2.$3-$4", $user->cpf)}}</p>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Colaborador</p>
                      <p class="text-xs text-secondary mb-0">{{ $user->registration }}</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="badge badge-sm {{ $user->is_active ? "bg-gradient-success" : "bg-gradient-secondary"}}">
                        {{ $user->is_active ? 'Ativo' : 'Inativo'}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{ $user->date_of_birth}}</span>
                    </td>
                    <td class="align-middle">
                      <a class="pointer text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#modal-edit-user" onclick="updateUser({{$user->id}})">
                        Edit
                      </a>
                    </td>
                  </tr>

                @empty
                  <tr>
                    <p>Não há colaboradores cadastrados no momento.</p>
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
  <div class="modal fade modal-lg " id="modal-edit-user" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg  d-flex  justify-content-between">
{{--            pt-4 pb-3--}}
            <img src="../assets/img/team-1.jpg" class="avatar-radius ms-3" alt="user1">
{{--            <button type="button" class="btn-close pe-4 align-self-center" data-bs-dismiss="modal"></button>--}}
          </div>
        </div>

        <div class="modal-header ">
          <div class="d-flex flex-column align-items-start ms-3 mt-3">
            <h4 class="text-lg mb-0" id="name_text"></h4>
            <p class="text-xs text-secondary mb-0" id="email_text">

            </p>
          </div>
        </div>

        <div class="modal-body ms-3">
          <form class="text-start">

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
                     id="registraton"
                     name="registration"
                     class="form-novo input-matricula"
                     placeholder="00000-0">
            </div>

            <div class="form-row-custom my-3">
              <label class="label-dash">Nascimento</label>
              <input type="date"
                     id="nasc"
                     name="nasc"
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

          </form>
        </div>


        <div class="modal-footer justify-content-between">
          <div>
            <button class="btn btn-outline-danger">Excluir Colaborador</button>
          </div>
          <div class="d-flex gap-2">
            <button class=" btn btn-ligt-adapt text-dark border border-dark" data-bs-dismiss="modal">Cancelar</button>
            <button class="btn btn-dark" data-bs-dismiss="modal">Salvar Mudanças</button>
          </div>
        </div>

      </div>
    </div>
  </div>

</x-admin.layout_admin>
