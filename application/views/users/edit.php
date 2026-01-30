<h2>Edit User</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?= $user->name ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $user->email ?>" required><br><br>
    <button type="submit">Update</button>
</form>
