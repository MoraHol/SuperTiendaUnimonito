let cliente = null, products = null, productsSelected = []
$('#btn-search-cliente').click(function () {
    let cc = $('#cedula').val()
    $.get(`/api/clients/${cc}`, (data, status) => {
        if (data == null) {
            $.notify({
                message: 'No Existe este cliente'
            }, {
                type: 'warning'
            })
        } else {
            $('#nombre').val(data.nombre)
            $('#puntos').val(data.puntos)
            $('#ciudad').val(data.ciudad)
            cliente = data
        }
    })
})

$.get('/api/products', (data, status) => {
    products = data
    data.forEach(product => {
        $('#products').append(`<option value="${product.id}">${product.nombre}</option>`)
    })
})

$('#btn-add-product').click(function () {
    if ($('#cantidad').val().trim() != '') {
        addProduct($('#products').val(), $('#cantidad').val().trim())
    } else {
        $.notify({
            message: 'ingrese la cantidad del producto'
        }, {
            type: 'danger'
        })
    }
})

function addProduct(id, quantity) {
    productExist = productsSelected.filter(product => product.id == id)[0]
    if (productExist != null) {
        productExist.quantity += quantity

    } else {
        productsSelected.push({
            id,
            quantity
        })
    }
    console.log(productsSelected)
}