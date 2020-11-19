<?php
$admin = '1171894731';
$kanal = 'Hacker_Bey';
$token = '1339306908:AAG_jZZlW0nqGDt9mkDrchlJ0hzgG72UqQA';
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
function uzard($method,$datas=[]){
global $token;
    $url = "https://api.telegram.org/bot".$token."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
$uzard = json_decode(file_get_contents('php://input'));
$message = $uzard->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);

$text = $message->text; //
$cid = $message->chat->id; //
$uid = $message->from->id; //
$login1 = $message->from->username; //
$name = $message->from->first_name; //

//Channel
$channel = $uzard->channel_post; //
$channel_mid = $channel->message_id; 
$channel_id = $channel->chat->id; 
$channel_user = $channel->chat->username; 
$caption = $channel->caption;

$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 

$data = $uzard->callback_query->data;
$cmid = $uzard->callback_query->message->message_id;
$ccid = $uzard->callback_query->message->chat->id;
$cuid = $uzard->callback_query->message->from->id;
$qid = $uzard->callback_query->id; 

$ctext = $uzard->callback_query->message->text; 
$callfrid = $uzard->callback_query->from->id; 
$callfrusername = $uzard->callback_query->from->username; 
$callfname = $uzard->callback_query->from->first_name;  
$calltitle = $uzard->callback_query->message->chat->title; 
$calluser = $uzard->callback_query->message->chat->username; 
 
$channel = $uzard->channel_post;
$channel_text = $channel->text;
$channel_mid = $channel->message_id; 
$channel_id = $channel->chat->id; 
$channel_user = $channel->chat->username;

$chanel_doc = $channel->document; 
$chanel_vid = $channel->video; 
$chanel_mus = $channel->audio; 
$chanel_voi = $channel->voice; 
$chanel_gif = $channel->animation; 
$chanel_fot = $channel->photo; 
$caption=$channel->caption;
$cap=file_get_contents("baza/$channel_id.txt");
mkdir("like");
mkdir("baza");
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

if($text=="/start"){
  uzard('sendmessage',[
   'chat_id'=>$cid,
   'text'=>"✌Avvalambor assalomu aleykum hurmatli:
 ❤[ $name ]❤
🔹♨Bu 🤖bot🤖 kanallardagi postlaringizga:
🔹1) ❤Yoqdi  ✅
🔹2) 🖤Yoqmadi  ✅
🔹3) ♻Do'stlarga ulashish♻  ✅
🔹Tugmalarini qo'yib beradi va bundan tashqari bir qancha funksiyalari bor! ✅
🇺🇿Va har bir rasmga kanal userini qo'yib ajoyib qilib beradi!
🔹Buning uchun botni kanalingizga qo'shib administratorlik huquqlarini berib qo'yishingiz kerak! ✅
🔹Agar botimizning qo'shimcha funksiyasidan foydalanmoqchi bo'lsangiz /buyruqlar buyrug'ini bering! ✅
🔹Agar botimiz statistikasini ko'rmoqchi bo'lsangiz /stat buyrug'ini bering! ✅
🔹💻Bot dasturchisi: ♨ @Shox_Xacker ✅",
   'parse_mode' => 'html'
  ]);
}

