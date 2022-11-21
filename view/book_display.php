    <?php if ($_SESSION['role'] == 0) : ?>
        <div id="add_book">
            <button class="btn button" type="submit" onclick="createBook()" >Add Book</button>
        </div>
    <?php endif ?>
    <br>
    <br>
    <input classe="form-control input-sm m-1 cart shadow-sm" type="text" placeholder="Recherche sur les titres" id="recherche" onkeyup="filtrer()">
    <section class="d-flex flex-wrap justify-content-around p-5 section2" id="section">
        <?php
        getBooks();
        ?>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 cart rounded-top border border-dark shadow-lg m-2">
                            <img src="./image/book (1).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre">Card title </h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h4>Title: <span class="text-muted">still life</span></h4>
                            <h4>Autor: <span class="text-muted">sahar wiliam</span></h4>
                            <h4>published: <span class="text-muted">2000-11-07</span></h4>
                        </div>
                        <button class="btn button" type="submit">Add to Library</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 cart rounded-top border border-dark shadow-lg m-2">
                            <img src="./image/book (4).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre">Card title </h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h4>Title: <span class="text-muted">still life</span></h4>
                            <h4>Autor: <span class="text-muted">sahar wiliam</span></h4>
                            <h4>published: <span class="text-muted">2000-11-07</span></h4>
                        </div>
                        <button class="btn button" type="submit">Add to Library</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 cart rounded-top border border-dark shadow-lg m-2">
                            <img src="./image/book (3).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre">Card title </h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h4>Title: <span class="text-muted">still life</span></h4>
                            <h4>Autor: <span class="text-muted">sahar wiliam</span></h4>
                            <h4>published: <span class="text-muted">2000-11-07</span></h4>
                        </div>
                        <button class="btn button" type="submit">Add to Library</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="./image/book (2).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre">Card title </h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h4>Title: <span class="text-muted">still life</span></h4>
                            <h4>Autor: <span class="text-muted">sahar wiliam</span></h4>
                            <h4>published: <span class="text-muted">2000-11-07</span></h4>
                        </div>
                        <button class="btn button" type="submit">Add to Library</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="./image/book (5).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre">Card title </h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h4>Title: <span class="text-muted">still life</span></h4>
                            <h4>Autor: <span class="text-muted">sahar wiliam</span></h4>
                            <h4>published: <span class="text-muted">2000-11-07</span></h4>
                        </div>
                        <button class="btn button" type="submit">Add to Library</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="./image/book (6).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre">Card title </h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h4>Title: <span class="text-muted">still life</span></h4>
                            <h4>Autor: <span class="text-muted">sahar wiliam</span></h4>
                            <h4>published: <span class="text-muted">2000-11-07</span></h4>
                        </div>
                        <button class="btn button" type="submit">Add to Library</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-3 p-3" name="ligne" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="./image/book (6).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <div class="card-title d-flex justify-content-around pt-2">
                                <h5 name="titre">Card title </h5>
                                <i class="bi bi-caret-down p-1"></i>
                            </div>
                        </div>
                    </div>
                    <div class="p-3 rounded-top border border-dark shadow-lg m-2 cart flip-box-back">
                        <div>
                            <h4>Title: <span class="text-muted">still life</span></h4>
                            <h4>Autor: <span class="text-muted">sahar wiliam</span></h4>
                            <h4>published: <span class="text-muted">2000-11-07</span></h4>
                        </div>
                        <button class="btn button" type="submit">Add to Library</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
</script>