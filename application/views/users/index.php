<h2>User List</h2>
<a href="<?= base_url('create-user') ?>">Add User</a>
<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>
<?php $n = 1; ?>
<?php foreach($users as $u): ?>
<tr>
    <td><?= $n++ ?></td>
    <td><?= $u->name ?></td>
    <td><?= $u->email ?></td>
    <td>
        <a href="<?= base_url('users/edit/'.$u->id) ?>">Edit</a> |
        <a href="<?= base_url('users/delete/'.$u->id) ?>" onclick="return confirm('Are you sure to delete the record?')">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
