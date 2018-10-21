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
    
    var checkboxPr = document.getElementById('checkBoxPr');
    checkboxPr.addEventListener('click', todosCheckBoxes);
    function todosCheckBoxes(){
        var checkboxes=document.getElementsByTagName('input');
        for(let i=0;i<checkboxes.length;i++){ //recoremos todos los controles
            if(checkboxes[i].type == "checkbox"){ //solo si es un checkbox entramos
                checkboxes[i].checked = checkboxPr.checked;
            }
        }
    }
}

)();
