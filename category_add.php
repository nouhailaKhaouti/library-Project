
<?php

include 'view/header.php';

?>
<div class="row flex-nowrap">
    <?php include './view/sideNave.php' ?>
<div class="d_none" id="categories">
            <div id="add_category">
                <button class="btn button" type="submit" onclick="createCategory()"> Add Category</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">label</th>
                        <th scope="col">update</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    displayCategorys();
                    ?>

                </tbody>
            </table>

        </div>
    </div>
    <?php
include 'view/footer.php';

?>