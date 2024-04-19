<?php
    function formatDate($date) {
        $day = date('j', strtotime($date));
        $month = date('F', strtotime($date));
        $year = date('Y', strtotime($date));

        if ($day >= 11 && $day <= 13) {
            $ordinalSuffix = 'th';
        } else {
            switch ($day % 10) {
                case 1:
                    $ordinalSuffix = 'st';
                    break;
                case 2:
                    $ordinalSuffix = 'nd';
                    break;
                case 3:
                    $ordinalSuffix = 'rd';
                    break;
                default:
                    $ordinalSuffix = 'th';
                    break;
            }
        }

        return "$day$ordinalSuffix $month $year";
    }

    function sortPosts($posts) {
        $n = count($posts);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                $dateTime1 = $posts[$j]['datePosted'] . ' ' . $posts[$j]['timePosted'];
                $dateTime2 = $posts[$j + 1]['datePosted'] . ' ' . $posts[$j + 1]['timePosted'];
                if ($dateTime1 < $dateTime2) {
                    $temp = $posts[$j];
                    $posts[$j] = $posts[$j + 1];
                    $posts[$j + 1] = $temp;
                }
            }
        }
        return $posts;
    }
?>