    <div class="row d-flex justify-content-center align-items-center h-100 d-none" name="pages" id="profile">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted"><?=$_SESSION['email']?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>User Name</h6>
                    <p class="text-muted"><?=$_SESSION['user_name']?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Role</h6>
                    <p class="text-muted"><?php if($_SESSION['role']==0):?>
                        Admin
                        <?php elseif($_SESSION['role']==1):?>
                        Normale User
                        <?php endif?>
                    </p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Modify</h6>
                    <button class="text-decoration-none btn button" onclick="editProfile(`<?=$_SESSION['user_name']?>`,`<?=$_SESSION['email']?>`)">UpDate</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<script>

function editProfile(name, email) {
   console.log("hiiii");
  document.getElementById("Name").value = name;
  document.getElementById("email").value = email;
  // // Définir l’index en entrée cachée pour l’utiliser en Update et Delete
  // Definir FORM INPUTS
  // Ouvrir Modal form
  $("#ModalProfile").modal("show");
}

</script>