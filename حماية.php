<?php 
/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @AX_GB
DEV : @O_1_W
Translator : @AX_GB
/*====================*/
ob_start();
$token = "توكن";//توكنك
define("API_KEY",$token);
echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']);
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
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
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$from_id = $message->from->id;
$name = $update->message->from->first_name;
$from_id = $message->from->id;
$from_id = $message->from->id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$from_id2 = $update->callback_query->message->from->id;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$username = $update->message->from->username;
$sttings = json_decode(file_get_contents("MRAX.json"),1);
$Df = "5414131492";//ايديك
if(!$sttings['sudo']){
$iidsod = $Df;
}elseif($sttings['sudo']){
$iidsod = $sttings['sudo'];
}
$admin = $iidsod;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$data = $update->callback_query->data;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 =  $update->callback_query->message->message_id;
$name = $message->from->first_name;
$username = $message->from->username;
$from_id = $message->from->id;
$MRAX2 = explode("\n",file_get_contents("MRAX4.txt"));
$SAll = count($MRAX2)-1;
if ($message && !in_array($from_id, $MRAX2)) {
file_put_contents("MRAX4.txt", $from_id."\n",FILE_APPEND);
}
$ch1 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$sttings['ch1']."&user_id=".$from_id);
$ch2 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$sttings['ch2']."&user_id=".$from_id);
if($message && (strpos($ch1,'"status":"left"') or strpos($ch1,'"Bad Request: USER_ID_INVALID"') or strpos($ch1,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>'$em :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
 — — — — — — — — —
'.$sttings['ch1'].'
 — — — — — — — — —
'.$sttings['ch2'],
]);return false;
}
$ch11 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$sttings['ch11']."&user_id=".$from_id);
$ch22 = file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$sttings['ch22']."&user_id=".$from_id);
if($update){
if($message && (strpos($ch11,'"status":"left"') or strpos($ch11,'"Bad Request: USER_ID_INVALID"') or strpos($ch11,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=".$sttings['ch11']));
$link = $get->result;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$em :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
 — — — — — — — — —
".$link."
 — — — — — — — — —",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا",'url'=>"$link"]],
]])
]);return false;}}
if($update){
if($message && (strpos($ch22,'"status":"left"') or strpos($ch22,'"Bad Request: USER_ID_INVALID"') or strpos($ch22,'"status":"kicked"') or strpos($ch2,'"status":"left"') or strpos($ch2,'"Bad Request: USER_ID_INVALID"') or strpos($ch2,'"status":"kicked"'))!== false){
$get = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/exportChatInviteLink?chat_id=".$sttings['ch22']));
$link = $get->result;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
$em :عذراً عزيزي 
✔:يجب عليك الاشتراك في قناة المطور أولا
✔:اشترك ثم ارسل /start 
 — — — — — — — — —
".$link ."
 — — — — — — — — —",
'reply_to_message_id'=>$message->message_id,'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضغط هنا",'url'=>"$link"]],
]])
]);return false;}}
$em = $sttings['emoji'];
$start = $sttings['start'];
if($text == "/start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"🎚:اهلا بك عزيزي .
📮:في لوحه الاوامر ألخاصه بالمطور الاساسي 
",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$em :الاشتراك الاجباري",'callback_data'=>"All Ch"]],
[['text'=>"$em :الاذاعه" ,'callback_data'=>"Sender"],['text'=>"$em :المشتركين {".$SAll."}",'callback_data'=>"mem"]],
[['text'=>"$em :تفعيل التنبيه" ,'callback_data'=>"ch1"],['text'=>"$em :تعطيل التنبيه" ,'callback_data'=>"ch2"]],
[['text'=>"$em :النسخه الاحتياطيه" ,'callback_data'=>"file"]],
[['text'=>"$em :تفعيل التوجيه" ,'callback_data'=>"ON"],['text'=>"$em :تعطيل التوجيه" ,'callback_data'=>"Of"]],
[['text'=>"$em :نقل ملكيه" ,'callback_data'=>"AddAdmin"]],
[['text'=>"$em :تغيير الازرار " ,'callback_data'=>"emoji"],['text'=>"$em :تغيير ال /start " ,'callback_data'=>"star"]],
]])
]);
}
if($data == "MRAX" ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
"text"=>"🎚:اهلا بك عزيزي .
📮:في لوحه الاوامر ألخاصه بالمطور الاساسي .",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"$em :الاشتراك الاجباري" ,'callback_data'=>"All Ch"]],
[['text'=>"$em :الاذاعه" ,'callback_data'=>"Sender"],['text'=>"$em :المشتركين {".$SAll."}",'callback_data'=>"mem"]],
[['text'=>"$em :تفعيل التنبيه" ,'callback_data'=>"ch1"],['text'=>"$em :تعطيل التنبيه" ,'callback_data'=>"ch2"]],
[['text'=>"$em :النسخه الاحتياطيه" ,'callback_data'=>"file"]],
[['text'=>"$em :تفعيل التوجيه" ,'callback_data'=>"ON"],['text'=>"$em :تعطيل التوجيه" ,'callback_data'=>"Of"]],
[['text'=>"$em :نقل ملكيه" ,'callback_data'=>"AddAdmin"]],
[['text'=>"$em :تغيير الازرار " ,'callback_data'=>"emoji"],['text'=>"$em :تغيير ال /start " ,'callback_data'=>"star"]],
]])
]);
}
if($data == "star"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'ارسل الستارت الجديده ',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "start";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text && $sttings['data'] == "start" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" $em :تم تعيين الستارت ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['start'] = "$text";
$sttings['data'] = "hhhhhdd";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "emoji"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'حسنا ارسل الايموجي او الرمز الذي سيتم عرضه في كل الازرار🧶',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "emojis";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text && $sttings['data'] == "emojis" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>" $em :تم اضافه الزر  [$text] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['emoji'] = "$text";
$sttings['data'] = "hhhhhdd";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "file" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حسنا اختر من الاسفل$em ",
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اضغط لسحب نسخه من ملف التخزين $em ' ,'callback_data'=>"sendfile"]],
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
}
if($data == "sendfile" and $chat_id2 == $admin){
bot('senddocument',[
'chat_id'=>$chat_id2,
'document'=>new CURLFile("MRAX4.txt"),
"caption"=>"- 👥 $SAll
/start $em ",
]);
unset($sttings['data']);
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "AddAdmin" and $chat_id2 == $admin){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em ارسل الان ايدي المطور الجديد",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "Addadmin";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text and $sttings['data'] == "Addadmin" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"✔تم رفع الادمن وتم التنزيل",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
bot("sendmessage",[
"chat_id"=>$text,
"text"=>"✔تم رفعك ادمن بالبوت",
]);
$sttings['sudo'] = "$text";
unset($sttings['data']);
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "Sender"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'🗣:اهلا بك في قسم الاذاعه',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'اذاعه توجيه' ,'callback_data'=>"SendQ1"],['text'=>'اذاعه رساله' ,'callback_data'=>"SendQ2"]],
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
}
if($data == "All Ch"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :اهلا بك في قسم الاشتراك الاجباري ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>"اضف  عامہ 1️⃣ $em " ,'callback_data'=>"AddCh1"],['text'=>"حذف  عامہ 1️⃣ $em ",'callback_data'=>"DelCh1"]],
[['text'=>"اضف  عامہ 2️⃣ $em " ,'callback_data'=>"AddCh2"],['text'=>"حذف  عامہ 2️⃣ $em " ,'callback_data'=>"DelCh2"]],
[['text'=>"عرض عامہ" ,'callback_data'=>"ALLCH"]],
[['text'=>"عامہ $em 🔝" ,'callback_data'=>"⛔⛔"]],
[['text'=>"اضف  خاصہ 1️⃣ $em " ,'callback_data'=>"AddCh11"],['text'=>"حذف  خاصہ 1️⃣ $em " ,'callback_data'=>"DelCh11"]],
[['text'=>"اضف  خاصہ 2️⃣ $em ",'callback_data'=>"AddCh22"],['text'=>"حذف  خاصہ 2️⃣ $em " ,'callback_data'=>"DelCh22"]],
[['text'=>"عرض خاصہ" ,'callback_data'=>"ALLCH1"]],
[['text'=>"خاصہ $em 🔝" ,'callback_data'=>"⛔⛔"]],
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
}
if($data == "AddCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي قناتك الخاصه $em :",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "okch131";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text && $sttings['data'] == "okch131" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم اضافه القناة [$text]
$em :قم برفع البوت في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['ch11'] = "$text";
$sttings['data'] = "sd";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "DelCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'MRAX'],['text'=>'نعم','callback_data'=>'OKDelCh11']],
]])
]);
}
if($data == "OKDelCh11"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
unset($sttings['ch11']);
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "AddCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ارسل ايدي قناتك الخاصه $em ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "okch229";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch229" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم اضافه القناة [$text]
$em :قم برفع  البوت في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['ch22'] = "$text";
$sttings['data'] = "stop0909";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "DelCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تأكيد', 'callback_data'=>'MRAX'],['text'=>'الغاء','callback_data'=>'OKDelCh22']],
]])
]);
}
if($data == "OKDelCh22"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
unset($sttings['ch22']);
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "ALLCH1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هذه قائمة القنوات الأشتراك الاجباري 
$em :القناة الاولى ".$sttings['ch11']."
$em :القناة الثانية  ".$sttings['ch22'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
}
if($data == "AddCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'✔:الآن قم بارسال معرف قناتك مع @',
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "okch121";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch121" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم اضافه القناة [$text]
$em :قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['ch1'] = "$text";
$sttings['data'] = "stopnnn";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "DelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'لا', 'callback_data'=>'MRAX'],['text'=>'نعم','callback_data'=>'OKDelCh1']],
]])
]);
}
if($data == "OKDelCh1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
️[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
unset($sttings['ch1']);
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "AddCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :الآن قم بارسال معرف قناتك مع @",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "okch244";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text and $sttings['data'] == "okch244" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم اضافه القناة [$text]
$em :قم برفع البوت ادمن في القناة",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['ch2'] = "$text";
$sttings['data'] = "stop77";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "DelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هل أنت متأكد من أنك تريد حذف القناة ",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'تأكيد', 'callback_data'=>'MRAX'],['text'=>'الغاء','callback_data'=>'OKDelCh2']],
]])
]);
}
if($data == "OKDelCh2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم حذف القناة الاولى من الإشتراك الإجباري",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
unset($sttings['ch2']);
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "ALLCH"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :هذه قائمة القنوات الأشتراك الاجباري 
$em :القناة الاولى ".$sttings['ch1']."
$em :القناة الثانية  ".$sttings['ch2'],
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
}
if($data == "SendQ1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "okoo";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($message and $sttings['data'] == "okoo" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم توجيه الرساله",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
for($i=0;$i<count($MRAX2); $i++){
bot('forwardMessage', [
'chat_id'=>$MRAX2[$i],
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
$sttings['data'] = "stop";
file_put_contents("MRAX.json",json_encode($sttings));
}
}
if($data == "SendQ2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :ارسل رسالتك وسيتم توجيهها لـ [ $SAll ] ",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['data'] = "oksend";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text and $sttings['data'] == "oksend" and $from_id == $admin){
bot("sendmessage",[
"chat_id"=>$chat_id,
"text"=>"$em :تم توجيه الرساله",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
for($i=0;$i<count($MRAX2); $i++){
bot('sendMessage', [
'chat_id'=>$MRAX2[$i],
'text'=>$text
]);
$sttings['data'] = "notsend";
file_put_contents("MRAX.json",json_encode($sttings));
}
}
if($data == "mem"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :عدد مشتركين البوت  [ $SAll ]",
 'reply_markup'=>json_encode([ 
 'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
}
if($data == "ch1"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم تفعيل الاشعارات",
 'reply_markup'=>json_encode([ 
  'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['come'] = "welcome";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($text == "/start" and $sttings['come'] == "welcome" and $from_id != $admin){
bot("sendmessage",[
"chat_id"=>$admin,
"text"=>"
$em :عضو جديد قام بالدخول الى البوت 
$em :الاسم : [$name](tg://user?id=$from_id) 
$em :المعرف : [@$username](tg://user?id=$from_id)  
$em :الايدي:  [$from_id](tg://user?id=$from_id)  
$em :عدد المشتركين : { $SAll }  ",
 'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>'true',
]);
}
if($data == "ch2"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم تعطيل الاشعارات ",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['come'] = "nowelcome";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($data == "ON"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم تفعيل التوجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['message'] = "textwelcome";
file_put_contents("MRAX.json",json_encode($sttings));
}
if($message and $sttings['message'] == "textwelcome" and $from_id != $admin){
bot('forwardMessage', [
'chat_id'=>$admin,
'from_chat_id'=>$from_id,
'message_id'=>$message->message_id
]);
}
if($message and $sttings['message'] == "MRAX" and $from_id == $admin){
bot('sendMessage',[
'chat_id'=>$message->reply_to_message->forward_from->id,
'text'=>$text,
]);
}
if($data == "Of"){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"$em :تم تعطيل التوجيه",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[['text'=>'🔙' ,'callback_data'=>"MRAX"]],
]])
]);
$sttings['message'] = "nowellcome";
file_put_contents("MRAX.json",json_encode($sttings));
}
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$user_id = $message->from->id;
$ufname = $update->message->from->first_name;
$type = $message->chat->type;
$title = $message->chat->title;
$repid = $message->reply_to_message->from->id;
$repmid = $message->reply_to_message->message_id;
$repufname = $message->reply_to_message->from->first_name;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$leftid = $message->left_chat_member->id;
$newid = $message->new_chat_member->id;
$newufname = $message->new_chat_member->first_name;
$update = json_decode(file_get_contents('php://input'));
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$botim="يوزر";//يوزر البوت
$soat = date('H:i', strtotime('0 hour'));
$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$gif = $message->animation;
$doc = $message->document;
$title = $message->chat->title;
$fadmin = $message->from->id;
$lang = $message->from->language_code;
$from = $message->from;
$id = $message->reply_to_message->from->id;
$message_id = $message->reply_to_message->message_id;
$from_user_first_name = $message->reply_to_message->from->first_name;

$new_chat_members = $message->new_chat_member->id;
$lan = $message->new_chat_member->language_code;
$ism = $message->new_chat_member->first_name;
$username = $message->from->username;
$first_name = $message->from->first_name;
$is_bot = $message->new_chat_member->is_bot;
$step = file_get_contents("stat/$chat_id.step");
$guruhlar = file_get_contents("stat/group.list");
$userlar = file_get_contents("stat/user.list");
mkdir("warn");
mkdir("stat");
$joinchatid = $update->chat_join_request->chat->id;
$chatjoinname = $update->chat_join_request->chat->title;
$chatjoinuser = $update->chat_join_request->chat->username;
$chatjoinlink = $update->chat_join_request->chat->invite_link;
$qb= $update->chat_join_request->from->id;
$fname= $update->chat_join_request->from->first_name;
$ty = $update->chat_join_request->chat->type;
if($ty == "channel" ){
bot("approveChatJoinRequest",[
"chat_id"=>$joinchatid,
"user_id"=>$qb,
]);
bot('sendmessage',[
'chat_id'=>$qb,
'text'=>"👋اهلا بك عزيزي <b>$ism</b>
لقد <b>$chatjoinname</b> تم الموافقة على طلبك للانضمام إلى القناة بنجاح🤭 

<b>@AX_GB</b> - شكرا على استخدامك بوت اكس🤩",
'parse_mode'=>'html',
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"➕قناة البوت","url"=>"https://t.me/AX_GB"],],
]
]),
]);
}

    if (($new_chat_members != NUll)&&($is_bot!=true)) {
  if((stripos($lan,"fa")!== false) or (stripos($lan,"ar")!==false)){
      $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
    ]);
    }else{
      $test = "<b>👋Salom</b> <a href='tg://user?id=$new_chat_members'>$ism</a> ,<b>$title</b> مرحبا بكم في مجموعتنا!n\n\😉";
       bot('sendmessage',[
       'chat_id'=>$chat_id,
       'text'=>$test,
       'parse_mode'=>'html'
     ]);
   }
    }

