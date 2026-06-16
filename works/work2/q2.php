<?php
//1から10までの数の合計を計算して表示するコードを書いてください。(for文を使うこと)
$total = 0;
for ($i = 0; $i <= 10; $i++) {
    $total += $i;
}
echo $total;
