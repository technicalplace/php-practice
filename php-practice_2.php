<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
    echo 'tic-tac';
  } elseif ($i % 4 === 0) {
    echo 'tic';
  } elseif ($i % 5 === 0) {
    echo 'tac';
  } else {
    echo $i;
  }
}

// Q2 多次元連想配列
$personalInfos = [
    [
        'name' => 'Aさん',
        'mail' => 'aaa@mail.com',
        'tel' => '09011112222'
    ],
    [
        'name' => 'Bさん',
        'mail' => 'bbb@mail.com',
        'tel' => '08033334444'
    ],
    [
        'name' => 'Cさん',
        'mail' => 'ccc@mail.com',
        'tel' => '09055556666'
    ],
];
// 問題1
echo "{$personalInfos[1]['name']}の電話番号は{$personalInfos[1]['tel']}です。";

// 問題2
foreach($personalInfos as $key => $value) {
  $index = $key + 1;
  $name = $value['name'];
  $mail = $value['mail'];
  $tel = $value['tel'];
  echo "{$index}番目の{$name}のメールアドレスは{$mail}で、電話番号は{$tel}です。\n";
}

// 問題3
$ageList = [25, 30, 18];
foreach($personalInfos as $key => $personalInfo) {
  $personalInfos[$key]['age'] = $ageList[$key];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($lang)
    {
        echo "{$this->studentName}は{$lang}の授業に出席しました。学籍番号：{$this->studentId}";
    }
}
$student = new Student(120, '山田');
echo "学籍番号{$student->studentId}番の生徒は{$student->studentName}です。";

// Q4 オブジェクト-2
$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題1
date_default_timezone_set('Asia/Tokyo');
$now = new DateTime();
$now->modify('-1 month');
echo $now->format('Y-m-d');

// 問題2
$pastDay = new DateTime('1992-04-25');
$diffDays = $now->diff($pastDay);
echo "あの日から{$diffDays->format('%a')}日経過しました。";
?>