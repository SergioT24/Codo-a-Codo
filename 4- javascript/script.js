document.addEventListener('DOMContentLoaded', function () {
    const botonComprar = document.querySelectorAll('.boton-comprar');
    const listaProductos = document.getElementById('listaProductos');
    const totalPrecio = document.getElementById('totalPrecio');
    const cantidadProductos = document.getElementById('cantidadProductos');
    let carrito = [];
    let total = 0;
  
    botonComprar.forEach((boton) => {
      boton.addEventListener('click', () => {
        const item = boton.parentNode;
        const nombre = item.querySelector('.nombre').textContent;
        const precio = parseInt(item.querySelector('.precio').textContent.replace('$', '').replace('.',''));
        agregarProducto(nombre, precio);
        actualizarCarrito();
      });
    });
  
    function agregarProducto(nombre, precio) {
      const productoExiste = carrito.find((producto) => producto.nombre === nombre);
      if (productoExiste) {
        productoExiste.cantidad++;
      } else {
        carrito.push({ nombre: nombre, precio: precio, cantidad: 1 });
    
      }
      total += precio;
    }
  
    function actualizarCarrito() {
      listaProductos.innerHTML = '';
      carrito.forEach((producto) => {
        const li = document.createElement('li');
        li.innerHTML = `${producto.cantidad} ${producto.nombre} $${producto.precio}`;
        console.log(producto.precio);
        listaProductos.appendChild(li);
      });
      cantidadProductos.textContent = carrito.reduce((total, producto) => total + producto.cantidad,0);
      totalPrecio.textContent = total;
    }
    document.addEventListener('DOMContentLoaded', function () {
      const botonComprar = document.querySelectorAll('.boton-comprar');
      const listaProductos = document.getElementById('listaProductos');
      const totalPrecio = document.getElementById('totalPrecio');
      const cantidadProductos = document.getElementById('cantidadProductos');
      let carrito = [];
      let total = 0;
    
      botonComprar.forEach((boton) => {
        boton.addEventListener('click', () => {
          const item = boton.parentNode;
          const nombre = item.querySelector('.nombre').textContent;
          const precio = parseInt(item.querySelector('.precio').textContent.replace('$', '').replace('.',''));
          agregarProducto(nombre, precio);
          actualizarCarrito();
        });
      });
    
      function agregarProducto(nombre, precio) {
        const productoExiste = carrito.find((producto) => producto.nombre === nombre);
        if (productoExiste) {
          productoExiste.cantidad++;
        } else {
          carrito.push({ nombre: nombre, precio: precio, cantidad: 1 });
    
        }
        total += precio;
      }
    
      function actualizarCarrito() {
        listaProductos.innerHTML = '';
        carrito.forEach((producto) => {
          const li = document.createElement('li');
          li.innerHTML = `${producto.cantidad} ${producto.nombre} $${producto.precio}`;
          console.log(producto.precio);
          listaProductos.appendChild(li);
        });
        cantidadProductos.textContent = carrito.reduce((total, producto) => total + producto.cantidad,0);
        totalPrecio.textContent = '$' + total.toFixed(2);
      }
    });
  });  