//Variables documento HTML
let curso = document.getElementById("curso");
let clase = document.getElementById("clase");

//Al cambiar la opcion, cambian las asignaturas
curso.addEventListener("change", verAsignaturas);
clase.addEventListener("change", verAsignaturas);


//Permite ver las asignaturas del curso seleccionado
function verAsignaturas(){
    //Contiene los cursos seleccionados
    let cursoSeleccionado = curso.selectedOptions;
    let claseSeleccionada = clase.selectedOptions;
    
    //Reseteamos el campo asignaturas
    document.getElementById("asignaturas").innerHTML = "";
    
    //Recorremos los cursos
    for(let curso of cursoSeleccionado){
        //Obtenemos el nombre del curso
        let idCurso = curso.value;
        
        //Recorremos las clases seleccionadas
        for(let clase of claseSeleccionada){
        let idClase = clase.value;
        
        //Creamos un FormData para pasar el nombre del curso como JSON al servidor
        let valor = new FormData;
        //Añadimos con un id y el valor al FormData
        valor.append("idCurso", idCurso);
        valor.append("idClase", idClase);
        
        //Enviamos la peticion al servidor con el valor que queremos 
        fetch('../funciones/verAsignaturas.php', {
            method: 'POST',
            body: valor
        })
            //Transforma la respuesta que nos da el servidor a texto
            .then(respuesta => respuesta.text())
            //La respuesta anterior la representa
            .then(function(data){
                let texto = `<table class="asignaturasCurso"><th>${curso.getAttribute("data-nombre")} ${clase.getAttribute("data-nombre")}</th><tr><td class='asignaturas'>${data}</td></tr>`;
                    
                document.getElementById("asignaturas").innerHTML += texto;
            });
        };       
    }
}
