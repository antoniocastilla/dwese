(function escucha(){
    var tabla = document.getElementById("tablaProducto");
    tabla.addEventListener('click', clickTabla);
    function clickTabla(event) {
        var target = event.target;
        if(target.tagName === 'A' && target.getAttribute('class') === 'borrar') {
            
            if(!confirm("De verdad?")) {
                event.preventDefault();
            }
        } else if(target.tagName === 'A' && target.getAttribute('class') === 'editar') {
            
        }
    }

})();