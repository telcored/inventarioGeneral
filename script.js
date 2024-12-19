ListarProductos();

function ListarProductos(busqueda) {

    
    fetch("listar.php",{
        method: "POST",
        body:busqueda

    }).then(response => response.text()).then(response => {
        
        resultado.innerHTML = response;
       
    })

   
};


registrar.addEventListener("click", () => {
    fetch("registrar.php",{
        method: "POST",
        body: new FormData(frm)
    }).then(response => response.text()).then(response => {
        console.log(response);
        if(response == 'ok'){


            Swal.fire({
               
                icon: "success",
                title: "Agregado con exito!!",
                showConfirmButton: false,
                timer: 1500
              })

              frm.reset();
              ListarProductos();
                  
        }else{
            Swal.fire({
               
                icon: "success",
                title: "Modificado!!",
                showConfirmButton: false,
                timer: 1500
              })
              registrar.value = "Registrar";
              IDBOpenDBRequest.value = "";
              frm.reset();
              ListarProductos();
        }
        
    })
});


function eliminar(id){

    Swal.fire({
        title: "Está seguro de eliminar?",
        
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Si!",
        cancelButtonText: "NO"

      }).then((result) => {
        if (result.isConfirmed) {
            fetch ("eliminar.php", {
                method: "POST",
                body: id
            }).then (response => response.text()).then(response => {
                if(response == 'ok'){

                    
                }
                console.log(response);
                ListarProductos();
                Swal.fire({
                    icon: "success",
                    title: "Eliminado con exito!!",
                    showConfirmButton: false,
                    timer: 1500
            })
          
          });
        }
      });

}


function editar(id){
    fetch("editar.php", {
        method: "POST",
        body: id
    }).then (response => response.json()).then(response => {
        //console.log(response);

        idp.value = response.id;
        codigo.value = response.codigo;
        producto.value = response.producto;
        precio.value = response.precio;
        cantidad.value = response.cantidad;
        registrar.value = "Actualizar"
      
    })
}


buscar.addEventListener("keyup", () => {
    const valor = buscar.value;
    if(valor == ""){
        ListarProductos();
    }else{
        ListarProductos(valor);
    }
})