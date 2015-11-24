<?php

// 【PHP課題その1】 1から100までの数字のうち、素数のみを画面に出力しなさい。 素数とは、1とその数以外で割ることの出来ない正の整数のことである。ただし1は素数ではない。
// 出力結果: 2, 3, 5, 7, ... ,93, 97
// ヒント: continueを用いると、ループ構造の処理をスキップできる。
// 参考 http://php.net/manual/ja/control-structures.continue.php

// 【課題解答】
// 考えてもあまり良くわからなかったため、Webのコードを参考に解答しました。そのため、$flgの活用を中心に不明点がございます。
// 一般化した$flgの使い方、continueを使った方法等を教えていただけると幸いです。よろしくお願いいたします。

// ＜コードの理解＞
// flgの活用方法がいまいちわからない。
// $iはforで2,3,・・・・100となる。
// それに対して$flg="0"とすると、$i=>$flg(0=>2,0=>3・・・)となるのか。※わからないポイント1つ目
// そのあとは$jは$i未満の数字になる。$iが5の場合は$jが2,3,4
// $i/$jを$i=5の場合は、5/2,5/3,5/4としていき、割り切れた時点でその数字に$flg"1"を立ててbreak(ループ処理を停止)。
// ここでわからないのは、$flgは$iに対して立つのかどうか。($i=>$flgのflg値が変わるのか)※わからないポイント2つ目
// 次の数字(この場合6)に移る。
// $flgが0の値に対して$iを表示する。

for ($i=2; $i<=100; ++$i)
{

  $flg="0";
  for ($j=2; $j<$i; $j++)
  {
    if($i%$j==0)
    {
      $flg="1";
      break;
    }
  }

  if($flg=="0")
  {
    echo $i."<br>";
  }
}
