var btn1 = document.getElementById("book_crud");
const add_book = document.getElementById("add_book");
const form1 = document.getElementById("third");
form1.addEventListener("submit", saveBook);

function createBook() {
  console.log("hiiii");
  // initialiser task form
  initTaskForm();
  // Afficher le boutton save
  document.getElementById(
    "img"
  ).innerHTML = ``;
  document.getElementById(
    "hidden"
  ).innerHTML = ``;
  document.getElementById(
    "hidden_img"
  ).innerHTML = ``;
  btn1.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="save_book" id="hide" class="btn high shadow-sm " >Save changes</button>`;
  // Ouvrir modal form
  $("#ModalBook").modal("show");
}


function saveBook() {
  $("#ModalBook").modal("hide");
  Swal.fire("Good job!", "You clicked the button!", "success");
  // initTaskForm();
}

function editBook(id, title, date, description, autor, category, isbi,image,page) {
  console.log(
    id +
      "  " +
      title +
      "  " +
      date +
      "  " +
      description +
      "   " +
      autor +
      "   " +
      category +
      "   " +
      isbi+
      "   " +
      image+
      "   " +
      page
  );
  document.getElementById("title").value = title;
  document.getElementById("autor").value = autor;
  document.getElementById("date").value = date;
  document.getElementById("page").value = page;
  document.getElementById("isbi").value = isbi;
  document.getElementById("description").value = description;
  document.getElementById(
    "hidden"
  ).innerHTML = `<input type="hidden" name="book_id" value="${id}">`;
  document.getElementById(
    "hidden_img"
  ).innerHTML = `<input type="hidden" name="img" value="${image}">`;
  document.getElementById(
    "img"
  ).innerHTML = `<img src="${image}" height="200" width="130">`;
  // // Définir l’index en entrée cachée pour l’utiliser en Update et Delete
  // Definir FORM INPUTS
  btn1.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="update_book" id="update" class="btn high shadow-sm " >Update</button>`;
  // Ouvrir Modal form
  $("#ModalBook").modal("show");
}

function updateBook() {
  // Fermer Modal form
  $("#ModalBook").modal("hide");
  Swal.fire("Good job!", "You clicked the button!", "success");
  // Refresh tasks
  // afficher();
}

function deleteBook(id) {
  if (confirm("Are you sure you want to Delete?")) {
    window.location.href = "./php/user.php?book_id=" + id;
  }
} 