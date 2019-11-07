// inicializacion de datatable
var $tableFranquicias = $('#tableFranquicias').dataTable({
  language: {
    url: "/vendor/dataTables/Spanish.json"
  },
  responsive: true,
  ajax: {
    url: '/api/get_franquicias.php?dataTable=true',
    dataSrc: 'data'
  },
   columns: [{
    data: 'nombre'
  },
  {
    data: 'idLocalidad.nombre'
  },{
    data: 'id',
    render: (data, type, row)=>{
      return `<a href="update_franquicia.php?id=${data}" class="btn btn-primary"><i class="fas fa-pen"></i></a><a class="btn btn-primary" href="javascript:deleteFranquicia('${data}')"><i class="fas fa-trash"></i></a>`
    }
  }]
})

function deleteFranquicia(id){
  $.post('/api/delete_franquicia.php',{
    id: id
  },(data,status)=>{
    if(data.status){
      $.notify({
        message: 'Se ha borrado la franquicia'
      },{
        type: 'success'
      })
      $tableFranquicias.api().ajax.reload()
    }else{
      $.notify({
        message: 'No se ha borrado la franquicia'
      },{
        type: 'danger'
      })
    }
  })
}
$('#form-registro-franquicia').submit(function (e){
  e.preventDefault()
  $.post('/api/registrar_franquicia.php',$(this).serialize(),(data,status)=>{
    if(data.status){
      $.notify({
        message: 'Se ha registrado la franquicia'
      },{
        type: 'success'
      })
    }else{
      $.notify({
        message: 'No se ha registrado la franquicia'
      },{
        type: 'danger'
      })
    }
  })
})