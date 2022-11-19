const userName = document.getElementById("Name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirme = document.getElementById("Confirme");
const register = document.getElementById("register");
const signIn = document.getElementById("signIn");
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
          <input class="form-control input-md m-1 cart shadow-sm" type="text" name="Name"
              id="Name" placeholder="enter your userName" required>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
      </div>
      <img src="image/line1.png" alt="" height="20" width="350">
      <div class="nowrap">
          <label for="email"> <img src="image/email.png" alt="email" height="20" width="20">Email
              Address:</label>
          <input class="form-control input-md m-1 cart shadow-sm" type="email" name="email"
              id="email" placeholder="enter your email address" required>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
      </div>
      <img src="image/line1.png" alt="" height="20" width="350">
      <div class="nowrap"> <label for="password"> <img src="image/password.png"
                  alt="password" height="20" width="20">Password:</label>
          <input class="form-control input-md m-1 cart shadow-sm" type="password" name="password"
              placeholder="enter the choosing password" id="password" required>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
      </div>
      <img src="image/line1.png" alt="" height="20" width="350">
      <div class="nowrap"> <label for="Confirme"> <img src="image/comfirme.png"
                  alt="confirme" height="20" width="20">Confirme Password:</label>
          <input class="form-control input-md m-1 cart shadow-sm" type="password" name="Confirme"
              placeholder="re-enter your password to comfirme" id="Confirme" required>
          <i class="fas fa-check-circle"></i>
          <i class="fas fa-exclamation-circle"></i>
          <small>Error message</small>
      </div>
      </br>
      <div class="modal-footer modal_body" id="button">
          <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
          <button type="submit" name="save" id="hide" class="btn button ">Valide</button>
      </div>
  </div>`;
  // Ouvrir modal form
  $("#Modal").modal("show");
}

// form validation
function CheckInput() {
  console.log("form");
  if (userName.value == "") {
    setErrorFor(userName, "your last name is required");
  } else if (userName.value.length < 3) {
    setErrorFor(
      userName,
      "your last name need to be composed of more then 3 caracters"
    );
  } else {
    setSuccessFor(userName);
  }
  if (email.value === "") {
    setErrorFor(email, "email required");
  } else if (!email.validity.valid) {
    setErrorFor(
      email,
      "invalide forma of email here s an exemple :exemple@exemple.com"
    );
  } else {
    setSuccessFor(email);
  }
  if (password.value === "") {
    setErrorFor(password, "a password is required to finish your submition");
  } else if (password.value.length < 8) {
    setErrorFor(
      password,
      "your password need to be composed of more then 8 caracters"
    );
  } else {
    setSuccessFor(password);
  }
  if (confirme.value === "") {
    setErrorFor(confirme, "you need to confire your password");
  } else if (password.value !== confirme.value) {
    setErrorFor(confirme, "Passwords does not match");
  } else {
    setSuccessFor(confirme);
  }
}

function setErrorFor(input, message) {
  console.log("error");
  const formControl = input.parentElement;
  const small = formControl.querySelector("small");
  formControl.className = "nowrap error";
  small.innerText = message;
}

function setSuccessFor(input) {
  console.log("success");
  const formControl = input.parentElement;
  formControl.className = "nowrap success";
}

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

function saveTask() {
  $("#Modal").modal("hide");
  Swal.fire("Good job!", "You clicked the button!", "success");
  // initTaskForm();
}

function editTask(id, title, date, description, priority, type, status) {
  console.log(
    id +
      "  " +
      title +
      "  " +
      date +
      "  " +
      description +
      "   " +
      priority +
      "   " +
      type +
      "   " +
      status
  );
  document.getElementById("title").value = title;
  if (type === "2") {
    document.getElementById("bug").checked = true;
  } else {
    document.getElementById("feature").checked = true;
  }
  document.getElementById("priority").value = priority;
  document.getElementById("status").value = status;
  document.getElementById("date").value = date;
  document.getElementById("description").value = description;
  document.getElementById(
    "hidden"
  ).innerHTML = `<input type="hidden" name="id" value="${id}">`;
  // // Définir l’index en entrée cachée pour l’utiliser en Update et Delete
  // Definir FORM INPUTS
  btn.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="update" onClick="updateTask()" id="update" class="btn high shadow-sm " >Update</button>`;
  // Ouvrir Modal form
  $("#Modal").modal("show");
}

function updateTask() {
  // Fermer Modal form
  $("#Modal").modal("hide");
  Swal.fire("Good job!", "You clicked the button!", "success");
  // Refresh tasks
  // afficher();
}

function initTaskForm() {
  // Clear task form from data
  document.forms[0].reset();
  // Hide all action buttons
}


function deleteMulti() {
  let array = [];
  for (i = 0; i < ele.length; i++) {
    if (ele[i].checked) {
      array.push(ele.getAttribut("task_id"));
    }
  }

  if (confirm("Are you sure you want to Delete?")) {
    let path = "./php/deleteMulti.php?id=" + id;
    for (i = 1; i <= array.length; i++) {
      path = path + "id" + i + "=" + array[i];
    }
    window.location.href = path;
  }
}

function deletement(id) {
  if (confirm("Are you sure you want to Delete?")) {
    window.location.href = "./php/delete.php?id=" + id;
  }
} 


