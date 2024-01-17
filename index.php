<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar</title>
    <link rel="stylesheet" href="css/style.css">
   
    <link href="Assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Add Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
    $activeLink = isset($_GET['activeLink']) ? $_GET['activeLink'] : 8;

    function renderLink($linkText, $path, $index, $subMenuItems = []) {
        global $activeLink;
        $class = ($activeLink == $index) ? 'sidebar-link active' : 'sidebar-link';

        echo "<li class=\"nav-item\">";

        if (!empty($subMenuItems)) {
            echo "<li class=\"nav-item dropdown\">";
            echo "<a href=\"#\" class=\"nav-link dropdown-toggle $class\" data-bs-toggle=\"dropdown\">$linkText <i class=\"bi bi-chevron-down dropdown-indicator\"></i></a>";
            echo "<ul class=\"dropdown-menu\">";
            foreach ($subMenuItems as $subItem) {
                echo "<li>";
                echo "<a href=\"{$subItem['path']}\" class=\"dropdown-item\">{$subItem['text']}</a>";
                echo "</li>";
            }
            echo "</ul>";
            echo "</li>";
        } else {
            echo "<a href=\"$path?activeLink=$index\" class=\"$class\">$linkText</a>";
        }

        echo "</li>";
    }
?>
    <header id="header">
        <div class="d-flex flex-column">
            <div class="profile">
                
                <h1 class="text-light mt-5"><a href="index.php">Dagoretti Delight</a></h1>
                <nav id="navbar" class="nav-menu navbar">
                    <ul>
                        <?php
                        renderLink('DAGORETTI SOUTH NEWS', 'index.php', 1, [
                            ['text' => 'Ngando News', 'path' => 'submenu1.php'],
                            ['text' => 'Riruta News', 'path' => 'submenu2.php'],
                            ['text' => 'Waithaka News', 'path' => 'submenu1.php'],
                            ['text' => 'Uthiru/Ruthimitu News', 'path' => 'submenu2.php'],
                            ['text' => 'Mutuini News', 'path' => 'submenu1.php'],

                        ]);
                        renderLink('SUB COUNTY GOVERNMENT FORUM', 'goverment.php', 2, [
                            ['text' => 'Office Of The Subcounty Comissioner ', 'path' => 'submenu1.php'],
                            ['text' => 'Department Of Works Roads And Housing', 'path' => 'submenu2.php'],
                            ['text' => 'Department Of Agriculture', 'path' => 'submenu1.php'],
                            ['text' => 'Childrens Department', 'path' => 'submenu2.php'],
                            ['text' => 'Labour Officer Dagoretti', 'path' => 'submenu1.php'],
                            ['text' => 'Depatment Of Health', 'path' => 'submenu1.php'],
                            ['text' => 'Department Of Education', 'path' => 'submenu2.php'],

                        ]);
                        renderLink('DAGORETTI COMMUNITY', 'community.php', 3, [
                            ['text' => "CBO'S ", 'path' => 'submenu1.php'],
                            ['text' => 'Chamas', 'path' => 'submenu2.php'],
                            ['text' => 'Dagoretti Mulembe', 'path' => 'submenu1.php'],
                            ['text' => 'Abagusi Dagaoreti', 'path' => 'submenu2.php'],
                            ['text' => 'Rwanda bundi Community', 'path' => 'submenu1.php'],
                            ['text' => 'Congolese Dagoreti', 'path' => 'submenu1.php'],
                            ['text' => 'Tz Dagoretti', 'path' => 'submenu2.php'],
                            ['text' => 'UG Dago', 'path' => 'submenu2.php'],
                            ['text' => 'Churches Mosques Dagoretti', 'path' => 'submenu2.php'],

                        ]);
                        renderLink('DAGORETTI ENTERTAINMENT', 'entertainment.php', 4, [
                            ['text' => 'Submenu 1', 'path' => 'submenu1.php'],
                            ['text' => 'Submenu 2', 'path' => 'submenu2.php'],
                        ]);
                        renderLink('DAGORETTI SPORTS', 'sports.php', 5, [
                            ['text' => 'Submenu 1', 'path' => 'submenu1.php'],
                            ['text' => 'Submenu 2', 'path' => 'submenu2.php'],
                        ]);
                        renderLink('DAGORETTI DIASPORA', 'diaspora.php', 6, [
                            ['text' => 'Submenu 1', 'path' => 'submenu1.php'],
                            ['text' => 'Submenu 2', 'path' => 'submenu2.php'],
                        ]);
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
</body>
</html>
