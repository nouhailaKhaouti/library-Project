<div class="modal fade bd-example-modal-lg shadow-sm" id="ModalLibrary" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header head text-center">
                <h4 class="modal-title" id="ModalLabel">Add to library</h4>
                <img type="button" class="close high" data-dismiss="modal" aria-label="Close" src="image/close.png" alt="close" height="30" width="30">
            </div>
            <div class="modal-body modal_body ">
                <form action="./php/user.php" method="POST" id="fourth" class="d-flex justify-content-between pe-5">
                    <div class="fw-bold">
                        <div class="nowrap">
                            <div id="hidden1">
                            </div>
                            <select class="form-select form-select-sm ms-5 cart shadow-sm" name="type" id="type">
                                <option value="Want to read">Want to read</option>
                                <option value="reading">reading</option>
                                <option value="Already read">Already read</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer modal_body" id="library_crud">
                        <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
                        <button type="submit" name="save_library" onclick="Category()" id="hide" class="btn button ">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>