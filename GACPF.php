<?php
TODO: Author: 'GORAlex Comp';

class GACPF
{
    function about($p = '')
    {
        $par = [
            'name' => ['GACPF'],
            '0' => ['GACPF'],
            'full_name' => ['GORAlex Comp PHP Function'],
            '1' => ['GORAlex Comp PHP Function'],
            'author' => ['GORAlex Comp'],
            '2' => ['GORAlex Comp'],
            'last_update_date' => ['12.04.2017 01:56'],
            '3' => ['12.04.2017 01:56'],
            'v' => ['1.0'],
            '4' => ['1.0']
        ];
        if ($p) {
            echo $res = $par[$p][0];
        } elseif ($p == '') {
            ?>
            <!doctype html>
            <html>
            <head>
                <meta charset="UTF-8">
            </head>
            <body>
            <div id="container">
                <h3>Name script: <?= $par['name'][0] ?></h3>
                <h3>Full name script: <?= $par['full_name'][0] ?></h3>
                <h3>Author script: <?= $par['author'][0] ?></h3>
                <h3>Last update date script: <?= $par['last_update_date'][0] ?></h3>
                <h3>Version script: <?= $par['v'][0] ?></h3>
            </div>
            </body>
            </html>
            <?
        }
    }

    function plus($p1 = '',$p2 = '',$p3 = '')
    {
        if ($p1 == '' and $p2 == '' and $p3 == '') {
            echo 'Заполните необходимые параметры функции!';
        } elseif ($p2 == '' and $p3 == '') {
            echo $p1;
        } elseif ($p3 == '') {
            echo $p1 + $p2;
        } elseif ($p3 == 'f') {
            echo $p1 . '  плюс ' . $p2 . ' равно ' . $summ = $p1 + $p2;
        } elseif ($p3 == 's') {
            echo "$p1 + $p2 =  " . $summ = $p1 + $p2;
        } elseif ($p3 == 't') {
            function ntsp($n)
            {
                $digits = array_reverse(str_split($n));
                $e = $d = $s = '';

                foreach ($digits as $key => $digit) {
                    if ($key == 0) {
                        $ed = $digit;
                        switch ($digit) {
                            case 0:
                                $e = 'ноль';
                                break;
                            case 1:
                                $e = 'один';
                                break;
                            case 2:
                                $e = 'два';
                                break;
                            case 3:
                                $e = 'три';
                                break;
                            case 4:
                                $e = 'четыре';
                                break;
                            case 5:
                                $e = 'пять';
                                break;
                            case 6:
                                $e = 'шесть';
                                break;
                            case 7:
                                $e = 'семь';
                                break;
                            case 8:
                                $e = 'восемь';
                                break;
                            case 9:
                                $e = 'девять';
                                break;
                        }
                    }
                    if ($key == 1) {
                        switch ($digit) {
                            case 0:
                                $d = '';
                                break;
                            case 1:
                                switch ($ed) {
                                    case 0:
                                        $d = 'десять';
                                        break;
                                    case 1:
                                        $d = 'одинадцать';
                                        break;
                                    case 2:
                                        $d = 'двенадцать';
                                        break;
                                    case 3:
                                        $d = 'тринадцать';
                                        break;
                                    case 4:
                                        $d = 'четырнадцать';
                                        break;
                                    case 5:
                                        $d = 'пятнадцать';
                                        break;
                                    case 6:
                                        $d = 'шестнадцать';
                                        break;
                                    case 7:
                                        $d = 'семнадцать';
                                        break;
                                    case 8:
                                        $d = 'восемнадцать';
                                        break;
                                    case 9:
                                        $d = 'девятнадцать';
                                        break;
                                }
                                $e = '';
                                break;
                            case 2:
                                $d = 'двадцать';
                                break;
                            case 3:
                                $d = 'тридцать';
                                break;
                            case 4:
                                $d = 'сорок';
                                break;
                            case 5:
                                $d = 'пятьдесят';
                                break;
                            case 6:
                                $d = 'шестьдесят';
                                break;
                            case 7:
                                $d = 'семьдесят';
                                break;
                            case 8:
                                $d = 'восемьдесят';
                                break;
                            case 9:
                                $d = 'девяносто';
                                break;
                        }
                        if ($ed == 0) $e = '';
                    }
                    if ($key == 2) {
                        switch ($digit) {
                            case 0:
                                $s = '';
                                break;
                            case 1:
                                $s = 'сто';
                                break;
                            case 2:
                                $s = 'двести';
                                break;
                            case 3:
                                $s = 'триста';
                                break;
                            case 4:
                                $s = 'четыреста';
                                break;
                            case 5:
                                $s = 'пятьсот';
                                break;
                            case 6:
                                $s = 'шестьсот';
                                break;
                            case 7:
                                $s = 'семьсот';
                                break;
                            case 8:
                                $s = 'восемьсот';
                                break;
                            case 9:
                                $s = 'девятьсот';
                                break;
                        }
                    }
                }
                return trim(str_replace('  ',' ',$s . ' ' . $d . ' ' . $e));
            }

            echo ntsp($p1) . ' плюс ' . ntsp($p2) . ' равно ' . ntsp($summ = $p1 + $p2);
        }
    }

