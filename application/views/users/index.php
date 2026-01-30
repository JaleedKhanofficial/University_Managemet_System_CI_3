<h2>User List</h2>
<a href="<?= base_url('users/create') ?>">Add User</a>
<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>
<?php foreach($users as $u): ?>
<tr>
    <td><?= $u->id ?></td>
    <td><?= $u->name ?></td>
    <td><?= $u->email ?></td>
    <td>
        <a href="<?= base_url('users/edit/'.$u->id) ?>">Edit</a> |
        <a href="<?= base_url('users/delete/'.$u->id) ?>" onclick="return confirm('Delete?')">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>
