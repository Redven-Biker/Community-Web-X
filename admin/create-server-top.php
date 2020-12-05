<?php include('libs/header.php'); ?>

<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-three">
                    <div class="widget-heading">
                        <div class="">
                            <h5 class="">CREATE SERVER TOP</h5>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="widget-content widget-content-area">
                            <form action="add-servers-top-post.php" method="post">
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlInput2">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Name">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">IP Adress</label>
                                    <input type="text" name="ip" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter IP Adress">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Port</label>
                                    <input type="text" name="port" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter Port">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Logo</label>
                                    <input type="text" name="logo" class="form-control" id="exampleFormControlInput2"
                                        placeholder="Enter URL">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Max Players</label>
                                    <input type="text" name="max_players" class="form-control"
                                        id="exampleFormControlInput2" placeholder="Enter Max Players">
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