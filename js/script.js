const register=document.getElementById("register");
const signIn=document.getElementById("signIn");
signIn.innerHTML = `<button type="submit" class="btn button" onclick="SignIn()">Sign In</button>
`;
register.innerHTML = `<button type="submit" class="btn button" onclick="LogUp()">Register</button>
`;

function deleteMulti(){
    let array=[];
  for (i = 0; i < ele.length; i++) {
    if (ele[i].checked) {
        array.push(ele.getAttribut("task_id"));
    }
  }

  if(confirm("Are you sure you want to Delete?")){
    let path='./php/deleteMulti.php?id='+id;
    for(i=1;i<=array.length;i++){
    path=path+'id'+i+'='+array[i];
    } 
    window.location.href=path;
  }
}

function deletement(id){
  if(confirm("Are you sure you want to Delete?")){
       window.location.href='./php/delete.php?id='+id;
  }
}

function LogUp() {
    console.log("hiiii");
  // initialiser task form
  initTaskForm();
  // Afficher le boutton save
  document.getElementById("ModalLabel").innerHTML=`register`;
  document.getElementById("first").innerHTML=`
  <img src="image/4.png" alt="4" height="400" width="400">
  <div class="fw-bold">
      <img src="image/user.png" alt="user" height="20" width="20"> User
          Name: &nbsp; &nbsp;
      <input class="form-control input-md m-1 cart shadow-sm" type="text" name="Name" id="Name" placeholder="enter your userName"
          required>
          <img src="image/line1.png" alt="" height="20" width="350">
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
      <img src="image/line1.png" alt="" height="20" width="350">
      <div class="nowrap">
      <label for="Comfirme"> <img src="image/comfirme.png" alt="comfirme" height="20"
              width="20">Comfirme Password:</label>
      <input class="form-control input-md m-1 cart shadow-sm" type="password" name="Comfirme" placeholder="re-enter your password to comfirme"
          id="Comfirme" required>
      </div>
      </br>
      <div class="modal-footer modal_body" id="button">
          <button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
          <button type="submit" name="creatAccount" id="hide" class="btn button ">Valide</button>
      </div>
  </div>`;
  // Ouvrir modal form
  $("#Modal").modal("show");
}

function SignIn(){
  console.log("hiiii");
  initTaskForm();
  document.getElementById("ModalLabel").innerHTML=`Sign In`;
  document.getElementById("first").innerHTML=`
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

function editTask(id,title,date,description,priority,type,status) {

  console.log(id+"  "+title+"  "+date+"  "+description+"   "+priority+"   "+type+"   "+status);
  document.getElementById("title").value = title;
  if ( type=== "2") {
    document.getElementById("bug").checked = true;
  } else {
    document.getElementById("feature").checked = true;
  }
  document.getElementById("priority").value = priority;
  document.getElementById("status").value =status;
  document.getElementById("date").value = date;
  document.getElementById("description").value = description;
  document.getElementById("hidden").innerHTML=`<input type="hidden" name="id" value="${id}">`;
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
