<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Form</title>
</head>
<body>
    <h1>Personal Information</h1>
    <?php if(session('success')): ?>
        <p style="color: green;"><?php echo e(session('success')); ?></p>
    <?php endif; ?>
    <form action="<?php echo e(url('/personal-info')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label>First Name:</label>
        <input type="text" name="first_name" required maxlength="50"><br>

        <label>Last Name:</label>
        <input type="text" name="last_name" required maxlength="50"><br>

        <label>Sex:</label>
        <input type="radio" name="sex" value="Male" required> Male
        <input type="radio" name="sex" value="Female"> Female<br>

        <label>Mobile Phone:</label>
        <input type="text" name="mobile_phone" required pattern="09[0-9]{9}"><br>

        <label>Tel No.:</label>
        <input type="text" name="tel_no"><br>

        <label>Birth Date:</label>
        <input type="date" name="birth_date" required><br>

        <label>Address:</label>
        <input type="text" name="address" required><br>

        <label>Email:</label>
        <input type="email" name="email" required maxlength="100"><br>

        <label>Website:</label>
        <input type="url" name="website"><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
<?php /**PATH C:\Users\acer user\PersonalInformation\resources\views/personal-info/create.blade.php ENDPATH**/ ?>