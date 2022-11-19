<?php
 include './view/header.php';
 if(isset($_SESSION['user_id'])){
?>
<div id="add_book">
<button class="btn button" type="submit">Add Book</button>
</div>
<div id="add_category">
<button class="btn button" type="submit" onclick="createCategory()"> Add Category</button>
</div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">label</th>
        <th scope="col">update</th>
        <th scope="col">delete</th>
      </tr>
    </thead>
    <tbody>
<?php
displayCategorys();
?>

</tbody>
    </table>
<br>
<br>
    <section class="d-flex flex-wrap justify-content-around p-5 section2">
    <?php
getBooks();
?>
        <div class="rounded-3 p-3" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 cart rounded-top border border-dark shadow-lg m-2">
                            <img src="./image/book (1).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <h5 class="card-title d-flex justify-content-around pt-2">Card title <i
                                    class="bi bi-caret-down p-1"></i> </h5>
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
        <div class="rounded-3 p-3" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 cart rounded-top border border-dark shadow-lg m-2">
                            <img src="./image/book (4).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <h5 class="card-title d-flex justify-content-around pt-2">Card title <i
                                    class="bi bi-caret-down p-1"></i> </h5>
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
        <div class="rounded-3 p-3" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 cart rounded-top border border-dark shadow-lg m-2">
                            <img src="./image/book (3).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <h5 class="card-title d-flex justify-content-around pt-2">Card title <i
                                    class="bi bi-caret-down p-1"></i> </h5>
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
        <div class="rounded-3 p-3" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="./image/book (2).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <h5 class="card-title d-flex justify-content-around pt-2">Card title <i
                                    class="bi bi-caret-down p-1"></i> </h5>
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
        <div class="rounded-3 p-3" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="./image/book (5).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <h5 class="card-title d-flex justify-content-around pt-2">Card title <i
                                    class="bi bi-caret-down p-1"></i> </h5>
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
        <div class="rounded-3 p-3" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="./image/book (6).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <h5 class="card-title d-flex justify-content-around pt-2">Card title <i
                                    class="bi bi-caret-down p-1"></i> </h5>
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
        <div class="rounded-3 p-3" style="width:18rem;">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="p-3 rounded-top border border-dark shadow-lg m-2  cart ">
                            <img src="./image/book (6).jpg" class="card-img-top" alt="..." height="300" width="100">
                        </div>
                        <div class="rounded-1 border border-dark m-2 text-center shadow-lg  modal_body ">
                            <h5 class="card-title d-flex justify-content-around pt-2">Card title <i
                                    class="bi bi-caret-down p-1"></i> </h5>
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


<?php


 include "autoloader.php" ;

}else{
    $_SESSION['error']="you need to register first if you want to see more";
    header("Location: http://localhost/library-project/index.php");
}

?>