if(isset($text1)){
  if($cty == "group" or $cty == "supergroup"){
    if(stripos($guruhlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/group.list","$guruhlar\n$chat_id");
    }
  }else{
   $userlar = file_get_contents("stat/user.list");
   if(stripos($userlar,"$chat_id")!==false){
    }else{
    file_put_contents("stat/user.list","$userlar\n$chat_id");
   }
  }
 }
  
 



    if (($new_chat_members != NUll)&&($is_bot!=false)) {
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
   $vaqti = strtotime("+999999999999 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $new_chat_members,
      'until_date'=> $vaqti,
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "❗️<b>يمكن للمسؤولين فقط إضافة الروبوتات إلى المجموعة!</b>",
      'parse_mode' => 'html'
  ]);
}
}


if($text1 == "/start" or $text1 == "/start@isdodobot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$st = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>تم تفعيل الجروب خاص فيك</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
    $stt = $st->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$stt,
]);
}else{
$sta = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "<b>اهلا بك عزيزي</b>👋
فى بوت <b>سوفة اقوم بحذف الاعلانات الخ... </b> فى المجموعات👨🏻‍✈ 
أقوم بمسح روابط والخروج في المجموعات، وأقبل طلبات الانضمام إلى القنوات والمجموعات تلقائيًا

انضممت إلى المجموعة حتى أتمكن من العمل <b>قم برفعي ادمن </b>😄\n\n🤖يوزر البوت: @isdodobot\n\n👨‍💻مبرمج: @O_1_W",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
  'reply_markup'=>json_encode([   
   'inline_keyboard'=>[   
       [['text'=>'⚠️الاوامر', 'callback_data' => "stat"],['text'=>'📊إحصائيات', 'callback_data' => "stat1"]],
          [['text'=>'➕ إضافة الى الجروب','url'=>'telegram.me/isdodobot?startgroup=new']]
]   
]),
]);
}
}

