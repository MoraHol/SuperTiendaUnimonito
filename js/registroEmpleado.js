$.get('/api/get_franquicias.php', (data, status) => {
    console.log(data)
    $('#franquicias-select').html('')
    data.forEach(franquicia => {
        $('#franquicias-select').append(`<option value="${franquicia.id}">${franquicia.nombre}</option>`)
    })
})

$('#form-registro-empleado').submit(function(e){
	e.preventDefault()
	$.post('/api/registrar_empleado.php',$(this).serialize(),(data,status)=>{
		if(data.status){
			$.notify({
				message: 'Se ha registrado al empleado'
			},{
				type: 'success'
			})
		}else{
			$.notify({
				message: 'No se ha registrado al empleado'
			},{
				type: 'danger'
			})
		}
	})
})