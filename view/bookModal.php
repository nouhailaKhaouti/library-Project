<div class="modal fade bd-example-modal-lg shadow-sm" id="ModalBook" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header head text-center">
                    <h4 class="modal-title" id="ModalLabel">Add New Book</h4>
                    <img type="button" class="close high" data-dismiss="modal" aria-label="Close" src="image/close.png" alt="close" height="30" width="30">
                </div>
                <div class="modal-body modal_body ">
                    <form action="./php/script.php" method="POST" id="second" class="d-flex justify-content-between pe-5" enctype='multipart/form-data' >
                        <img src="image/4.png" alt="4" height="400" width="400">
                        <div class="fw-bold">
                            <div class="nowrap">
                                title: &nbsp; &nbsp;
                                <input class="form-control input-md m-1 cart shadow-sm" type="text" name="title" id="title" placeholder="enter your userName" required>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                                <img src="image/line1.png" alt="" height="20" width="350">
                                <div class="nowrap">
                                    <label for="autor">Autor:</label>
                                    <input class="form-control input-md m-1 cart shadow-sm" type="text" name="autor" id="autor" placeholder="enter your email address" required>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350">
                                <div class="nowrap"> 
                                <label for="category" class="d-block">Category:</label>
									<select class="form-select form-select-sm m-1 cart shadow-sm" name="category" id="category">
                                    <?php  getCategorys() ?>
                                    </select>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <img src="image/line1.png" alt="" height="20" width="350">
                                <div class="nowrap"> <label for="isbi"> Isbi:</label>
                                    <input class="form-control input-md m-1 cart shadow-sm" type="number" name="isbi" placeholder="re-enter your password to comfirme" id="isbi" required>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="nowrap"> <label for="image"> Image:</label>
                                    <input class="form-control input-md m-1 cart shadow-sm" type="file" name="image" placeholder="re-enter your password to comfirme" id="image" required>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="nowrap"> <label for="image"> published:</label>
                                    <input class="form-control input-md m-1 cart shadow-sm" type="date" name="date" id="date" required>
                                    <i class="fas fa-check-circle"></i>
                                    <i class="fas fa-exclamation-circle"></i>
                                    <small>Error message</small>
                                </div>
                                <div class="nowrap">
                                <label for="description" class="d-block">description:</label>
									<textarea class="form-control input-md m-1 cart shadow-sm" id="description" name="description" rows="5" cols="33">description...</textarea>
                                </div>
                                </br>
                                <div class="modal-footer modal_body" id="book_crud">
                                    <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" name="save" id="hide" class="btn button ">Create</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>