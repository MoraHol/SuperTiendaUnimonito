// inicializacion de datatable
var $tableProductos = $('#tableProductos').dataTable({
  language: {
    url: "/vendor/dataTables/Spanish.json"
  },
  responsive: true,
  ajax: {
    url: '/api/get_products.php?dataTable=true',
    dataSrc: 'data'
  },
  columns: [{
    data: 'nombre'
  },
  {
    data: 'observaciones'
  }, {
    data: 'precio'
  },{
    data: 'tipo'
  },{
    data: 'cantidad'
  }, {
    data: 'id',
    render: (data, type, row) => {
      return `<a href="update_producto.php?id=${data}" class="btn btn-primary"><i class="fas fa-pen"></i></a><a class="btn btn-primary" href="javascript:deleteProducto('${data}')"><i class="fas fa-trash"></i></a>`
    }
  }]
})


function deleteProducto(id) {
  $.post('/api/delete_producto.php', {
    id: id
  }, (data, status) => {
    if (data.status) {
      
      $.notify({
        message: 'Se ha borrado el producto'
      }, {
        type: 'success'
      })

      $tableProductos.api().ajax.reload()
    } else {
      $.notify({
        message: 'No se ha borrado el producto'
      }, {
        type: 'danger'
      })
    }
  })
}