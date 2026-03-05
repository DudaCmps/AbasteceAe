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
                      <a class="pointer text-secondary font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#modal-edit-user">
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

    <div class="modal-dialog">
      <div class="modal-content">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3 d-flex  justify-content-end">
            <button type="button" class="btn-close pe-4" data-bs-dismiss="modal"></button>
          </div>
            <img src="../assets/img/team-3.jpg" class="avatar-radius ms-3" alt="user1">
          <p></p>
        </div>

        <div class="modal-body ms-3">
          <form class="text-start">

            <div class="form-row-custom my-3">
              <label class="label-dash">Nome</label>
              <input type="text" class="form-novo input-nome">

              <label class="label-dash ms-3">CPF</label>
              <input type="text" class="form-novo input-cpf">
            </div>

            <div class="form-row-custom my-3">
              <label class="label-dash">Email</label>
              <input type="text" class="form-novo input-email">

              <label class="label-dash ms-3">Matrícula</label>
              <input type="text" class="form-novo input-matricula">
            </div>

            <div class="form-row-custom my-3">
              <label class="label-dash">Nascimento</label>
              <input type="date" class="form-novo input-cpf">

              <label class="label-dash ms-3">Senha</label>
              <input type="text" class="form-novo input-email">
            </div>

            <div class="form-row-custom my-3">
              <label class="label-dash">Status</label>

            </div>

            <div class="text-center">
              <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">
                Sign in
              </button>
            </div>

          </form>
        </div>

        <div class="modal-footer">
          <button class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>

      </div>
    </div>
  </div>

</x-admin.layout_admin>
