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
      $('#nombre').val('')
      $('#puntos').val('')
      $('#ciudad').val('')
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
  index = null
  productExist = productsSelected.filter((product, indx) => {
    if (product.id == id) {
      index = indx
      return product
    }
  })[0]
  if (productExist != null) {
    productExist.quantity += parseInt(quantity)
    productsSelected[index] = productExist
  } else {
    productsSelected.push({
      id,
      quantity: parseInt(quantity)
    })
  }
  updateTable()
}

function updateTable() {
  $('#tableProductos tbody').html('')
  productsSelected.forEach(productSel => {
    let productIn = products.filter(product => product.id == productSel.id)[0]
    $('#tableProductos tbody').append(`<tr>
    <td>${productIn.nombre}</td>
    <td>${productSel.quantity}</td>
    <td>$ ${$.number(productIn.precio * productSel.quantity, 2, ',', '.')}</td>
    <td class="text-center">
      <a class="btn btn-primary" href="javascript:deleteProduct(${productIn.id})">
        <i class="fas fa-trash"></i>
      </a>
    </td>
    </tr>`)
  })
  $('#tableProductos tbody').append(`<tr>
    <td class="text-primary">Total</td>
    <td></td>
    <td>$ ${$.number(sumaProductos(), 2, ',', '.')}</td>
    <td class="text-center">
    </td>
    </tr>`)
}

function sumaProductos(){
  let sum = 0
  productsSelected.forEach(productSel => {
    let productIn = products.filter(product => product.id == productSel.id)[0]
    sum += productIn.precio * productSel.quantity
  })
  return sum
}

function deleteProduct(id) {
  let index = null
  productsSelected.filter((product, indx) => {
    if (product.id == id) {
      index = indx
      return product
    }
  })[0]
  productsSelected.splice(index, 1)
  updateTable()
}

$('#btn-procesar').click(function () {
  if (cliente != null || isFilledClient()) {
    if (cliente != null) {
      $.post(`/api/sells/new/`, {
        products: JSON.stringify(productsSelected),
        client: JSON.stringify(cliente)
      }, (data, status) => {
        if (status == 'success') {
          $.notify({
            message: 'La compra se ha procesado'
          }, {
            type: 'success'
          })
          productsSelected = []
          updateTable()
        }
      })
    } else {
      let clienteNew = {
        nombre: $('#nombre').val(),
        ciudad:  $('#ciudad').val(),
        puntos: 0,
        cedula: $('#cedula').val(), 
        id: null
      }
      $.post(`/api/sells/new/`, {
        products: JSON.stringify(productsSelected),
        client: JSON.stringify(clienteNew)
      }, (data, status) => {
        if (status == 'success') {
          $.notify({
            message: 'La compra se ha procesado'
          }, {
            type: 'success'
          })
          productsSelected = []
          updateTable()
        }
      })
    }
  } else {
    $.notify({
      message: 'Por favor ingrese el ciente'
    }, {
      type: 'danger'
    })
  }
})

function isFilledClient() {
  return $('#nombre').val().trim() != '' ||
    $('#puntos').val().trim() != '' ||
    $('#ciudad').val().trim() != '' ||
    $('#cedula').val().trim() != ''
}