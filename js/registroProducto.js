$('#form-registro-producto').submit(function (e) {
  e.preventDefault()
  $.post('/api/registrar_producto.php', $(this).serialize(), (data, status) => {
    if (data.status) {
      $.notify({
        message: 'Se ha registrado el producto'
      }, {
        type: 'success'
      })
    } else {
      $.notify({
        message: 'No se ha registrado el producto'
      }, {
        type: 'danger'
      })
    }
  })
})