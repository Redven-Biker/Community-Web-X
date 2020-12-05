<?php
    session_start();







    if (isset($_SESSION['id'])) {
        include('libs/header.php'); echo '
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-three">
                    <div class="widget-heading">
                        <div class="">
                            <h5 class="">CREATE PRODUCT</h5>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="widget-content widget-content-area">
                            <form action="add-product-post.php" method="post">
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Label</label>
                                    <input type="text" name="label_1" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="label_2" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="label_3" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="label_4" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="label_5" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="label_6" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="label_7" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="label_8" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <input type="text" name="label_9" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Label">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Price</label>
                                    <input type="text" name="price" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Price">
                                </div>

                                <input type="submit" name="time" class="mt-4 mb-4 btn btn-primary" value="Submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2020 <a target="_blank" href="http://xlife.fr/">XLife</a>, All
                rights reserved.</p>
        </div>
    </div>
</div>
<!--  END CONTENT PART  -->

</div>
';
} else {
header("Location: login.php");
}
?>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script>
$(document).ready(function() {
    App.init();
});
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="plugins/apex/apexcharts.min.js"></script>
<script src="assets/js/dashboard/dash_2.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

</body>

</html>