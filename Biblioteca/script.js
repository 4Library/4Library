
// Contenido del archivo "script.js"

function searchBooks() {
    var searchTerm = document.getElementById('searchInput').value;
    if (searchTerm.trim() !== '') {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState === 4 && this.status === 200) {
                document.getElementById('searchResults').innerHTML = this.responseText;
            }
        };
        xmlhttp.open('GET', 'buscar_libros.php?busqueda=' + searchTerm, true);
        xmlhttp.send();
    }
}