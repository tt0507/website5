<header>
    <div id = "around">
        <div id="title"><p><?php echo $title;?> - Sports at Cornell</p></div>

        <nav id = "nav">
            <ul>
                <li><a href="index.php" <?php if ($title == "Home") {
                                            echo 'id = "box"';
                                        } ?>>Home</a></li>
                <li><a href="sport.php" <?php if ($title == "Sport") {
                                            echo 'id = "box"';
                                        } ?>>Sport</a></li>
                <li><a href="gear.php" <?php if ($title == "Gear") {
                                                echo 'id = "box"';
                                            } ?>>Gear</a></li>
                <li><a href="form.php" <?php if ($title == "Form") {
                                                echo 'id = "box"';
                                            } ?>>Form</a></li>
            </ul>
        </nav>
    </div>
  </header>