if($text1 == "Lg"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$guruhlar,
    ]);
}


if($text1 == "Lu"&&$fadmin==$admin){
  bot('sendmessage',[
    'chat_id'=>$admin,
    'text'=>$userlar,
    ]);
}

if($data=="stat1"){
$gr = substr_count($guruhlar,"\n"); 
$us = substr_count($userlar,"\n"); 
$obsh = $gr + $us;
 $soat = date('H:i', strtotime('0 hour'));
$bugun = date('d-M Y',strtotime('0 hour'));
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🌐<b>احصايات البوت:</b>\n\n👤مستخدمين البوت: <b>$us</b>\n👥مجموعات: <b>$gr</b>\n📣عام: <b>$obsh</b>\n\n$bugun $soat",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
  [['text'=>'تحديث', 'callback_data' => "stat1"]],
  [['text'=>'➕ إضافة الى الجروب','url'=>'telegram.me/isdodobot?startgroup=new']]
]
]),
]);
}

if((stripos($mtext,"1001")!==false) and $fadmin==$admin){
      $lx=explode("\n",$mtext);
      $idsi = $lx[0];
  $lin  = bot('exportchatinvitelink',[
       'chat_id'=>"-$idsi",
       ]);
  $link = $lin->result;
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"$link",
     ]);
}
     
