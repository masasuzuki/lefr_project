<?php

if(mb_send_mail("match.suzuki@gmail.com", "てすと", "これはテストメールです\n登録ありがとうございます\nテストメール", "From: match.suzuki@gmail.com", '-f match.suzuki@gmail.com')){
	echo "メールが送信されました";
}else{
	echo "メールの送信に失敗しました";
}

?>