// inicializacion de datatable
var $tableEmpleados = $('#tableEmpleados').dataTable({
  language: {
    url: "/vendor/dataTables/Spanish.json"
  },
  responsive: true,
  ajax: {
    url: '/api/get_empleados.php?dataTable=true',
    dataSrc: 'data'
  },
   columns: [{
    data: 'nombre'
  },
  {
    data: 'cedula'
  },
  {
    data: 'telefono'
  },
  {
    data: 'salario'
  },
  {
  	data: 'fechaIngreso'
  },{
  	data: 'idfranquicia.nombre'
  },{
  	data: 'id',
  	render: (data, type, row)=>{
  		return `<a href="update_empleado.php?id=${data}" class="btn btn-primary"><i class="fas fa-pen"></i></a><a class="btn btn-primary" href="javascript:deleteEmpleado('${data}')"><i class="fas fa-trash"></i></a>`
  	}
  }]

  })

function deleteEmpleado(id){
	$.post('/api/delete_empleado.php',{
		id: id
	},(data,status)=>{
		if(data.status){
			$.notify({
				message: 'Se ha borrado el empleado'
			},{
				type: 'success'
			})
			$tableEmpleados.api().ajax.reload()
		}else{
			$.notify({
				message: 'No se ha borrado el empleado'
			},{
				type: 'danger'
			})
		}
	})
}