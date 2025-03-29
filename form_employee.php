<?php include "inc/header.php"; ?>

<h2>Employee Form</h2>
<form action="handelers/create_employee.php" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email:</label>
        <input type="text" id="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label for="salary" class="form-label">Salary:</label>
        <input type="number" id="salary" name="salary" class="form-control">
    </div>

    <div class="mb-3">
        <label for="phone" class="form-label">Phone:</label>
        <input type="text" id="phone" name="phone" class="form-control">
    </div>

    <div class="mb-3">
        <label for="type" class="form-label">Employee Type:</label>
        <select name="type" id="type" class="form-select">
            <option value="full_time">Full Time</option>
            <option value="part_time">Part Time</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php include "inc/footer.php"; ?>