if (isset($channel->photo)){

$photo = $channel->photo;
$file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;

////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

      file_put_contents('photo.jpeg', file_get_contents('https://api.telegram.org/file/bot'.$token.'/'.$patch));

$login = "@$channel_user";
$stamp = imagecreatefrompng('stamp.png');
$im = imagecreatefromjpeg('photo.jpeg');
$font = imageloadfont('font.gdf');

$white = imagecolorallocate($stamp, 1255, 765, 765);

$font_path = 'arial.ttf';

////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

imagettftext($stamp, 25, 0, 18, 46, $white, $font_path, $login);

$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesy($stamp);

////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

imagecopymerge($im, $stamp, imagesx($im) - $sx - $marge_right, imagesy($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp), 75);

imagepng($im, 'photo_stamp.png');
imagedestroy($im);

  uzard('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
uzard('sendPhoto',[
'chat_id'=>$channel_id,
'photo'=>new CURLFile('photo_stamp.png'),
'caption'=>"$caption",
]);
}

if(isset($chanel_doc) or isset($chanel_vid) or isset($chanel_mus) or isset($chanel_voi) or isset($chanel_gif) or isset($chanel_fot)){

   uzard('editmessagecaption',[
        'chat_id'=>$channel_id,
        'message_id'=>$channel_mid,
        'caption'=>"$caption

$cap",
        'parse_mode'=>'html',
      ]);
  
    $tokenn=uniqid("true");

    uzard('editMessageReplyMarkup',[
        'chat_id'=>$channel_id,
        'message_id'=>$channel_mid,
        'inline_query_id'=>$qid, 
        'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"❤Yoqdi", 'callback_data'=>"$tokenn=❤Yoqdi"],['text'=>"🖤Yoqmadi",'callback_data'=>"$tokenn=🖤Yoqmadi"]],
       [['text'=>"♻Do'stlarga ulashish♻", "url"=>"https://telegram.me/share/url?url=https://telegram.me/$channel_user/$channel_mid"]], 
       ] 
       ]) 
       ]);
}
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

if(mb_stripos($data,"=")!==false){ 
$ex=explode("=",$data); 
$calltok=$ex[0]; 
$emoj=$ex[1]; 
$mylike=file_get_contents("like/$calltok.dat"); 
if(mb_stripos($mylike,"$callfrid")!==false){ 
      uzard('answerCallbackQuery',[ 
        'callback_query_id'=>$qid, 
        'text'=>"Kechirasiz siz ovoz berib bo'lgansiz!", 
        'show_alert'=>false, 
    ]); 
}else{ 
file_put_contents("like/$calltok.dat","$myliken$callfrid=$emoj"); 
$value=file_get_contents("like/$calltok.dat"); 
$lik=substr_count($value,"❤Yoqdi"); 
$des=substr_count($value,"🖤Yoqmadi"); 
     uzard('editMessageReplyMarkup',[ 
        'chat_id'=>$ccid, 
        'message_id'=>$cmid,
        'inline_query_id'=>$qid,
        'reply_markup'=>json_encode([ 
        'inline_keyboard'=>[ 
       [['text'=>"❤Yoqdi $lik", 'callback_data'=>"$calltok=❤Yoqdi"],['text'=>"🖤Yoqmadi $des",'callback_data'=>"$calltok=🖤Yoqmadi"]], 
       [['text'=>"♻Do'stlarga ulashish♻", "url"=>"https://telegram.me/share/url?url=https://telegram.me/$calluser/$cmid"]], 
       ] 
       ]) 
       ]);
       uzard('answerCallbackQuery',[ 
        'callback_query_id'=>$qid, 
        'text'=>"Ovozingiz qabul qilindi!", 
        'show_alert'=>false, 
    ]);  
  }
}
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

