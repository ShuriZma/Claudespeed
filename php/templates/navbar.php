<nav class="nav-wrapper bg-white">

    <ul>
        <li><a href="?f=home&lang=<?php echo $_SESSION['lang'] ?>"><span  class="a-index fas"></span><?php echo $navbar_lang['navbar-home'] ?></a></li>
        <li><a href="?f=clips&lang=<?php echo $_SESSION['lang'] ?>"><span  class="a-index fas"></span><?php echo $navbar_lang['navbar-clips'] ?></a></li>
        <li>
            <a><span class="a-index fas"></span><?php echo $navbar_lang['navbar-font'] ?></a>
            <ul>
                <select id="selecth1FontFamily">
                    <option value="Comic Sans MS">Comic Sans MS</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Arial">Arial</option>
                    <option value="Arial Black">Arial Black</option>
                    <option value="Impact">Impact</option>
                    <option value="Lucida Sans Unicode">Lucida Sans Unicode</option>
                    <option value="Tahoma">Tahoma</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Courier New">Courier New</option>
                    <option value="Lucida Console">Lucida Console</option>
                    <option value="PT Sans">PT Sans</option>>
                </select>

                <script>
                    var selector = document.getElementById('selecth1FontFamily');
                    var asd = document.getElementById('edit');

                    if (localStorage.length != 0) {
                        asd.style.fontFamily = localStorage.font;
                        asd.value = localStorage.font;
                    } else {
                        localStorage.setItem('font', '');
                    }


                    selector.onchange = function() {
                        var family = this.value;
                        asd.style.fontFamily = family;
                        localStorage.font = family;
                    }

                </script>
            </ul>
        </li>
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