    function minus($p1 = '',$p2 = '',$p3 = '')
    {
        if ($p3 == 'f') {
            echo "$p1 - $p2 =  " . $summ = $p1 - $p2;
        } elseif ($p3 == 's') {
            echo $p1 - $p2;
        } elseif ($p3 == 't') {
            function ntsm($n)
            {
                $digits = array_reverse(str_split($n));
                $e = $d = $s = '';

                foreach ($digits as $key => $digit) {
                    if ($key == 0) {
                        $ed = $digit;
                        switch ($digit) {
                            case 0:
                                $e = 'ноль';
                                break;
                            case 1:
                                $e = 'один';
                                break;
                            case 2:
                                $e = 'два';
                                break;
                            case 3:
                                $e = 'три';
                                break;
                            case 4:
                                $e = 'четыре';
                                break;
                            case 5:
                                $e = 'пять';
                                break;
                            case 6:
                                $e = 'шесть';
                                break;
                            case 7:
                                $e = 'семь';
                                break;
                            case 8:
                                $e = 'восемь';
                                break;
                            case 9:
                                $e = 'девять';
                                break;
                        }
                    }
                    if ($key == 1) {
                        switch ($digit) {
                            case 0:
                                $d = '';
                                break;
                            case 1:
                                switch ($ed) {
                                    case 0:
                                        $d = 'десять';
                                        break;
                                    case 1:
                                        $d = 'одинадцать';
                                        break;
                                    case 2:
                                        $d = 'двенадцать';
                                        break;
                                    case 3:
                                        $d = 'тринадцать';
                                        break;
                                    case 4:
                                        $d = 'четырнадцать';
                                        break;
                                    case 5:
                                        $d = 'пятнадцать';
                                        break;
                                    case 6:
                                        $d = 'шестнадцать';
                                        break;
                                    case 7:
                                        $d = 'семнадцать';
                                        break;
                                    case 8:
                                        $d = 'восемнадцать';
                                        break;
                                    case 9:
                                        $d = 'девятнадцать';
                                        break;
                                }
                                $e = '';
                                break;
                            case 2:
                                $d = 'двадцать';
                                break;
                            case 3:
                                $d = 'тридцать';
                                break;
                            case 4:
                                $d = 'сорок';
                                break;
                            case 5:
                                $d = 'пятьдесят';
                                break;
                            case 6:
                                $d = 'шестьдесят';
                                break;
                            case 7:
                                $d = 'семьдесят';
                                break;
                            case 8:
                                $d = 'восемьдесят';
                                break;
                            case 9:
                                $d = 'девяносто';
                                break;
                        }
                        if ($ed == 0) $e = '';
                    }
                    if ($key == 2) {
                        switch ($digit) {
                            case 0:
                                $s = '';
                                break;
                            case 1:
                                $s = 'сто';
                                break;
                            case 2:
                                $s = 'двести';
                                break;
                            case 3:
                                $s = 'триста';
                                break;
                            case 4:
                                $s = 'четыреста';
                                break;
                            case 5:
                                $s = 'пятьсот';
                                break;
                            case 6:
                                $s = 'шестьсот';
                                break;
                            case 7:
                                $s = 'семьсот';
                                break;
                            case 8:
                                $s = 'восемьсот';
                                break;
                            case 9:
                                $s = 'девятьсот';
                                break;
                        }
                    }
                }
                return trim(str_replace('  ',' ',$s . ' ' . $d . ' ' . $e));
            }

            $summ = $p1 - $p2;
            if ($summ > 0) {
                echo ntsm($p1) . ' минус ' . ntsm($p2) . ' равно ' . ntsm($summ);
            }
            if ($summ < 0) {
                echo ntsm($p1) . ' минус ' . ntsm($p2) . ' равно минус ' . ntsm($summ);
            }

        }
    }
}

