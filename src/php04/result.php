<?php

require_once('config/status_codes.php');

//inputのnameがanswer_codeの部分(一つ選ばれた答えの部分)を取得する
$answer_code = htmlspecialchars($_POST['answer_code'], ENT_QUOTES);
//選択されたもの(画面のコード)を取得する
$option = htmlspecialchars($_POST['option'], ENT_QUOTES);

if (!$option) {
    //データ送信が失敗した時にリダイレクトする
    header('Location: index.php');
}

foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        //正解のコードと説明を元の配列から取得する
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
    //選択されたコードが正解のコードと同じかを判定する
    $result = $option == $code;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Status Code Quiz</title>
        <link rel="stylesheet" href="./css/sanitize.css">
        <link rel="stylesheet" href="./css/common.css">
        <link rel="stylesheet" href="./css/result.css">
    </head>
    <body>
        <header class="header">
            <div class="header__inner">
                <a class="header__logo" href="/php04">
                    Status Code Quiz
                </a>
            </div>
        </header>
        <main>
            <div class="result__content">
                <div class="result">
                    <?php if ($result): ?>
                        <!--resultに何か入っていたら-->
                        <h2 class="result__text--correct">正解</h2>
                    <?php else: ?>
                        <h2 class="result__text--incorrect">不正解</h2>
                    <?php endif; ?>
                </div>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text">
                            <?php echo $description ?>
                        </td>
                    </tr>
                </table>
            </div>
        </main>
    </body>
</html>