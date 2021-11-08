function validar(){
    if(document.formGrupo.nombreProyecto.value !=''){
        document.formGrupo.crearGrupo.disabled = false;
    }else {
        document.formGrupo.crearGrupo.disabled = true;
    }
}
