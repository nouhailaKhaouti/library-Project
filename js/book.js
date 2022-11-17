var btn1 = document.getElementById("book_crud");
const add_book = document.getElementById("add_book");
const form1 = document.getElementById("third");
add_book.innerHTML = `<button type="submit" class="btn button" onclick="createBook()">add_book</button>
`;

form1.addEventListener("submit", saveBook);


function createBook() {
  console.log("hiiii");
  // initialiser task form
  initTaskForm();
  // Afficher le boutton save
  btn1.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="save" id="hide" class="btn high shadow-sm " >Save changes</button>`;
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
  document.getElementById("image").value = image;
  document.getElementById("date").value = date;
  document.getElementById("page").value = page;
  document.getElementById("isbi").value = isbi;
  document.getElementById("description").value = description;
  document.getElementById(
    "hidden"
  ).innerHTML = `<input type="hidden" name="id" value="${id}">`;
  // // Définir l’index en entrée cachée pour l’utiliser en Update et Delete
  // Definir FORM INPUTS
  btn1.innerHTML = `<button type="button" class="btn bug shadow-sm" data-dismiss="modal">Close</button>
  <button type="submit" name="update" onClick="updateBook()" id="update" class="btn high shadow-sm " >Update</button>`;
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
    window.location.href = "./php/delete.php?id=" + id;
  }
} 