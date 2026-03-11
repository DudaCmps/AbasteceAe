function getUser(id){

    $.ajax({
        url: '/admin/dashboard/' + id +'/editar',
        type: 'GET',
        success: function(result){
          $('#name').val(result.name);
          $('#cpf').val(result.cpf);
          $('#email').val(result.email);
          $('#registration').val(result.registration);
          $('#date_of_birth').val(result.date_of_birth);
          $('#is_active').prop('checked', result.is_active == 1);
          $('#name_text').text(result.name);
          $('#email_text').text(result.email);

          $('#form-edit-user').attr('action', `/admin/dashboard/update/${id}`);

          console.log(result);
        },
      error: function(result){
          console.log('olha o Gustavo Lima ai');
      }
    })

}

function getAddresses(id){

  $.ajax({
    url: '/admin/dashboard/' + id + '/enderecos',
    type: 'GET',
    success: function(result) {

      $('#edit_name_text').text(result.user.name);
      $('#edit_email_text').text(result.user.email);

      let html = '';

      result.enderecos.forEach(function(endereco){

        html += `
        <tr>
          <td>
            <div class="d-flex px-2 py-1">
              <div class="d-flex flex-column justify-content-center">
                <p class="text-xs font-weight-bold mb-0">${endereco.cep}</p>
              </div>
            </div>
          </td>

          <td>
            <p class="text-xs font-weight-bold mb-0">${endereco.estado}</p>
          </td>

          <td>
            <p class="text-xs font-weight-bold mb-0">${endereco.cidade}</p>
          </td>

          <td class="align-middle text-center text-sm">
            <p class="text-xs font-weight-bold mb-0">${endereco.bairro}</p>
          </td>

          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">${endereco.logradouro}</span>
          </td>

          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">${endereco.numero}</span>
          </td>

          <td class="align-middle text-center">
            <span class="text-secondary text-xs font-weight-bold">${endereco.complemento ?? ''}</span>
          </td>

          <td class="align-middle">
            <a class="cursor-pointer text-secondary font-weight-bold text-xs"
               data-bs-toggle="modal"
               data-bs-target="#modal-edit-user"
               onclick="updateUser(2)">

              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#737373" viewBox="0 0 256 256">
                <path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path>
              </svg>

            </a>

            <a class="cursor-pointer text-secondary font-weight-bold text-xs"
               data-bs-toggle="modal"
               data-bs-target="#modal-edit-user"
               onclick="updateUser(1)">

              <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#CE0000" viewBox="0 0 256 256">
                <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96Zm96,168H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path>
              </svg>

            </a>
          </td>
        </tr>
        `;

      });

      $('#lista_enderecos').html(html);

    }
  });

}
