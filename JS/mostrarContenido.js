let contenidos = document.getElementsByTagName("form");

for(let contenido of contenidos){
    contenido.addEventListener("click", () => {
        
        contenido.submit();
    });
}