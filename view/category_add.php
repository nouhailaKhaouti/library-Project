<div id="categories" name="pages" class="mt-5 d-none col-9 ms-5" >
    <div id="add_category">
        <button class="btn button" type="submit" onclick="createCategory()"> Add Category</button>
    </div>
    <div class="table-responsive">
    <table class="table mt-5 ms-4  ">
        <thead class="head">
            <tr>
                <th scope="col">#</th>
                <th scope="col">label</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
            </tr>
        </thead>
        <tbody class="section-1">
            <?php
            displayCategorys();
            ?>
        </tbody>
    </table>
    </div>
</div>
