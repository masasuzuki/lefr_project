<?php
header("Content-Type: text/html;charset=utf-8");
mb_language('ja');
mb_internal_encoding( "utf-8" );

if(mb_send_mail($_POST[mail], "てすと", "これはテストメールです\n".$_POST[name]."さん登録ありがとうございます。\n登録頂いた内容は以下の通りです。\n-------\nメールアドレス：".$_POST[mail]."\n生まれた年：".$_POST[birthyear]."\n居住地：".$_POST[pref]."\n経験職種：".$_POST[experienceJob]."\n希望職種：".$_POST[desireJob]."\n備考：\n".$_POST[free_coment]."\n-------\n担当者より連絡致します。", "From: match.suzuki@gmail.com", '-f match.suzuki@gmail.com')){
	echo "メールが送信されました";
}else{
	echo "メールの送信に失敗しました";
}

?>