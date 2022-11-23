
$('first').parsley();

const userName = document.getElementById("Name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirme = document.getElementById("Confirme");
const register = document.getElementById("register");
const button_sign = document.getElementById("registrate");
const form = document.getElementById("first");
// data changed
//signIn.innerHTML = `<button type="submit" class="btn button" onclick="SignIn">Sign In</button>
//`;
// register.innerHTML = `<button type="submit" class="btn button" onclick="LogUp()">Register</button>
// `;

// form.addEventListener("submit", (e) => {
//   e.preventDefault();
//   CheckInput();
// });

function LogUp() {
  console.log("hiiii");
  // initialiser task form
  initTaskForm();
  // Afficher le boutton save
  document.getElementById("ModalLabel").innerHTML = `Register`;
  document.getElementById("first").innerHTML = `
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
                            </div>`;
  // Ouvrir modal form
  $("#Modal").modal("show");
}

// form validation

function SignIn() {
  console.log("hiiii");
  initTaskForm();
  document.getElementById("ModalLabel").innerHTML = `Sign In`;
  document.getElementById("first").innerHTML = `
                        <img src="image/4.png" alt="4" height="400" width="400">
                        <div class="fw-bold">
                        <br/>
                        <br/>
                        <br/>
                            <div class="nowrap">
                            <label for="email"> <img src="image/email.png" alt="email" height="20" width="20">Email
                                Address:</label>
                            <input class="form-control input-md m-1 cart shadow-sm" type="email" name="email" id="email" placeholder="enter your email address"
                                required>
                            </div>
                            <img src="image/line1.png" alt="" height="20" width="350">
                            <div class="nowrap">
                            <label for="password"> <img src="image/password.png" alt="password" height="20"
                                    width="20">Password:</label>
                            <input class="form-control input-md m-1 cart shadow-sm" type="password" name="password" placeholder="enter the choosing password"
                                id="password" required>
                            </div>
                            </br>
                            </br>
                            </br>
                            <div class="modal-footer modal_body" id="button">
                                <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
                                <button type="submit" name="connect" id="hide" class="btn button ">Valide</button>
                            </div>
                        </div>`;

  $("#Modal").modal("show");
}



function initTaskForm() {
  // Clear task form from data
  document.forms[0].reset();
  // Hide all action buttons
}

