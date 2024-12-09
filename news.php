<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>News</title>
        <link rel="icon" href="images/favicon.png" type="image/x-icon">
        <link rel="stylesheet" href="style/style.css">
    </head>
<body>
    <main>
        <?php include 'header.php'; ?>
        <div class="news-container">
        <h1>NEWS</h1>
        <?php

        // Параметры API
        $app_id = 1943950; // AppID игры
        $count = 5; // Количество новостей
        $api_url = "https://api.steampowered.com/ISteamNews/GetNewsForApp/v2/?appid=$app_id&count=$count";


        function formatSteamContent($content) {
            // Обработка изображений
            $content = preg_replace(
                "/\[img\]\{STEAM_CLAN_IMAGE\}\/(.*?)\[\/img\]/i",
                '<img src="https://clan.cloudflare.steamstatic.com/images/$1" alt="Steam Image">',
                $content
            );
        
            // Преобразования текста
            $content = preg_replace("/\[b\](.*?)\[\/b\]/i", "<strong>$1</strong>", $content);
            $content = preg_replace("/\[i\](.*?)\[\/i\]/i", "<em>$1</em>", $content);
            $content = preg_replace("/\[u\](.*?)\[\/u\]/i", "<u>$1</u>", $content);
            $content = preg_replace("/\[url\](.*?)\[\/url\]/i", "$1", $content);
        
            return $content;
        }

        function parseBBCodeList($content) {
            // Преобразование списков
            $content = str_replace("[list]", "<ul>", $content);
            $content = str_replace("[/list]", "</ul>", $content);
            $content = str_replace("[*]", "<li>", $content);
            $content = preg_replace("~<li>(.*?)<li>~s", "<li>$1</li><li>", $content);
            $content = preg_replace("~<li>([^<]*?)</ul>~s", "<li>$1</li></ul>", $content);
        
            return $content;
        }

        // Получение данных через cURL
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Декодирование JSON
        $data = json_decode($response, true);

        // Вывод новостей
        if (isset($data['appnews']['newsitems'])) {
            foreach ($data['appnews']['newsitems'] as $news) {
                echo "<div class='news-item'>";
                echo "<h3>" . htmlspecialchars($news['title']) . "</h3>";
                echo "<p>" . parseBBCodeList(formatSteamContent($news['contents'])) . "</p>";
                echo "<a href='" . htmlspecialchars($news['url']) . "' target='_blank'>Read more</a>";
                echo "</div>";
            }
        } else {
            echo "<p>Нет доступных новостей.</p>";
        }
        ?>
    </div>
    <img class="full-page-background-image" src="images/background-image-4.png">
    </main>
    <footer> <?php include 'footer.php'; ?> </footer>
</body>
</html>
