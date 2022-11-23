var btn3 = document.getElementById("library_crud");

const add_library = document.getElementById("add_library");

document.getElementById("fourth").addEventListener("submit", savelibrary);

function createLibrary(id) {
    
  console.log("is in library");

  // initialiser task form

    //   initTaskForm();
document.getElementById(
      "hidden1"
    ).innerHTML = `<input type="hidden" name="book_id" value="${id}">`;
  console.log(document.getElementById(
    "hidden"
  ).innerHTML);
  // Afficher le boutton save
  btn3.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="save_library" id="hide" onclick="Library()" class="btn high shadow-sm " >Save changes</button>`;
  // Ouvrir modal form
  $("#ModalLibrary").modal("show");
  console.log("is in library");
}


function editLibrary(id, type) {
  console.log(
    id +
      "  " +
    type
  );

  document.getElementById("type").value = type;
  // // Définir l’index en entrée cachée pour l’utiliser en Update et Delete
  document.getElementById(
    "hidden1"
  ).innerHTML = `<input type="hidden" name="book_id" value="${id}">`;
  // Definir FORM INPUTS
  btn3.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="update_library" onclick="Library()" id="update" class="btn high shadow-sm " >Update</button>`;
  // Ouvrir Modal form
  $("#ModalLibrary").modal("show");
}

function Library() {
  // Fermer Modal form
  $("#ModalCategory").modal("hide");
  Swal.fire("Good job!", "You clicked the button!", "success");
  // Refresh tasks
  // afficher();
}

function deleteLibrary(id) {
  if (confirm("Are you sure you want to Delete?")) {
    window.location.href = "./php/user.php?library_id=" + id;
  }
} 