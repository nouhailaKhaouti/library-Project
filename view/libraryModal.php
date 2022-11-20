<div class="modal fade bd-example-modal-lg shadow-sm" id="ModalLibrary" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
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
                                    
                                </div>
                                <div class="modal-footer modal_body d-flex justify-content-around" id="library_crud">
                                    <button type="submit" name="wtr" id="wtr" class="btn button ">Want to read</button>
                                    <button type="submit" name="r" id="r" class="btn button ">Reading</button>
                                    <button type="submit" name="ar" id="ar" class="btn button ">Already read</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>