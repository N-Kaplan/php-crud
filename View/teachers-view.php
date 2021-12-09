<?php require 'includes/header.php' ?>

<section class="main">
    <section class="header">
        <p><a href="index.php">Back to Homepage</a></p>
        <h4>Teachers:</h4>
    <section>
    <section class="data-list">
        <table class="main-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Student List</th>
                    <th>Details</th>
                </tr>
                </thead>
            <tbody>
                    <?php
                    foreach ($teachersArr as $teacher) {
                        echo "<tr>
                                <td> {$teacher['id']} </td>
                                <td> {$teacher['name']} </td>
                                <td> {$teacher['email']} </td>
                                <td><a href=\"index.php?page=teacher-students&id={$teacher['id']}\">Students</td>
                                <td><a href=\"index.php?page=teacher-edit&id={$teacher['id']}\">Details</td>
                              </tr>";
                    }
                    ?>
            </tbody>
        </table>
    </section>
    <section>
        <h4>Add a new teacher:</h4>
        <form method="post" action="">
            <label for="teacher-name">Name: </label>
            <input type="text" name="teacher-name" placeholder="Name" pattern="(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)" required>
            <label for="teacher-email">Email: </label>
            <input type="email" name="teacher-email" placeholder="email" required>
            <button type="submit" name="add" value="add">Add</button>
        </form>
    </section>
</section>

