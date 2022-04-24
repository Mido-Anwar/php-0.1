<?php
require('../../config.php');
require(BLA . '/inc/header.php');
?>
<?php
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $row = getrow('cites', 'city_id', $_GET['id']);
    if ($row) {
        $city_id = $row['city_id'];
    } else {
        // header("location:".BUA.'login.php');
        //   warnnig:Cannot modify header information - headers already sent by (output started at C:\xampp\htdocs\
        /*
       This line at the top is a problem that arises because the header(); solution is to write it this way.
         */
        echo ("<script>location.href = '" . BUA . "/index.php';</script>");
    }
} else {
    echo ("<script>location.href = '" . BUA . "/index.php';</script>");
}
?>
<div class="col-sm-6 offset-sm-3 border p-3">
    <h3 class="text-center p-3 bg-primary text-white">Edit City</h3>
    <form method="post" action="<?php echo BUA . 'cities/update.php'; ?>">
        <div class="form-group">
            <label>Name Of City</label>
            <input type="text" name="name" value="<?php echo $row['city_name']; ?>" class="form-control">
            <input type="hidden" value="<?php echo $city_id; ?>" name="city_id">
        </div>
        <button type="submit" name="submit" class="btn btn-success">Save</button>
    </form>
</div>
<?php
require(BLA . 'inc/footer.php');
?>