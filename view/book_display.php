    <?php if ($_SESSION['role'] == 0) : ?>
        <div id="add_book" class="mx-5">
            <button class="btn button" type="submit" onclick="createBook()">Add Book</button>
        </div>
    <?php endif ?>
    <br>
    <br>
    <div class="mx-5 col-4">
        <button class="btn button1" onclick="search()"><i class="bi bi-search "></i> Search</button>
        <br>
        <br>
        <div id="search" class="d-none ms-3">
            <input class="form-control input-sm rounded-3 cart shadow-sm " type="text" placeholder="Recherche sur les titres" id="recherche" onkeyup="filtrer()">
        </div>
    </div>
    <section class="d-flex flex-wrap justify-content-around p-5 section2" id="section">
        <?php
        getBooks();
        ?>
    </section>
    <script>
        function filtrer() {
            var filtre, section, ligne, cellule, i, text;
            filtre = document.getElementById("recherche").value.toUpperCase();
            section = document.getElementById("section");
            ligne = document.getElementsByName("ligne");
            for (i = 0; i < ligne.length; i++) {
                cellule = ligne[i].getElementsByTagName("h5")[0];

                if (cellule) {
                    text = cellule.innerText;
                    if (text.toUpperCase().indexOf(filtre) > -1) {
                        ligne[i].style.display = ""
                    } else {
                        ligne[i].style.display = "none"
                    }
                }
            }
        }

        function search() {

            var input_name = document.getElementById("search");
            if (input_name.classList.contains('d-none')) {
                console.log("hiii");
                input_name.classList.remove('d-none');
                console.log(input_name.style.display);
            } else {
                input_name.classList.add('d-none');
            }
        }
    </script>