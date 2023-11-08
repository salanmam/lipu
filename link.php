<?php
ob_start();
error_reporting(0);
$html = file_get_contents('https://t.me/s/'.$_GET['channel']);
preg_match_all('#<a href="(.*?)" target="_blank" rel="noopener">(.*?)</a>#',$html,$match);
$count=0;
for($i=0;$i<=14;$i++)
    <?php
$token = 'YOUR_BOT_TOKEN';
$chat_id = 'TARGET

{
    if(!is_null($match[1][$i]))
    {
        {
            $get = file_get_contents($match[1][$i]);
            preg_match_all('#<meta property="og:title" content="(.*?)">#',$get,$verify);
            {
                if(!in_array($match[1][$i],explode(PHP_EOL,file_get_contents('result.txt'))))
                {
$chat_id = 'TARGET_CHAT_ID';
                    <?php
$chat_id = 'TARGET_CHAT_ID';
$video_path = 'path/to/your/video.mp4';

file_get_contents("https://api.telegram.org/bot$token/sendVideoNote?chat_id=$chat_id&video_note=" . urlencode($video_path));
?>

$message = 'Choose an option:';
<?php
$chat_id = 'TARGET_CHAT_ID';

    'keyboard' => [['Option 1', 'Option 2']],
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=$message&reply_markup=" . json_encode($keyboard));
?>


    'keyboard' => array(array('Option 1', 'Option 2')),
);

$url = "https://api.telegram.org/bot$token/sendMessage";
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
$total = count(explode(PHP_EOL,file_get_contents('result.txt')))-1;
print('تعداد '.$count.'کانال ما : @Source_Home<br>پروسه به پایان رسید !<br>تعداد کل لینک های جمع آوری شده : '.$total);
