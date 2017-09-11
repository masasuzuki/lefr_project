<?php
header("Content-Type: text/html;charset=utf-8");
mb_language('ja');
mb_internal_encoding( "utf-8" );

if (isset($_POST['experienceJob']) && is_array($_POST['experienceJob'])) {
    $experienceJob = implode("、", $_POST["experienceJob"]);
}

if(mb_send_mail("match.suzuki@gmail.com", "※テスト※【要対応】個人事業主様よりご応募がありました", "これはテストメールです\n\n担当者各位\n\n".$_POST[name]."（".$_POST[name_kana]."）様よりご応募がありました。\nご登録いただいた内容は以下の通りです。\n====================================\nメールアドレス：".$_POST[mail]."\n生まれた年：".$_POST[birthyear]."\n居住地：".$_POST[pref].$_POST[address]."\n経験職種：".$experienceJob."\n希望職種：".$_POST[desireJob]."\nフリーメッセージ：\n".$_POST[free_coment]."\n====================================\nご担当者より個人事業主様に連絡をお願いします。\n\n※このメールに心当たりがない場合は大変お手数ですがメールを削除してください。\n\n---\nLIVE ESTフリーランスシステム\n---", "From: match.suzuki@gmail.com", '-f match.suzuki@gmail.com')){
	echo "メールが送信されました";
}else{
	echo "メールの送信に失敗しました";
}

?>