if($data=="stat"){
   bot('editMessageText',[
   'chat_id'=>$chat_id2,
    'message_id'=>$message_id2,
    'text'=> "🏁<b>يمكن استخدامها من قبل مسؤولي المجموعة الاوامر:</b>

<b>كتم</b> - يجعل عضو المجموعة يقرأ فقط;
<b>فك كتم</b> - يحصل على تقييد من الكتابة فى المجموعة;
<b>حظر</b> - إزالة عضو المجموعة من المجموعة;
<b>تحذير</b> - إعطاء إنذار لعضو في المجموعة وعندما يصل عدد التحذيرات إلى 3 يتم حذفه من المجموعة عقابا له;
<b>مسح تحذير</b> - إزالة التحذيرات من أحد أعضاء المجموعة;
<b>حظر</b>  - إزالة عضو من المجموعة من ، ولا يمكنه إعادة الدخول;
<b>حظر الجروب</b> - يأخذ من الفرقة;
<b>ثبت</b> - تثبيت الرسالة في الشات;
<b>رفع ادمن</b> - رفع العضو فى المجموعة مشرف;
<b>تنزيل مشرف</b> - تنزيل من الاشراف.

- يقوم الروبوت بالترحيب بأعضاء المجموعة الجدد. يقوم عضو المجموعة بالإعلان للمجموعة <b>الروابط</b> ارسل فى المجموعة <b>ايتم حظر</b> إذا كتب كلمة غير الأقة، فسيقوم الروبوت بحذف الرسالة وتقييد المستخدم.\n\n<b>👨‍💻مبرمج البوت:</b>  <a href='tg://user?id=5414131492'>@O_1_W</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['url' => 'https://telegram.me/isdodobot?startgroup=new', 'text' => "➕ إضافة الى الجروب"],],
]
]),
]);
}

