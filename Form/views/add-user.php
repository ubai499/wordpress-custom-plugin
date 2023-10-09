<?php
global $wpdb;
$msg = '';

if(!empty($_POST['btn_submit']))
{
    $wpdb->insert("wp_form_plugin_tbl",[
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "address" => $_POST['address'],

    ]);

    if($wpdb->insert_id > 0)
    {
        $msg = "";
    }
    else
    {
        $msg = "";
    }
}
?>

<p><?php echo $msg; ?></p>
<br>

<h1> Add User Form:</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>?page=form-add" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    <label for="name">Email</label>
    <input type="text" name="email" id="email">
    <label for="name">Address</label>
    <input type="text" name="address" id="address">
    <button name="btn_submit" type="submit">Submit</button>
</form>

