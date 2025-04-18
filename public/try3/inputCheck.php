<?php

// ユーザー名チェック（ひらがな・カタカナ・漢字、20文字以内）
if (!preg_match('/^[\p{Hiragana}\p{Katakana}\p{Han}]{1,20}$/u', $username)) {
    die("20文字以内で名前を入力してください。記号等は利用できません。");
}

// 住所チェック（ひらがな・カタカナ・漢字・数字（半角/全角）・ハイフン、30文字以内）
if (!preg_match('/^[\p{Hiragana}\p{Katakana}\p{Han}0-9０-９\-ー]{1,30}$/u', $useraddress)) {
    die("30文字以内で住所を入力してください。記号等は利用できません。");
}

// メールアドレスチェック（英数字、. - _ @ のみ）
if (!preg_match('/^[a-zA-Z0-9._\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$/', $usermail)) {
    die("正しいメールアドレス形式で入力してください。記号は.-_@のみ利用可能。");
}
?>
