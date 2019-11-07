$('#form-login').submit(function (e) {
  e.preventDefault()
  $.post('/api/login.php', $(this).serialize(), (data, status) => {
    if (data.status) {
      location.href = "productos.html"
    } else {
      $.notify({
        message: 'No existe el empleado'
      }, {
        type: 'danger'
      })
    }
  })
})