if($text1 == "تفعيل" or $text1 == "/الاوامر@isdodobot"){
if($cty == "supergroup" or $cty == "group"){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$bs = bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"<b>تم تفعيل الجروب خاص فيك</b>",
'parse_mode' => 'html'
]);
  bot('deleteMessage', [
  'chat_id' => $chat_id,
  'message_id' => $mesid,
  ]);
  $bss = $bs->result->message_id;
  bot('deleteMessage',[
 'chat_id'=> $chat_id,
 'message_id'=>$bss,
]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=> "🏁<b>يمكن استخدامها من قبل مسؤولي المجموعة الاوامر:</b>

<b>كتم</b> - يجعل عضو المجموعة يقرأ فقط;
<b>فك كتم</b> - يحصل على تقييد من الكتابة فى المجموعة;
<b>حظر</b> - إزالة عضو المجموعة من المجموعة;
<b>تحذير</b> - إعطاء إنذار لعضو في المجموعة وعندما يصل عدد التحذيرات إلى 3 يتم حذفه من المجموعة عقابا له;
<b>مسح تحذير</b> - إزالة التحذيرات من أحد أعضاء المجموعة;
<b>حظر</b>  - إزالة عضو من المجموعة من  ولا يمكنه إعادة الدخول;
<b>حظر الجروب</b> - يأخذ من الفرقة;
<b>ثبت</b> - تثبيت الرسالة في الشات;
<b>رفع ادمن</b> - رفع العضو فى المجموعة مشرف;
<b>تنزيل مشرف</b> - تنزيل من الاشراف.

- يقوم الروبوت بالترحيب بأعضاء المجموعة الجدد. يقوم عضو المجموعة بالإعلان للمجموعة <b>الروابط</b> ارسل فى المجموعة <b>ايتم حظر</b> إذا كتب كلمة غير الأقة، فسيقوم الروبوت بحذف الرسالة وتقييد المستخدم.\n\n<b>👨‍💻مبرمج البوت:</b>  <a href='tg://user?id=5414131492'>@O_1_W</a>",
'parse_mode' => 'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(
['inline_keyboard' => [
[['url' => 'https://telegram.me/isdodobot?startgroup=new', 'text' => "➕ إضافة الى الجروب"],],
]
]),
]);
}
}

  



    if($text1 == "اكس"){
      bot('sendmessage',[
        'chat_id'=>$chat_id,
        'text'=>"💝مبرمج السورس",
        'reply_markup'=>json_encode([   
        'inline_keyboard'=>[   
            [['text'=>'انقر هنا', 'callback_data' => "اكس"]]
]   
]),
]);
}

    if($data == "اكس"){
      bot('answerCallbackQuery',[
       'callback_query_id'=>$cqid,
       'text'=> "👨‍💻مبرمج سورس هو مستر اكس @O_1_W",
       'show_alert'=>true
        ]);
    }


if((stripos($mtext,"latifa")!==false) or (stripos($mtext,"латифа")!==false)){
    $latif = file_get_contents("latifa.txt");
  $latifa = explode("✅",$latif);
  $soz = $latifa[rand(0,count($latifa)-1)];
  $a=json_encode(bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$soz,
   ]));
}

		if(stripos($mtext,"ساعة") !== false){
		$soat = date('H:i', strtotime('2 hour'));
  $text = "🇪🇬⏰الآن ساعة: *$soat*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}

		
		if(stripos($mtext,"sana") !== false){
        $bugun = date('d-M Y',strtotime('0 hour'));
  $text = "🇪🇬📆Bugungi sana: *$bugun*";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"ايدي") !== false){
  $text = "*⚠️🆔ايدي خاص فيك:* $fadmin";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(stripos($mtext,"ايدي جروب") !== false){
  $text = "*⚠️🆔ايدي جروبك:* $chat_id";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode'=> 'markdown'
  ]));
}

if(isset($doc) or isset($gif)){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}
}

if((mb_stripos($mtext,"#AX_GB") !== false)){ 
bot('SendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$mid,
'text'=>"Xabaringiz adminga yetkazildi!",
]);
}
if((mb_stripos($mtext,"#AX_GB") !== false) or (mb_stripos($mtext,"AX_GB")!==false) or (stripos($mtext,"blogger")!==false) or (mb_stripos($mtext,"admin")!==false) or (mb_stripos($mtext,"Laziz")!==false)){ 
bot('SendMessage',[
'chat_id'=>$admin,
'parse_mode'=>'html',
'text'=>"✉<b>$title(</b>  $chat_id  <b>) لقد تم ذكرك في المجموعة:</b>\n<code>$mtext</code>\n  <b>معلومات عن المرسل: </b>
👤<b>اسم شخص:</b>  <a href='tg://user?id=$fadmin'>$first_name</a>
🆔<b>ID</b>شخص: $fadmin
🔅<b>يوزر المرسل:</b> @$username ", null, false
      ]);
   }



  if((stripos($mtext,"reo")!==false) and $fadmin == $admin){
      $sx=explode("\n",$mtext);
      $useid = $sx[2];
      $chatidsi  = $sx[1];
      $vaqti = $sx[3];
      $minut = strtotime("+$vaqti minutes");
   bot('restrictChatMember', [
      'chat_id' => "-$chatidsi",
      'user_id' => $useid,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "⭕️ <a href='tg://user?id=$useid'>مستخدم</a> -$chatidsi guruhida <b>$vaqti</b> ga <b>يقرأ فقط</b> rejimiga tushdirildi!",
      'parse_mode' => 'html'
  ]);
}

  if($text1 == "تفاعل" or  $text1 == "ajsjnanan" or $text1 == "ajjajahb" or $text1 == "sjjsnanan"){
  $input = array("Ok!!!","جوفا🍐","Sok","👌","Tok⚡","😏","☺","👍","Ok");
  $rand=rand(0,8);
  $soz="$input[$rand]";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$soz,
  ]));
}

