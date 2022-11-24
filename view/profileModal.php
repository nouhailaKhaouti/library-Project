<div class="modal fade" id="ModalProfile" tabindex="-1" aria-labelledby="ModalProfileLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header head text-center">
                <h5 class="modal-title" id="ModalProfileLabel">Update Your Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body modal_body ">
                <form action="./php/user.php" method="POST" id="third" class="d-flex justify-content-between pe-5">
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
                        <div class="nowrap">
                            <label for="password">
                                <img src="image/password.png" alt="password" height="20" width="20"> Current Password:</label>
                            <input class="form-control input-md m-1 cart shadow-sm" type="password" name="oldpassword" placeholder="enter the old password" id="newpassword" required>
                        </div>
                        <img src="image/line1.png" alt="" height="20" width="350">
                        <div class="nowrap"> <label for="password">
                                <img src="image/password.png" alt="password" height="20" width="20"> New Password:</label>
                            <input class="form-control input-md m-1 cart shadow-sm" type="password" name="newpassword" placeholder="enter the choosing password" id="newpassword" aria-describedby="emailHelp" placeholder="" data-parsley-minlength="8" data-parsley-errors-container=".errorspannewpassinput" data-parsley-required-message="Please enter your new password." data-parsley-uppercase="1" data-parsley-lowercase="1" data-parsley-number="1" data-parsley-special="1" data-parsley-required>
                        </div>
                        <img src="image/line1.png" alt="" height="20" width="350">
                        <div class="nowrap"> <label for="Confirme">
                                <img src="image/comfirme.png" alt="confirme" height="20" width="20">Confirme Password:</label>
                            <input class="form-control input-md m-1 cart shadow-sm" type="password" name="Confirme" placeholder="re-enter your password to comfirme" id="Confirme" aria-describedby="emailHelp" placeholder="" data-parsley-minlength="8" data-parsley-errors-container=".errorspanconfirmnewpassinput" data-parsley-required-message="Please re-enter your new password." data-parsley-equalto="#password" data-parsley-required>
                        </div>
                        </br>
                        <div class="modal-footer modal_body" id="button">
                            <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
                            <button type="submit" name="updateProfile" id="hide" class="btn button ">Valide</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>