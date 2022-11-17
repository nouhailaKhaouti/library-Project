<div class="modal fade bd-example-modal-lg shadow-sm" id="ModalCategory" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header head text-center">
                    <h4 class="modal-title" id="ModalLabel">Add New Category</h4>
                    <img type="button" class="close high" data-dismiss="modal" aria-label="Close" src="image/close.png" alt="close" height="30" width="30">
                </div>
                <div class="modal-body modal_body ">
                    <form action="./php/script.php" method="POST" id="third" class="d-flex justify-content-between pe-5" >
                        <img src="image/4.png" alt="4" height="400" width="400">
                        <div class="fw-bold">
                            <div class="nowrap">
                                label: &nbsp; &nbsp;
                                <input class="form-control input-md m-1 cart shadow-sm" type="text" name="label" id="label" placeholder="enter your userName" required>
                                <i class="fas fa-check-circle"></i>
                                <i class="fas fa-exclamation-circle"></i>
                                <small>Error message</small>
                                <img src="image/line1.png" alt="" height="20" width="350">
                                </br>
                                <div class="modal-footer modal_body" id="category_crud">
                                    <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
                                    <button type="submit" name="save" id="hide" class="btn button ">Create</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>