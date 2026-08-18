<?php
// 学生データの定義
$students = [
    ["name" => "田中太郎", "score" => 85],
    ["name" => "佐藤花子", "score" => 92],
    ["name" => "鈴木一郎", "score" => 78],
    ["name" => "高橋美咲", "score" => 65],
    ["name" => "伊藤健太", "score" => 58],
];

// 評価判定関数
function getGrade($score)
{
    if ($score >= 90) {
        return "A";
    } elseif ($score >= 80) {
        return "B";
    } elseif ($score >= 70) {
        return "C";
    } elseif ($score >= 60) {
        return "D";
    } else {
        return "F";
    }
}


// 統計情報の初期化
$pass_count = 0;
$fail_count = 0;
$total_score = 0;

echo "<h2>成績判定システム</h2>";
echo "<h3>【個別成績】</h3>";

// 各学生の成績を処理
foreach ($students as $student) {
    $name = $student["name"];
    $score = $student["score"];
    $grade = getGrade($score);

    // 合格・不合格のカウント
    if ($score >= 60) {
        $pass_count++;
    } else {
        $fail_count++;
    }

    // 合計点の集計
    $total_score += $score;