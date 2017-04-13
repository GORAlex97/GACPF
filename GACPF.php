<?php
TODO: Author:
'GORAlex Comp';

class GACPF
{
    function about($about = '')
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
        if ($about) {
            echo $res = $par[$about][0];
        } elseif ($about == '') {
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

    function plus($plus1 = '',$plus2 = '',$plus3 = '')
    {
        if ($plus1 == '' and $plus2 == '' and $plus3 == '') {
            echo 'Заполните необходимые параметры функции!';
        } elseif ($plus2 == '' and $plus3 == '') {
            echo $plus1;
        } elseif ($plus3 == '') {
            echo $plus1 + $plus2;
        } elseif ($plus3 == 'f') {
            echo $plus1 . '  плюс ' . $plus2 . ' равно ' . $summ = $plus1 + $plus2;
        } elseif ($plus3 == 's') {
            echo "$plus1 + $plus2 =  " . $summ = $plus1 + $plus2;
        } elseif ($plus3 == 't') {
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

            echo ntsp($plus1) . ' плюс ' . ntsp($plus2) . ' равно ' . ntsp($summ = $plus1 + $plus2);
        }
    }

    function minus($minus1 = '',$minus2 = '',$minus3 = '')
    {
        if ($minus3 == 'f') {
            echo "$minus1 - $minus2 =  " . $summ = $minus1 - $minus2;
        } elseif ($minus3 == 's') {
            echo $minus1 - $minus2;
        } elseif ($minus3 == 't') {
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

            $summ = $minus1 - $minus2;
            if ($summ > 0) {
                echo ntsm($minus1) . ' минус ' . ntsm($minus2) . ' равно ' . ntsm($summ);
            }
            if ($summ < 0) {
                echo ntsm($minus1) . ' минус ' . ntsm($minus2) . ' равно минус ' . ntsm($summ);
            }

        }
    }

    function multiply($multiply1 = '',$multiply2 = '',$multiply3 = '')
    {
        if ($multiply1 == '' and $multiply2 == '' and $multiply3 == '') {
            echo 'Заполните необходимые параметры функции!';
        } elseif ($multiply2 == '' and $multiply3 == '') {
            echo $multiply1;
        } elseif ($multiply3 == '') {
            echo $multiply1 + $multiply2;
        } elseif ($multiply3 == 'f') {
            echo $multiply1 . '  плюс ' . $multiply2 . ' равно ' . $summ = $multiply1 + $multiply2;
        } elseif ($multiply3 == 's') {
            echo "$multiply1 + $multiply2 =  " . $summ = $multiply1 + $multiply2;
        } elseif ($multiply3 == 't') {
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

            echo ntsp($multiply1) . ' плюс ' . ntsp($multiply2) . ' равно ' . ntsp($summ = $multiply1 + $multiply2);
        }
    }

    function divide($divide1 = '',$divide2 = '',$divide3 = '')
    {
        if ($divide1 == '' and $divide2 == '' and $divide3 == '') {
            echo 'Заполните необходимые параметры функции!';
        } elseif ($divide2 == '' and $divide3 == '') {
            echo $divide1;
        } elseif ($divide3 == '') {
            echo $divide1 + $divide2;
        } elseif ($divide3 == 'f') {
            echo $divide1 . '  плюс ' . $divide2 . ' равно ' . $summ = $divide1 + $divide2;
        } elseif ($divide3 == 's') {
            echo "$divide1 + $divide2 =  " . $summ = $divide1 + $divide2;
        } elseif ($divide3 == 't') {
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

            echo ntsp($divide1) . ' плюс ' . ntsp($divide2) . ' равно ' . ntsp($summ = $divide1 + $divide2);
        }
    }

    function randomtext($CSaP = '')
    {
        if ($CSaP > 0) {
            $cuttext = substr(file_get_contents('./include/randomtext.txt'),0,$CSaP);
            echo wordwrap($cuttext);
        } elseif ($CSaP < 0) {
            $paragraph = [
                //626
                -1 => 626,
                //679
                -2 => 1307,
                //475
                -3 => 1784,
                //650
                -4 => 2436,
                //563
                -5 => 3001,
                //527
                -6 => 3509,
                //850
                -7 => 4361,
                //836
                -8 => 5199,
                //598
                -9 => 5799,
                //517
                -10 => 6318

            ];
            $cuttext = substr(file_get_contents('./include/randomtext.txt'),0,$paragraph[$CSaP]);
            echo wordwrap($cuttext);
        } else {
            echo wordwrap(file_get_contents('./include/randomtext.txt'));
        }
    }
}