if($text1 == "كتم" or $text1 == "اكتمك" or $text1 == "اكتم" or $text1 == "كت"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $minut = strtotime("+99999999999999 minutes");
  bot('restrictChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date' => $minut,
      'can_send_messages' => false,
      'can_send_media_messages' => false,
      'can_send_other_messages' => false,
      'can_add_web_page_previews' => false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "⭕️ <a href='tg://user?id=$id'>$from_user_first_name</a> لقد <b>تم كتمك من قبل مالك</b> المجموعة لى الغاء كتمك تواصل مع لادمن!",
      'parse_mode' => 'html'
  ]);
}
}

    if($text1 == "حظر"  or  $text1 == "ح"  or $text1 == "/حظر"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  $vaqti = strtotime("+1 minutes");
  bot('kickChatMember', [
      'chat_id' => $chat_id,
      'user_id' => $id,
      'until_date'=> $vaqti,
  ]);
  bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "⭕️ <a href='tg://user?id=$id'>$from_user_first_name</a> لقد تم  <b>حظرك</b> من مجموعة!",
      'parse_mode' => 'html'
  ]);
}
}

if($text1 =="حظر" or $text1 == "Xayr"&&$fadmin==$admin){
       $vaqti = strtotime("+10800000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "⭕️ <a href='tg://user?id=$id'>$from_user_first_name</a> لقد تم حظرك <b>nمن</b> المجموعة",
        'parse_mode'=>'html'
    ]);
  }

  if((stripos($capt,"https://")!==false)  or (stripos($capt,"http://")!==false) or (stripos($capt,"@")!==false) or (stripos($capt,"bot?start=")!==false)  or (stripos($mtext,"bot?start=")!==false)  or  
(stripos($mtext,"@")!==false)  or  
(stripos($mtext,"t.me")!==false)  or  
(stripos($mtext,"telegram.me")!==false)  or  
(stripos($mtext,"http://") !==false) or  (stripos($mtext,"https://")!==false)){
  if((stripos($capt,"☣")!==false) or (stripos($mtext,"☣")!==false)){
  }else{
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="member"){
    $minut = strtotime("+تم تقيدك لى 5 دقايقes");
    bot('restrictChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
        'chat_id' => $chat_id,
        'message_id' => $mid,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⭕️ <a href='tg://user?id=$fadmin'>$first_name</a> siz <b>تم تقيدك لى 5 دقايق</b>ga <b>يقرأ فقط</b> وضع.\n⚠ <b>سبب:</b> <i>دعاية!</i> ",
        'parse_mode' => 'html'
    ]);
}
}
  }

    if((stripos($mtext,"dalbayop")!==false)  or (stripos($mtext,"سكس")!==false)  or (stripos($mtext,"افلام سكس")!==false) or (stripos($mtext,"اباحى")!==false) or (stripos($mtext,"بوت اباحى")!==false) or (stripos($mtext,"xxx")!==false)  or  (stripos($mtext,"خماط")!==false) or  (stripos($mtext,"حرامي")!==false) or (stripos($mtext,"seks")!==false) or (stripos($mtext,"تسرق")!==false) or (stripos($mtext,"حرامي ملفات")!==false) or (stripos($mtext,"انيكك")!==false) or (stripos($mtext,"كل خره")!==false) or (stripos($mtext,"كس اختك")!==false) or (stripos($mtext,"كسمك")!==false)  or  (stripos($mtext,"ينعل ابوك")!==false) or  (stripos($mtext,"ينعل ابوك")!==false) or (stripos($mtext,"كس اختك")!==false) or (stripos($mtext,"كس اخوك")!==false) or (stripos($mtext,"كس ابوك")!==false) or (stripos($mtext,"اكرهك")!==false) or (stripos($mtext,"ليش تسرق")!==false) or (stripos($mtext,"خول")!==false) or (stripos($mtext,"ياخول")!==false) or  (stripos($mtext,"متناك")!==false)  or  (stripos($mtext,"لبوة")!==false) or  (stripos($mtext,"كسم عرب")!==false) or (stripos($mtext,"بكرهك")!==false) or (stripos($mtext,"افلام اباحية")!==false) or (stripos($mtext,"كسم ابوك")!==false) or (stripos($mtext,"كسم امك")!==false) or (stripos($mtext,"تهايط")!==false) or  (stripos($mtext,"ورع")!==false)  or  (stripos($mtext,"ياورع")!==false) or  (stripos($mtext,"قحبة")!==false) or (stripos($mtext,"يا قحبة")!==false) or (stripos($mtext,"انيكك ياخول")!==false) or (stripos($mtext,"كسم اختك")!==false) or (stripos($mtext,"ينعلك لله")!==false) and $fadmin !== $admin){
    $gett = bot('getChatMember', [
   'chat_id' => $chat_id,
   'user_id' => $fadmin,
   ]);
  $get = $gett->result->status;
  if($get =="member"){
     $minut = strtotime("+108000000 minutes");
    bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $fadmin,
        'until_date' => $minut,
        'can_send_messages' => false,
        'can_send_media_messages' => false,
        'can_send_other_messages' => false,
        'can_add_web_page_previews' => false
    ]);
    bot('deleteMessage', [
       'chat_id' => $chat_id,
       'message_id' => $mid
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "⭕️ <a href='tg://user?id=$fadmin'>$first_name</a> <b>تم تقيدك لى 5 دقايق</b>انتظر <b>تم</b> وضعك فى وضع القرأه.\n⚠ <b>سبب:</b> <i>نشر اعلان</i> ",
        'parse_mode' => 'html'
    ]);
}
}

 if($text1 == "رفع ادمن" or $text1 == "مدير"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> أهنئك، أنت مسؤول <b>المجموعة❗️</b>",
    'parse_mode'=>'html'
  ]);
}
}

   if($text1 == "تنزيل مشرف" or $text1 == "انزل"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get == "administrator" or $get == "creator"){
bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>false,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>false,
    'can_invite_users'=>false,
    'can_restrict_members'=>false,
    'can_pin_messages'=>false,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> لم تعدً مسؤولاً <b>عن المجموعة</b>❗️",
    'parse_mode'=>'html'
  ]);
}
}

  if($text1 == "فك كتم" or $text1 == "مكتوم" or $text1 == "فك"){
 $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('restrictChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_send_messages'=>true,
    'can_send_media_messages'=>true,
    'can_send_other_messages'=>true,
    'can_add_web_page_previews'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"☑ <a href='tg://user?id=$id'>$from_user_first_name</a> لقد تم فك عنك <b>الكتم يمكنك كتابة!</b>\ آمل أنك <b>لن تنتهك</b> القواعد الخاصة بى مجموعة❗️",
    'parse_mode'=>'html'
  ]);
}
}

