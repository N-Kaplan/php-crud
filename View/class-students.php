<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class='main'>
    <section class="header">
        <h1>This is the class with students page.</h1>
        <h3>Here we have the list of students in a certain class</h3>

        <p><a href="index.php?page=homepage">To homepage</a></p>
    </section>
    <section class="data-list">
        <table class="main-table">
            <thead>
                <tr>
                    <th style='display:none;'>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Teacher</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </section>

</section>
<?php require 'includes/footer.php' ?>