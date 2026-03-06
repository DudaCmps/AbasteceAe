function updateUser(id){

    $.ajax({
        url: '/admin/dashboard/' + id,
        type: 'GET',
        success: function(result){
          $('#name').val(result.name);
          $('#cpf').val(result.cpf);
          $('#email').val(result.email);
          $('#registraton').val(result.registration);
          $('#nasc').val(result.date_of_birth);
          $('#is_active').prop('checked', result.is_active == 1);
          $('#name_text').text(result.name);
          $('#email_text').text(result.email);
        },
      error: function(result){
          console.log('olha o Gustavo Lima ai');
      }
    })

}
