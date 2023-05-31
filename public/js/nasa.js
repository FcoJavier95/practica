function getAPOD(){
    // guardadno en una variable la llave de la api
    let apiKey = "0yGvVHxc7BbDiAFaJZU87TEspblFpG8eNBcrKpdd";

    //url de la api para obtener la imagen del día
    let apiUrl = `https://api.nasa.gov/planetary/apod?api_key=${apiKey}`;

    //realizar la solicitud utiizando fetch
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            document.getElementById('imagenNasa').src = data.url;
            document.getElementById('titulo').value = data.title;
            console.log(data.copyright);
        })
}

getAPOD();