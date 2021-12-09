<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class='main'>
    <section class="header">
        <h1>This is the class with students page.</h1>
        <h3>Here we have the list of students in a certain class</h3>
    </section>

    <section class="data-list">
        <table class="main-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                    echo
                    "
                    <table class='table'>
                    <tbody id='tbody'>
                        <tr>
                        
                            <td>{$student['name']}</td>
                            <td>{$student['email']}</td>
        
                        </tr>
                     </table>
                    
                    ";
                }
                ?>
            </tbody>
        </table>
    </section>

</section>
<?php require 'includes/footer.php' ?>