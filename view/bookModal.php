<div class="modal fade bd-modal shadow-sm" id="ModalBook" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header head text-center">
                    <h4 class="modal-title" id="ModalLabel">Add New Book</h4>
                    <img type="button" class="close high" data-dismiss="modal" aria-label="Close" src="image/close.png" alt="close" height="30" width="30">
                </div>
                <div class="modal-body modal_body ">
                    <form action="./php/user.php" method="POST" id="second" class="d-flex justify-content-between pe-5" enctype='multipart/form-data' >
                        <div class="fw-bold">
                                <div id="hidden2">
                                </div>
                                <div id="hidden_img">
                                </div>
                                <div class="nowrap">
                                    title: &nbsp; &nbsp;
                                    <input class="form-control input-sm ms-5 cart shadow-sm" type="text" name="title" id="title" placeholder="enter your userName" required>
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350" class="ms-5">
                                <div class="nowrap">
                                    <label for="autor">Autor:</label>
                                    <input class="form-control input-sm ms-5 cart shadow-sm" type="text" name="autor" id="autor" placeholder="enter your email address" required>
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350" class="ms-5">
                                <div class="nowrap"> 
                                <label for="category" class="d-block">Category:</label>
									<select class="form-select form-select-sm ms-5 cart shadow-sm" name="category" id="category">
                                    <?php  getCategorys() ?>
                                    </select>
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350" class="ms-5">
                                <div class="nowrap"> <label for="isbi"> Isbi:</label>
                                    <input class="form-control input-sm ms-5 cart shadow-sm" type="number" name="isbi" placeholder="re-enter your password to comfirme" id="isbi" required>
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350" class="ms-5">
                                <div class="nowrap" id="img">
                                </div>
                                <div class="nowrap"> <label for="image"> Image:</label>
                                    <input class="form-control input-sm ms-5 cart shadow-sm" type="file" name="image"  id="image">
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350" class="ms-5">
                                <div class="nowrap"> <label for="date"> published:</label>
                                    <input class="form-control input-sm ms-5 cart shadow-sm" type="date" name="date" id="date" required>
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350" class="ms-5">
                                <div class="nowrap"> <label for="page"> Number of pages:</label>
                                    <input class="form-control input-sm ms-5 cart shadow-sm" type="number" name="page" id="page" required>
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350" class="ms-5">
                                <div class="nowrap">
                                <label for="description" class="d-block">description:</label>
									<textarea class="form-control input-sm ms-5 cart shadow-sm" id="description" name="description" rows="5" cols="33">description...</textarea>
                                </div>
                                </br>
                                <div class="modal-footer modal_body" id="book_crud">
                                    <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" name="save_book" id="hide" class="btn button ">Create</button>
                                </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>