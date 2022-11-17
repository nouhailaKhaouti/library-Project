var btn = document.getElementById("button");

const add_category = document.getElementById("add_category");
const form = document.getElementById("second");
add_category.innerHTML = `<button type="submit" class="btn button" onclick="createCategory()">Register</button>
`;

form.addEventListener("submit", savecategory);



function createCategory() {
  console.log("hiiii");
  // initialiser task form
  initTaskForm();
  // Afficher le boutton save
  btn.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="save" id="hide" class="btn high shadow-sm " >Save changes</button>`;
  // Ouvrir modal form
  $("#Modal").modal("show");
}


function savecategory() {
  $("#Modal").modal("hide");
  Swal.fire("Good job!", "You clicked the button!", "success");
  // initTaskForm();
}

function editCategory(id, label) {
  console.log(
    id +
      "  " +
label
  );
  document.getElementById("title").value = label;
  document.getElementById(
    "hidden"
  ).innerHTML = `<input type="hidden" name="id" value="${id}">`;
  // // Définir l’index en entrée cachée pour l’utiliser en Update et Delete
  // Definir FORM INPUTS
  btn.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="update" onClick="updateCategory()" id="update" class="btn high shadow-sm " >Update</button>`;
  // Ouvrir Modal form
  $("#Modal").modal("show");
}

function updateCategory() {
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


function deletement(id) {
  if (confirm("Are you sure you want to Delete?")) {
    window.location.href = "./php/delete.php?id=" + id;
  }
} 