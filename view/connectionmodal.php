<div class="modal fade bd-example-modal-lg shadow-sm" id="Modal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header head text-center">
                <h4 class="modal-title" id="ModalLabel">Register</h4>
                <img type="button" class="close high" data-dismiss="modal" aria-label="Close" src="image/close.png" alt="close" height="30" width="30">
            </div>
            <div class="modal-body modal_body ">
                <form action="./php/user.php" method="POST" id="first" class="d-flex justify-content-between pe-5" data-parsley-validate>
                    <img src="image/4.png" alt="4" height="400" width="400">
                    <div class="fw-bold">
                        <div class="nowrap">
                            <img src="image/user.png" alt="user" height="20" width="20"> User
                            Name: &nbsp; &nbsp;
                            <input class="form-control input-md m-1 cart shadow-sm connect" type="text" name="Name" id="Name" placeholder="enter your userName" aria-describedby="emailHelp" placeholder="" data-parsley-minlength="3" required>

                        </div>
                        <img src="image/line1.png" alt="" height="20" width="350">
                        <div class="nowrap">
                            <label for="email"> <img src="image/email.png" alt="email" height="20" width="20">Email
                                Address:</label>
                            <input class="form-control input-md m-1 cart shadow-sm connect" type="email" name="email" id="email" placeholder="enter your email address" aria-describedby="emailHelp" placeholder="" data-parsley-type="email" required>
                        </div>
                        <img src="image/line1.png" alt="" height="20" width="350">
                        <div class="nowrap"> <label for="password"> <img src="image/password.png" alt="password" height="20" width="20">Password:</label>
                            <input class="form-control input-md m-1 cart shadow-sm connect" type="password" name="password" placeholder="enter the choosing password" id="password" aria-describedby="emailHelp" placeholder="" data-parsley-minlength="8" data-parsley-errors-container=".errorspannewpassinput" data-parsley-required-message="Please enter your new password." data-parsley-uppercase="1" data-parsley-lowercase="1" data-parsley-number="1" data-parsley-special="1" data-parsley-required>
                        </div>
                        <img src="image/line1.png" alt="" height="20" width="350">
                        <div class="nowrap"> <label for="Confirme"> <img src="image/comfirme.png" alt="confirme" height="20" width="20">Confirme Password:</label>
                            <input class="form-control input-md m-1 cart shadow-sm connect" type="password" name="Confirme" placeholder="re-enter your password to comfirme" id="Confirme" aria-describedby="emailHelp" placeholder="" data-parsley-minlength="8" data-parsley-errors-container=".errorspanconfirmnewpassinput" data-parsley-required-message="Please re-enter your new password." data-parsley-equalto="#password" data-parsley-required>
                        </div>
                        </br>
                        <div class="modal-footer modal_body" id="button">
                            <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
                            <button type="submit" name="save" id="registrate" class="btn button ">Valide</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>