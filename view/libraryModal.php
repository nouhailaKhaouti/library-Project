<div class="modal fade bd-example-modal-lg shadow-sm" id="ModalLibrary<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header head text-center">
                    <h4 class="modal-title" id="ModalLabel">Add to library</h4>
                    <img type="button" class="close high" data-dismiss="modal" aria-label="Close" src="image/close.png" alt="close" height="30" width="30">
                </div>
                <div class="modal-body modal_body ">
                    <form action="./php/user.php" method="POST" id="third" class="d-flex justify-content-between pe-5" >
                        <img src="image/4.png" alt="4" height="400" width="400">
                        <div class="fw-bold">
                            <div class="nowrap">
                                <div id="hidden">
                                    <input type="hidden" name="book_id" value="<?=$id?>"> 
                                </div>
                                <div class="modal-footer modal_body d-flex justify-content-around" id="library_crud">
                                <select class="form-select form-select-sm ms-5 cart shadow-sm" name="type" id="type">
                                    <option value="Want to read">Want to read</option>
                                    <option value="reading">reading</option>
                                    <option value="Already read">Already read</option>
                                    </select>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>