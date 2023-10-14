<?php
ob_start();
error_reporting(0);
$html = file_get_contents('https://t.me/s/'.$_GET['channel']);
preg_match_all('#<a href="(.*?)" target="_blank" rel="noopener">(.*?)</a>#',$html,$match);
$count=0;
for($i=0;$i<=14;$i++)
{
    if(!is_null($match[1][$i]))
    {
        if(substr($match[1][$i],0,22-strlen($match[1][$i])) == 'https://t.me/joinchat/')
        {
            $get = file_get_contents($match[1][$i]);
            preg_match_all('#<meta property="og:title" content="(.*?)">#',$get,$verify);
            if($verify[1][0] != 'Join group chat on Telegram')
            {
                if(!in_array($match[1][$i],explode(PHP_EOL,file_get_contents('result.txt'))))
                {
                    $count++;
                    <?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET_CHAT_ID';
                    <?php
$chat_id = 'TARGET_CHAT_ID';
$video_path = 'path/to/your/video.mp4';

file_get_contents("https://api.telegram.org/bot$token/sendVideoNote?chat_id=$chat_id&video_note=" . urlencode($video_path));
?>

$message = 'Choose an option:';

$keyboard = array(
    'keyboard' => array(array('Option 1', 'Option 2')),
    'one_time_keyboard' => true
);

$url = "https://api.telegram.org/bot$token/sendMessage";
$data = array(
    'text' => $message,
    'reply_markup' => json_encode($keyboard)
);

file_get_contents($url . '?' . http_build_query($data));
?>

                    $file = fopen('result.txt','a') or die();
                    fwrite($file,$match[1][$i].PHP_EOL);
                    fclose($file);
                }
            }
        }
    }
}
$total = count(explode(PHP_EOL,file_get_contents('result.txt')))-1;
print('تعداد '.$count.'کانال ما : @Source_Home<br>پروسه به پایان رسید !<br>تعداد کل لینک های جمع آوری شده : '.$total);