if(mb_stripos($channel_text,"#comment")!==false){
  $ex=explode("#comment", $channel_text);
  $exe=$ex[1];
  file_put_contents("baza/$channel_id.txt", "$exe");
  uzard('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
}
//Abroriy Tomonidan @PHP_OWN kanali orqali tarqatildi
if($channel_text=="#text"){
  uzard('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
  uzard('sendmessage',[
    'chat_id'=>$channel_id,
    'text'=>$cap,
    'parse_mode'=>'html',
  ]);
}

if($channel_text=="#clear"){
  unlink("baza/$channel_id.txt");
  uzard('deletemessage',[
    'chat_id'=>$channel_id,
    'message_id'=>$channel_mid,
  ]);
}

$gruppa = file_get_contents("gruppa.db");
$lichka = file_get_contents("lichka.db");
$xabar = file_get_contents("xabarlar.txt");
if($type==$channel){
if(strpos($gruppa,"$channel_id") !==false){
}else{
file_put_contents("gruppa.db","$gruppan$channel_id");
}
}
if($type=="private"){
if(strpos($lichka,"$cid") !==false){
}else{
file_put_contents("lichka.db","$lichkan$cid");
}
} 
$reply = $message->reply_to_message->text;
$rpl = json_encode([
            'resize_keyboard'=>false,
            'force_reply'=>true,
            'selective'=>true
        ]);
if($text=="/send" and $cid==$admin){
  uzard('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Yuboriladigan xabar matnini kiriting!",
    'parse_mode'=>"html",
]);
    file_put_contents("xabarlar.txt","user");
}
if($xabar=="user" and $cid==$admin){
if($text=="/cancel"){
  file_put_contents("xabarlar.txt","");
}else{
  $lich = file_get_contents("lichka.db");
  $lichka = explode("n",$lich);
  foreach($lichka as $lichkalar){
  $okuser=uzard("sendmessage",[
    'chat_id'=>$lichkalar,
    'text'=>$text,
    'parse_mode'=>'html'
]);
}
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
if($okuser){
  uzard("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"Hamma userlarga yuborildi!",
    'parse_mode'=>'html',
]);
  file_put_contents("xabarlar.txt","");
}
}
}
if($text=="/sendchannel" and $cid==$admin){
  uzard('sendmessage',[
    'chat_id'=>$admin,
    'text'=>"Kanallarga yuboriladigan xabar matnini kiriting!",
    'parse_mode'=>"html",
  ]);
  file_put_contents("xabarlar.txt","guruh");
}
if($xabar=="guruh" and $cid==$admin){
  if($text=="/cancel"){
  file_put_contents("xabarlar.txt","");
}else{
  $gr = file_get_contents("gruppa.db");
  $grup = explode("n",$gr);
foreach($grup as $chatlar){
  $okguruh=uzard("sendmessage",[
    'chat_id'=>$chatlar,
    'text'=>$text,
    'parse_mode'=>'html',
]);
}
if($okguruh){
  uzard("sendmessage",[
    'chat_id'=>$admin,
    'text'=>"Hamma kanallarga yuborildi!",
    'parse_mode'=>'html',
]);
  file_put_contents("xabarlar.txt","");
}
}
}

////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

if($text=="/buyruqlar"){
  uzard('sendmessage',[
   'chat_id'=>$cid,
   'text'=>"✌Assalomu aleykum botimiz foydalanuvchi♏✅
🔹 Botimizning qo'shimcha buyruqlari bilan tanishing:
🔹<code>#comment</code> va so'z Masalan: [#comment @Like_V_Bot admini ♨ @Shox_Xacker ]- Kanalingizga post tashlasangiz avtomatik tarza [ @Like_V_Bot admini ♨ @Shox_Xacker ] qo'shiladi! ✅
🔹<code>#text</code> - #comment ga yozgan so'zingizni ko'rmoqchi bo'lsangiz #text so'zini kanalingizga yuboring! ✅
🔹<code>#clear</code> - #comment ga nima yozgan bo'lsangiz o'chib ketadi! ✅

🔹Yuqorida keltirilgan buyruqlar faqat kanallarda ishlaydi! ✅
🤖Bot: ♨ @Like_V_Bot ✅
📡Botning maxsus kanali: ♨ @Hacker_Bey ✅
❤Tuzuvchi: ♨️ @Shox_Xacker ✅
🖤Spamlar: ♨ @Shox_Xacker_bot ✅",
   'parse_mode' => 'html'
  ]);
}

////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

