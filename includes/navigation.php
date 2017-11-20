<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <p class="float-right d-md-none ">
        <button type="button" class="btn btn-primary btn-sm toggless" data-toggle="offcanvas">Toggle nav</button>
    </p>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="menu mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>

            <?php
            $query = " SELECT * FROM categories";
            $select_all_category = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_assoc($select_all_category)){
            $cat_id = $row['cat_id'];
            $cat_name = $row['cat_name'];

            ?>
            <!--          <li class="nav-item">-->
            <!--            <a class="nav-link" href="#">Link</a>-->
            <!--          </li>-->
            <!--          <li class="nav-item">-->
            <!--            <a class="nav-link disabled" href="#">Disabled</a>-->
            <!--          </li>-->
            <li><a href="#s1"><?php echo $cat_name ?></a>
                  <ul class="submenu">
                    <?php
                    $query = " SELECT * FROM sub_categories WHERE cat_id = $cat_id ";
                    $select_all_sub_category = mysqli_query($connection,$query);

                    while ($row = mysqli_fetch_assoc($select_all_sub_category)){
                        $sub_cat_id = $row['sub_cat_id'];
                        $sub_cat_name = $row['sub_cat_name'];
                        ?>
                      <li><a href="#"><?php echo $sub_cat_name ?></a></li>
                      <?php } ?>
                  </ul>
              </li>
              <?php } ?>





        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
