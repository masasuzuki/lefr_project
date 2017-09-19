<?php
header("Content-Type: text/html;charset=utf-8");
mb_language('ja');
mb_internal_encoding( "utf-8" );

if (isset($_POST['experienceJob']) && is_array($_POST['experienceJob'])) {
    $experienceJob = implode("、", $_POST["experienceJob"]);
}

if(mb_send_mail("match.suzuki@gmail.com", "【要対応】個人事業主様よりご応募がありました", "担当者各位\n\n".$_POST[name]."（".$_POST[name_kana]."）様よりご応募がありました。\nご登録いただいた内容は以下の通りです。\n====================================\nメールアドレス：".$_POST[mail]."\n携帯番号　　　：".$_POST[tel_mobile]."\n生まれた年　　：".$_POST[birthyear]."\n最寄り駅　　　：".$_POST[pref].$_POST[address]."\n経験職種　　　：".$experienceJob."\n希望職種　　　：".$_POST[desireJob]."\nフリーメッセージ：\n".$_POST[free_coment]."\n====================================\nご担当者より個人事業主様に連絡をお願いします。\n\n※このメールに心当たりがない場合は大変お手数ですがメールを削除してください。\n\n---\nLIVE ESTフリーランスシステム\n---", "From: match.suzuki@gmail.com", '-f match.suzuki@gmail.com')){
	$url = 'form_finish.html';
	header("Location: {$url}");
	exit();
}else{
	$url = 'form.html';
	header("Location: {$url}");
	exit();
}

?>