if($text=="/malumotlar"){
$tim=date('H:i:s',strtotime('2 hour'));
$sana=date("d.m.Y",strtotime("2 hour"));
$haf = date('N',strtotime('2 hour'));
$haft="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7";
$ex=explode("$haf",$haft);
$haftab="$ex[1]";
$okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentyabr9 10Oktyabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oyb = "$ex2[1]";
$sana2 = date('z', strtotime('2 hour'));
$anb8 = file_get_contents('https://obhavo.uz/karshi'); $ex1=explode("n",$anb8);
$obh = file_get_contents('https://www.accuweather.com/uz/uz/qarshi/');
$ex = explode('title="Havo harorati"',$obh);
$exi = explode('right-container',$ex[1]);
$ubk = str_replace($exi[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
$buoy = date('t', strtotime('2 hour'));
//yangiyil
$kunr = date('z',strtotime('2 hour')); 
$i = 364;
$s2 = $i-$kunr;
$kunr = date('z',strtotime('2 hour')); 
$i = 364;
$s2 = $i-$kunr;
$kunu = date('z',strtotime('2 hour')); 
$t = 247;
$m2 = $t-$kunu;
//ertangikun
$kun1 = date('H',strtotime('2 hour')); 
$soati = 23;
$soat1 = $soati-$kun1;
$kun2 = date('i',strtotime('2 hour')); 
$minuti = 59;
$minut = $minuti-$kun2;
$kun3 = date('s',strtotime('2 hour')); 
$sekundi = 59;
$sekund = $sekundi-$kun3;
//maktabgaqolgankun
$kun1 = date('H',strtotime('2 hour')); 
$kuni = 244;
$mkun = $kuni-$kun1;
$kun2 = date('H',strtotime('2 hour')); 
$soati = 24;
$msoat = $soati-$kun2;
$kun3 = date('i',strtotime('2 hour')); 
$minuti = 59;
$mminut = $minuti-$kun3;
$kun4 = date('s',strtotime('2 hour')); 
$sekundi = 59;
$msekund = $sekundi-$kun4;
  uzard('sendmessage',[
   'chat_id'=>$cid,
   'text'=>"🔹⏰O'zbekistonda soat:$tim ✅
🔹📆Bugun:$sana ✅
🔹📆Hafta kuni-$haftab ✅
🔹📅Oy nomi-$oyb !✅
🔹🔲Yilning-$sana2 kuni!🔲✅
🔹⛅Havo harorati- $obhavo °C⛅✅
🔹🌐Bu oy $buoy kundan iborat!🌐✅
🔹❄Yangi Yilga 📅$s2 Kun ☃️$soat1 Soat⏰ 🎅$minut Minut 🎁$sekund Sekund Qoldi!🌐
🔹🌚Ertangi kunga: ⏰$soat1-Soat⏰,🌷$minut-Minut🥀, ➰ $sekund-Sekund qoldi!🌐
🔹🏩Maktabga  📅$mkun Kun ♨$msoat Soat⏰ 🎆$mminut Minut 🎁$msekund Sekund Qoldi!🌐",
   'parse_mode' => 'html'
  ]);
}

////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp

if($type=="private"){
if($text=="/stat"){
  $lich = substr_count($lichka,"n");
$gruppa = file_get_contents("gruppa.db");
  $gr = substr_count($gruppa,"n");
  $jami = $lich + $gr;
  $time=date('H:i:s',strtotime('2 hour'));
  $sana=date("d",strtotime("2 hour"));
  $okun=date("n");
$oynoms = "1Yanvar1 2Fevral2 3Mart3 4Aprel4 5May5 6Iyun6 7Iyul7 8Avgust8 9Sentyabr9 10Oktyabr10 11Noyabr11 12Dekabr12";
$ex2 = explode("$okun",$oynoms);
$oyb = "$ex2[1]";
  uzard('sendmessage',[
    'chat_id'=>$cid,
    'reply_to_message_id'=>$mid,
    'text'=>"🤖Bot foydalanuvchilari soni:
🔹🚹A'zolar: $lich ta✅
🔹📡Kanallar: $gr ta✅
🔹🌟Xammasi bo'lib: $jami ta✅
🔹🌐Bugun 📆 $sana - $oyb ✅
🔹⏰O'zbekistonda soat: $time ✅",


  ]);
}
}
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
////Bot kodi @UzArd tomonidan tuzilgan!Manba bilan oling ofgicial chanel: @Shax_Blogs @KingsofPhp
