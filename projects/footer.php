<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4  col-md-4 col-sm-4">
                <div class="footer_dv">
                    <h4>สถานศึกษา</h4>
                    <ul>
                        <?php
                        $query = "SELECT * FROM  nearby_places WHERE ne_main='สถานศึกษา'";
                        $result = mysql_query($query, $link);
                        while ($row = mysql_fetch_array($result)) {
                            ?>
                            <li><a href="#"><?=$row["ne_name"]?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">
                <div class="footer_dv">
                    <h4>โรงพยาบาล</h4>
                    <ul>
                        <?php
                        $query = "SELECT * FROM  nearby_places WHERE ne_main='โรงพยาบาล'";
                        $result = mysql_query($query, $link);
                        while ($row = mysql_fetch_array($result)) {
                            ?>
                            <li><a href="#"><?=$row["ne_name"]?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4  col-md-4 col-sm-4">
                <div class="footer_dv">
                    <h4>สถานที่เด่น</h4>
                    <ul>
                        <?php
                        $query = "SELECT * FROM  nearby_places WHERE ne_main='สถานที่เด่น'";
                        $result = mysql_query($query, $link);
                        while ($row = mysql_fetch_array($result)) {
                            ?>
                            <li><a href="#"><?=$row["ne_name"]?></a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div><br>
            </div>
            <div class="col-lg-12  col-md-12 col-sm-12">
                <div class="footer_dv">
                    <p class=" text-center">Developed by Students of the Faculty of Science and Technology in Tapee University</p>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>