if($text1=="Pmadd"&&$fadmin==$admin) {
  bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>false
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅ <a href='tg://user?id=$id'>$from_user_first_name</a> أهنئكم يا جماعة <b>بدون مسؤول❗️</b>",
    'parse_mode'=>'html'
  ]);
}

if($text1=="Pmme"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$admin,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if($text1=="Pmu"&&$fadmin==$admin) {
    bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$id,
    'can_change_info'=>true,
    'can_post_messages'=>false,
    'can_edit_messages'=>false,
    'can_delete_messages'=>true,
    'can_invite_users'=>true,
    'can_restrict_members'=>true,
    'can_pin_messages'=>true,
    'can_promote_members'=>true
  ]);
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  $ms = bot('sendmessage',[
    'chat_id'=> $chat_id,
    'text'=>"✅",
    'parse_mode'=>'html'
  ]);
    $nat = $ms->result->message_id;
    bot('deleteMessage', [
    'chat_id' => $chat_id,
    'message_id' => $nat,
  ]);
    bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
}

if ($text1=='امسح'&&$fadmin==$admin) {
   bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$mesid
  ]);
  bot('deleteMessage', [
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
  }

if($text1 == "pin" or $text1 == "ثبت" or $text1 == "تثبيت" or $text1 == "PIN" or $text1 == "piN" or $text1 == "مثبت" or $text1 == "pIn" or $text1 == "pIN"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
  bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
  ]);
}
}

if($text1=="bye"&&$fadmin==$admin) {
  bot('sendmessage', [
      'chat_id' => $chat_id,
      'text' => "<b>هلا فيك</b>.",
      'parse_mode' => 'html'
  ]);
  bot('leaveChat',[
    'chat_id'=>$chat_id
  ]);
}

if((stripos($mtext,"Sw")!==false) and $fadmin == $admin){
      $sx=explode("\n",$text1);
      $matn = $sx[2];
      $idsi  = $sx[1];
  bot('sendMessage',[
       'chat_id'=>$idsi,
       'text'=>$matn,
       'parse_mode'=>'markdown',
       'disable_web_page_preview' => true,
       ]);
   bot('sendMessage',[
       'chat_id'=>$admin,
       'text'=>"✅",
       ]);
  }

 if($text1 == "احظرو" or $text1 == "حظر نهائي" or $text1== "/Ban" or  $text1 == "/ban"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
       $vaqti = strtotime("+108000000 minutes");
      bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "⭕️ <a href='tg://user?id=$id'>$from_user_first_name</a> تم <b>حظر</b> شخص",
        'parse_mode'=>'html'
    ]);
  }
  }

 if($text1 == "حظر"  or  $text1 == "/حظر"){
$gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
    bot('unbanChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
    ]);
    bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
    bot('sendMessage', [
        'chat_id'=>$chat_id,
        'text' => "⭕️ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>تم</b>الحظر ياوحش",
        'parse_mode'=>'html'
    ]);
}
}

