$(document).ready(function () {
  

  $(document).on('submit', '#contactForm', function (e) {
      e.preventDefault();
      let button = $('#contactBtn')
      // Netoyage des champsalert
      $('.alert').addClass('d-none')
      $('span+strong').html('');
      $('input').removeClass('is-invalid');
      $('select').removeClass('is-invalid');

      $.ajax({
        url: $(this).attr('action'),
        method: 'POST',
        data: $(this).serialize(),
        dataType: 'JSON',
        beforeSend: function () {
          button.attr('disabled', true)
          button.html('Chargement...')
        }
      })
      .done(function (data) {
          if (data.errors) {
              $.each(data.errors, function (key, value) {
                  $('#' + key).addClass('is-invalid')
                  $('#' + key + '-error').html(value)
              })
          }
          if (data.success) {
            location.href = '/contact';
          }
          button.attr('disabled', false)
          button.html('Enregistrer')
      })
      .fail(function (data) {
        $.each(data.responseJSON, function (key, value) {
          $('#' + key).addClass('is-invalid')
          $('#' + key + '-error').html(value)
        })
        button.attr('disabled', false)
        button.html('Enregistrer')
      })
  })



});
