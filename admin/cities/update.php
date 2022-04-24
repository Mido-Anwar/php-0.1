<?php
require_once('../../config.php');
require(BLA . '/inc/header.php');
require BL . '/function/validate.php';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $city_id = $_POST['city_id'];

    if (checkempty($name) && checkless($name, 3)) {
        $row = getrow('cites', 'city_id', $city_id);
        if ($row) {
            $sql = "UPDATE  cites  SET `city_name` = '$name' WHERE `city_id`  = '$city_id' ";
            $success_message = db_update($sql);
            echo ("<script>location.href =".BLA.'cities/'."</script>");
        } else {
            $error_message = "please type correct data";
        }
        $success_message = db_update($sql);
    } else {
        $error_message = "please fill all filds";
    }
    require BL . 'function/messages.php';
}

require(BLA . 'inc/footer.php');
