var btn3 = document.getElementById("library_crud");

const add_library = document.getElementById("add_library");

document.getElementById("fourth").addEventListener("submit", savelibrary);


function createLibrary() {
    
  console.log("is in library");

  console.log(btn3);
  // initialiser task form

    //   initTaskForm();

  // Afficher le boutton save
  btn3.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="save" id="hide" class="btn high shadow-sm " >Save changes</button>`;
  // Ouvrir modal form
  $("#ModalCategory").modal("show");
}


function savecategory() {
  $("#ModalCategory").modal("hide");
  Swal.fire("Good job!", "You clicked the button!", "success");
  // initTaskForm();
}

function editCategory(id, label) {
  console.log(
    id +
      "  " +
    label
  );

  document.getElementById("label").value = label;
  document.getElementById(
    "hidden"
  ).innerHTML = `<input type="hidden" name="id" value="${id}">`;
  // // Définir l’index en entrée cachée pour l’utiliser en Update et Delete
  // Definir FORM INPUTS
  btn2.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="update" onClick="updateCategory()" id="update" class="btn high shadow-sm " >Update</button>`;
  // Ouvrir Modal form
  $("#ModalCategory").modal("show");
}

function updateCategory() {
  // Fermer Modal form
  $("#ModalCategory").modal("hide");
  Swal.fire("Good job!", "You clicked the button!", "success");
  // Refresh tasks
  // afficher();
}

function deleteCat(id) {
  if (confirm("Are you sure you want to Delete?")) {
    window.location.href = "./php/user.php?id=" + id;
  }
} 