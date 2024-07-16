<?php
// Q1 変数と文字列
$name = '藤縄';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num;
echo "\n";
echo $num / 2;

// Q3 日付操作
// 日付のタイムゾーンを日本にする
date_default_timezone_set('Asia/Tokyo');
$now = date('Y年m月d日 H時i分s秒');
echo "現在時刻は、{$now}です。";

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows' || $deveice === 'mac') {
  echo "使用OSは{$device}です。";
} else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 20;
echo $age >= 18 ? '成人です。' : '未成年です。';

// Q6 配列
$prefs = [
  '茨城県',
  '群馬県',
  '栃木県',
  '千葉県',
  '埼玉県',
  '東京都',
  '神奈川県'
];
echo "{$prefs[2]}と{$prefs[3]}は関東地方の都道府県です。";

// Q7 連想配列-1
$array = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
  '愛知県' => '名古屋市',
  '大阪府' => '大阪市'
];
foreach ($array as $key => $value) {
  echo "{$value}\n";
}

// Q8 連想配列-2
foreach ($array as $key => $value) {
  if ($key === '埼玉県') {
    echo "{$key}の県庁所在地は、{$value}です。";
  }
}

// Q9 連想配列-3
foreach ($array as $key => $value) {
  if ($key === '愛知県' || $key === '大阪府') {
    echo "{$key}は関東地方ではありません。\n";
  } else {
    echo "{$key}の県庁所在地は、{$value}です。\n";
  }
}

// Q10 関数-1
function hello($name)
{
  return "{$name}さん、こんにちは。";
}
echo hello('田中');
echo hello('中田');

// Q11 関数-2
function calcTaxInPrice($price)
{
  return round($price * 1.1);
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo "{$price}円の商品の税込価格は{$taxInPrice}円です。";

// Q12 関数とif文
function distinguishNum($number)
{
  return $number % 2 === 0 ? "{$number}は偶数です。" : "{$number}は奇数です。";
}
echo distinguishNum(11);
echo distinguishNum(24);

// Q13 関数とswitch文
function evaluateGrade($result)
{
  switch ($result) {
    case 'A';
    case 'B';
      return '合格です。';
      break;
    case 'C':
      return '合格ですが追加課題があります。';
      break;
    case 'D';
      return '不合格です。';
      break;
    default:
      return '判定不明です。講師に問い合わせてください。';
      break;
  }
}
echo evaluateGrade('A');
echo evaluateGrade('K');