if($text1 == "تحذير" or $text1 == "تحذير" or $text1 == "/تحذير"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
$warn = file_get_contents("warn/$chat_id&$id.dat");
if($warn){
$warn +=1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
if($warn !=3){
  bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
$oldi = bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>تلقى تحذيرا.</b>\nلقد تم تحذيرك انتباة  مره اخرة لديك  <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}else{
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
 bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> لقد تجاهل حتى الآن التحذيرات الموجهة إليه <b>وكعقاب له</b>, سيتم طرده من <b>المجموعة!</b>",
  'parse_mode'=>'html'
  ]);
 $vaqti = strtotime("+10800000 minutes");
  bot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $id,
        'until_date' => $vaqti,
      ]);
 $warn = 0;
file_put_contents("warn/$chat_id&$id.dat","$warn");
}
}else{
$warn = 1;
file_put_contents("warn/$chat_id&$id.dat","$warn");
bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> <b>تلقى تحذيرا.</b>\nلقد تم تحذيرك انتباة  مره اخرة لديك  <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
}
}
}

  if($text1 == "مسح تحذير" or $text1 == "مسح تحذير" or $text1 == "/مسح تحذير"){
  $gett = bot('getChatMember', [
'chat_id' => $chat_id,
'user_id' => $fadmin,
]);
$get = $gett->result->status;
if($get =="administrator" or $get == "creator"){
 $warn = 0;
 file_put_contents("warn/$chat_id&$id.dat","$warn");
 bot('sendChatAction',['chat_id'=>$chat_id,'action'=>"typing"]);
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"⚠ <a href='tg://user?id=$id'>$from_user_first_name</a> تمت <b>إزالة كافة</b> التحذيرات من.\nلقد تم تحذيرك انتباة  مره اخرة لديك  <b>$warn</b>/3.",
  'parse_mode'=>'html'
  ]);
} 
}
  
$replyik = $message->reply_to_message->text;
    $yubbi = "📨أدخل نص الرسالة المراد إرسالها. نوع الرسالة";

    if($text1 == "/sendu" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","user");
    }

    if($step == "user" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Userlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }
      
       if($text1 == "/sendg" and $chat_id == $admin){
      ty($chat_id);
      bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>$yubbi,
      ]);
      file_put_contents("stat/$chat_id.step","guruh");
    }

    if($step == "guruh" and $chat_id == $admin){
      if($text1 == "/otmen"){
      file_put_contents("stat/$chat_id.step","");
      }else{ 
      $idszs=explode("\n",$guruhlar);
      foreach($idszs as $idlat){
    $guruu =  bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>$text1,
      'parse_mode'=>'markdown',
      'disable_web_page_preview' => true,
      ]);
      }
        if($guruu){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Guruhlarga yuborildi!",
          ]);      
      file_put_contents("stat/$chat_id.step","");
        }
      }
    }

$iniffo = description;
           $obh = file_get_contents('https://fa.weather.town/uz/forecast/uzbekistan/bukhara-province/wobkent/');
$ex = explode('title="درجة حرارة الهواء"',$obh);
$exi = explode('right-container',$ex[1]);
$ubk = str_replace($exi[1],' ',$ex[1]);
$ubk1 = str_replace('dir="ltr">',' ',$ubk);
$ubk2 = str_replace('<div class="informer-main-page__container fleft right-container',' ',$ubk1);
$ubk3 = str_replace('&deg;C</div>',' ',$ubk2);
$ubk4 = str_replace('</div>',' ',$ubk3);
$obhavo = trim("$ubk4");
      $kun3 = date('N'); 
      $yil =date('Y');
      $mast ="@AX_GB"; 
      $kun =date('d', strtotime('0 hour')); 
      $soat=date('H:i', strtotime('0 hour'));
      $soats =date('H:i', strtotime('0 hour'));     
      $hafta="1Dushanba1 2Seshanba2 3Chorshanba3 4Payshanba4 5Juma5 6Shanba6 7Yakshanba7"; 
      $ex=explode("$kun3",$hafta); 
      $hafta1="$ex[1]";
      $oy = date('F', strtotime('0 hour'));
$us = bot('getChatMembersCount',[
'chat_id'=>$chat_id,
]);
$count = $us->result;

if((stripos($mtext,"درجة حرارة الهواء") !== false) or	
	(stripos($mtext,"havoharorati") !== false)){	
  $text = "🇪🇬🔥الآن درجة حرارة الهواء: $obhavo °C";
  $a=json_encode(bot('sendmessage',[
   'reply_to_message_id'=>$mesid,
   'chat_id'=>$chat_id,
   'text'=>$text,
   'parse_mode' => 'markdown'
  ]));
}
   $iniffo = "🙂 $ctitle مرحبا بكم في مجموعتنا!
😊أتمنى لك يومًا سعيدًا ومباركًا!
🗓يوم: $kun-يوليو 2023-سنة $hafta1
⌚️ساعة: $soat 
⛅درجة حرارة الهواء: $obhavo °C
👥أعضاء المجموعة: $count شخص
😎بوت @isdodobot
 ";
   bot('setChatDescription',[
    'chat_id'=>$cid,
    'description'=>$iniffo,
  ]);
/*غير الحقوق واثبت انك فاشل
اذا تريد تنقل اذكر اسمي او اسم قناتي */

/*====================
CH : @AX_GB
DEV : @O_1_W
Translator : @AX_GB
/*====================*/