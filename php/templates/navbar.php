<nav class="nav-wrapper bg-white">

    <ul>
        <li><a class="a-index fas" href="?f=home&lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['navbar-home'] ?></a></li>
        <li><a class="a-index fas" href="?f=clips&lang=<?php echo $_SESSION['lang'] ?>"><?php echo $lang['navbar-clips'] ?></a></li>
        <?php
    if ( $_SESSION['lang'] == "de" ) {
        echo '<li>
                        <a class="a-index fas"><img src="img/lang/de_flagge.png" /></a>

                        <ul>
                            <li><a class="a-index fas" href="?';

        if (isset($_GET['f'])) {
            echo 'f=' . $_GET['f'] . '&';
        } else
            echo 'f=home&';

        echo 'lang=en"><img src="img/lang/en_flagge.svg.png" /></a></li>
        <li><a class="a-index fas" href="?';

        if (isset($_GET['f'])) {
            echo 'f=' . $_GET['f'] . '&';
        } else
            echo 'f=home&';

        echo 'lang=ru"><img src="img/lang/ru_flagge.jpg" /></a></li>
                        </ul>
                    </li>';
    } else if ( $_SESSION['lang'] == "en" ) {
        echo '<li>
                        <a class="a-index fas"><img src="img/lang/en_flagge.svg.png" /></a>

                        <ul>
                            <li><a class="a-index fas" href="?';

        if (isset($_GET['f'])) {
            echo 'f=' . $_GET['f'] . '&';
        } else
            echo 'f=home&';

        echo 'lang=de"><img src="img/lang/de_flagge.png" /></a></li>
        <li><a class="a-index fas" href="?';

        if (isset($_GET['f'])) {
            echo 'f=' . $_GET['f'] . '&';
        } else
            echo 'f=home&';

        echo 'lang=ru"><img src="img/lang/ru_flagge.jpg" /></a></li>
                        </ul>
                    </li>';
    }
            else if ( $_SESSION['lang'] == "ru" ) {
                echo '<li>
                        <a class="a-index fas"><img src="img/lang/ru_flagge.jpg" /></a>

                        <ul>
                            <li><a class="a-index fas" href="?';

                if (isset($_GET['f'])) {
                    echo 'f=' . $_GET['f'] . '&';
                } else
                    echo 'f=home&';

                echo 'lang=de"><img src="img/lang/de_flagge.png" /></a></li>
                <li><a class="a-index fas" href="?';

                if (isset($_GET['f'])) {
                    echo 'f=' . $_GET['f'] . '&';
                } else
                    echo 'f=home&';

                echo 'lang=en"><img src="img/lang/en_flagge.svg.png" /></a></li>
                        </ul>
                    </li>';
            }
        ?>
    </ul>

</nav>
