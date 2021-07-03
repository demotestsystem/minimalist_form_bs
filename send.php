<?php
/**
 * Minimalist Form ／ メール送信プログラム
 * 
 * Ajaxでデータを受け取り、メールを送信後、jsonで結果を返す。
 * ユーザーへの自動返信はしない！管理者のみにメールを送信する。
 * 
 * @version 1.0
 * @author demotestsystem
 * @link https://github.com/demotestsystem
 */
// ----------------------------------------------------------------------
//【設定】

// 送信先メールアドレス
$to = 'xxxxxxx@xxx.xx.xx';

// 件名
$subject = 'Minimalist Form からの送信メール';

// 本文
$message = '';
foreach ( $_POST as $k => $v ) {
  $message .= '■'. $k ."\n". $v ."\n\n";
}

// 送信元メールアドレス
$from_mail = $to;
// 送信元名
$from_name = '管理者';

// 送信元
$from = mb_encode_mimeheader( $from_name ) .' <'. $from_mail .'>';
// ----------------------------------------------------------------------

$headers  = "MIME-Version: 1.0 \r\n";
//$headers .= "Content-Transfer-Encoding: 7bit \r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8 \r\n";
$headers .= "Return-Path: ". $from_mail ." \r\n";
$headers .= "From: ". $from ." \r\n";
$headers .= "Sender: ". $from ." \r\n";
$headers .= "Reply-To: ". $from_mail ." \r\n";
//$headers .= "Organization: xxxx \r\n";
$headers .= "X-Sender: " .$from_mail ." \r\n";
//$headers .= "X-Mailer: PHP ". phpversion() ." \r\n";
$headers .= "X-Priority: 3 \r\n";

mb_language( 'uni' );
mb_internal_encoding( 'UTF-8' );

// メール送信
$response = mb_send_mail( $to, $subject, $message, $headers, '-f'. $from_mail );


// return json 
header( 'Content-Type: application/json' );

$JSON_DATA = [ 'result' => 'success' ];
echo json_encode( $JSON_DATA );
