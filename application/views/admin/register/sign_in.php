<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo base_url('admin/register/store') ?>">
        <table>
            <tr>
                <td>邮箱:</td><td><?php echo form_input('email', set_value('email')) ?></td><td><?php echo form_error('email') ?></td>
            </tr>
            <tr>
                <td>密码:</td><td><?php echo form_password('password') ?></td><td><?php echo form_error('password') ?></td>
            </tr>
            <tr>
                <td>确认密码:</td><td><?php echo form_password('passconf') ?></td><td><?php echo form_error('passconf') ?></td>
            </tr>
            <tr>
                <td><?php echo form_submit('', '注册') ?></td>
            </tr>
        </table>
    </form>
</body>
</html>
