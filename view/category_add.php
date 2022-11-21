<div id="categories" name="pages" class="mt-5 d-none" >
    <div id="add_category">
        <button class="btn button" type="submit" onclick="createCategory()"> Add Category</button>
    </div>
    <table class="table mt-5">
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
