<?php  
/* * * * * * * * * * * * * * * * * * * * * * * 
 *   Configuration v.1.1 for LandingPage:    *
 *        Created for comsifi.com.ua         *
 *   Last edition by 22.10.2019, 08:54:30    *
 *            ip: 134.249.190.187            *
 * * * * * * * * * * * * * * * * * * * * * * */

session_start();
require_once("config/class/browser.class.php");
require_once("config/class/functions.class.php");
require_once("config/class/lands.class.php");
require_once("config/data/define.php");
$product = "Курси німецької мови";
$logs = "1";
$og_tag = "0";
$valuta = "грн";
$price_new = "350";
$price_old_select = "0";
$price_old = "460";
$country_script = "UA";
$timezone = "Europe/Kiev";
$mask_phone = "-";
$sending_html = "Доставка наложенным платежом";
$head_index64 = "PCEtLSBHbG9iYWwgc2l0ZSB0YWcgKGd0YWcuanMpIC0gR29vZ2xlIEFuYWx5dGljcyAtLT4NCjxzY3JpcHQgYXN5bmMgc3JjPSJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbS9ndGFnL2pzP2lkPVVBLTE1MDM2Njk3My0xIj48L3NjcmlwdD4NCjxzY3JpcHQ+DQogIHdpbmRvdy5kYXRhTGF5ZXIgPSB3aW5kb3cuZGF0YUxheWVyIHx8IFtdOw0KICBmdW5jdGlvbiBndGFnKCl7ZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKTt9DQogIGd0YWcoJ2pzJywgbmV3IERhdGUoKSk7DQoNCiAgZ3RhZygnY29uZmlnJywgJ1VBLTE1MDM2Njk3My0xJyk7DQo8L3NjcmlwdD4=";
$body_index64 = "";
$body2_index64 = "";
$head_thanks64 = "PCEtLSBHbG9iYWwgc2l0ZSB0YWcgKGd0YWcuanMpIC0gR29vZ2xlIEFuYWx5dGljcyAtLT4NCjxzY3JpcHQgYXN5bmMgc3JjPSJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbS9ndGFnL2pzP2lkPVVBLTE1MDM2Njk3My0xIj48L3NjcmlwdD4NCjxzY3JpcHQ+DQogIHdpbmRvdy5kYXRhTGF5ZXIgPSB3aW5kb3cuZGF0YUxheWVyIHx8IFtdOw0KICBmdW5jdGlvbiBndGFnKCl7ZGF0YUxheWVyLnB1c2goYXJndW1lbnRzKTt9DQogIGd0YWcoJ2pzJywgbmV3IERhdGUoKSk7DQoNCiAgZ3RhZygnY29uZmlnJywgJ1VBLTE1MDM2Njk3My0xJyk7DQo8L3NjcmlwdD4=";
$body_thanks64 = "";
$body2_thanks64 = "";
$value1_html = "Дополнительное поле 1";
$value2_html = "Дополнительное поле 2";
$value3_html = "Дополнительное поле 3";
$mail_type = "";
$email = "comsifi.com.ua@gmail.com";
$sender = "Имя_отправителя <noreply@{$domen}>";
$subject = "Заказ товара - {$product}";
$message = "<table border='0'>
<tbody>
<tr>
<td colspan='2' height='40'>
<p align='center'><em>Информация о покупателе:</em></p>
</td>
</tr>
<tr>
<td><strong>IP покупателя:</strong></td>
<td>{$remote_addr}</td>
</tr>
<tr>
<td><strong>Имя Internet-хоста:</strong></td>
<td>{$remote_host}</td>
</tr>
<tr>
<td><strong>Использование прокси:</strong></td>
<td>{$proxy}</td>
</tr>
<tr>
<td><strong>Страна (по IP):</strong></td>
<td>{$country_code}</td>
</tr>
<tr>
<td><strong>Город (по IP):</strong></td>
<td>{$city}</td>
</tr>
<tr>
<td><strong>Установленный язык:</strong></td>
<td>{$lang}</td>
</tr>
<tr>
<td><strong>Браузер: </strong></td>
<td>{$browser}</td>
</tr>
<tr>
<td><strong>Устройство:</strong></td>
<td>{$device}</td>
</tr>
<tr>
<td><strong>ОС:</strong></td>
<td>{$os}</td>
</tr>
<tr>
<td><strong>Время на ленде:</strong></td>
<td>{$time_in_land}</td>
</tr>
<tr>
<td><strong>Кол-во визитов:</strong></td>
<td>{$visit}</td>
</tr>
<tr>
<td valign='top'><strong>Последний визит:</strong></td>
<td>{$visit_text}</td>
</tr>
<tr>
<td><strong>Разрешение экрана:</strong></td>
<td>{$screen}</td>
</tr>
<tr>
<td><strong>Заряд батареи:</strong></td>
<td>{$batery_proc}</td>
</tr>
<tr>
<td><strong>Зарядное устройство:</strong></td>
<td>{$batery_zar}</td>
</tr>
<tr>
<td><strong>Реферер:</strong></td>
<td><a href='{$referer}' target='_blank' rel='noopener'>{$referer}</a></td>
</tr>
<tr>
<td colspan='2'>
<p align='center'><strong>UTM-метки: </strong></p>
{$utm}</td>
</tr>
<tr>
<td><strong>Комментарий к заказу: </strong></td>
<td>
<p>%comment%</p>
</td>
</tr>
</tbody>
</table>";
$comment = "";
$tele_id = "915494042";
$tele_mess = "Поступила заявка";
$seller = "";
$seller_adress = "";
$contact_phone1 = "";
$contact_phone2 = "";
$contact_phone3 = "";
$contact_email = "";
$insta = "";
$fb = "";
$vk = "";
$polit = "<h5>Защита личных данных</h5>
<p>Для защиты ваших личных данных у нас внедрен ряд средств защиты, которые действуют при введении, передаче или работе с вашими личными данными.</p>
<h5>Разглашение личных сведений и передача этих сведений третьим лицам</h5>
<p>Ваши личные сведения могут быть разглашены нами только в том случае это необходимо для: (а) обеспечения соответствия предписаниям закона или требованиям судебного процесса в нашем отношении ; (б) защиты наших прав или собственности (в) принятия срочных мер по обеспечению личной безопасности наших сотрудников или потребителей предоставляемых им услуг, а также обеспечению общественной безопасности. Личные сведения, полученные в наше распоряжение при регистрации, могут передаваться третьим организациям и лицам, состоящим с нами в партнерских отношениях для улучшения качества оказываемых услуг. Эти сведения не будут использоваться в каких-либо иных целях, кроме перечисленных выше. Адрес электронной почты, предоставленный вами при регистрации может использоваться для отправки вам сообщений или уведомлений об изменениях, связанных с вашей заявкой, а также рассылки сообщений о происходящих в компании событиях и изменениях, важной информации о новых товарах и услугах и т.д. Предусмотрена возможность отказа от подписки на эти почтовые сообщения.</p>
<h5>Использование файлов «cookie»</h5>
<p>Когда пользователь посещает веб-узел, на его компьютер записывается файл «cookie» (если пользователь разрешает прием таких файлов). Если же пользователь уже посещал данный веб-узел, файл «cookie» считывается с компьютера. Одно из направлений использования файлов «cookie» связано с тем, что с их помощью облегчается сбор статистики посещения. Эти сведения помогают определять, какая информация, отправляемая заказчикам, может представлять для них наибольший интерес. Сбор этих данных осуществляется в обобщенном виде и никогда не соотносится с личными сведениями пользователей.</p</p>
<p>Третьи стороны, включая компании Google, показывают объявления нашей компании на страницах сайтов в Интернете. Третьи стороны, включая компанию Google, используют cookie, чтобы показывать объявления, основанные на предыдущих посещениях пользователем наших вебсайтов и интересах в веб-браузерах. Пользователи могут запретить компаниям Google использовать cookie. Для этого необходимо посетить специальную страницу компании Google по этому адресу: http://www.google.com/privacy/ads/</p>
<h5>Изменения в заявлении о соблюдении конфиденциальности</h5>
<p>Заявление о соблюдении конфиденциальности предполагается периодически обновлять. При этом будет изменяться дата предыдущего обновления, указанная в начале документа. Сообщения об изменениях в данном заявлении будут размещаться на видном месте наших веб-узлов</p>
<p class='s1'>Благодарим Вас за проявленный интерес к нашей системе!</p>";
$script_pokup = "0";
$script = "1";
$auditoria = "all";
$title = "Plan 1";
$tovar = "1";
$vsego = "10";
$delay2 = "10";
$delay1 = "30";
$modal = "1";
$modal_title = "Сподобалась ця пропозиція?";
$modal_text = "Ми ознайомимо Вас з нашими послугами і повідомимо про нові пропозиції.";
$modal_text2 = "Оператор зателефонуе Вам через 15-30 хвилин.";
$button = "ЗАТЕЛЕФОНУЙТЕ МЕНІ";
$modal_delay = "30";
$thanks1 = "Вітаємо!<br>Ваше замовлення прийняте!";
$thanks2 = "Найближчим часом з вами зв'яжеться оператор для підтвердження замовлення";
$thanks3 = "Якщо ви помилилися при заповненні форми, то, будь ласка,<br>%back_link% заповніть заявку ще раз";
$upsel = "0";
$ip_block = "";
$crm = "";
$skidka = 100-floor(($price_new/$price_old)*100);
$currency=$valuta; $discount=$skidka;
date_default_timezone_set ($timezone);
$header="Content-type: text/html;charset=utf-8\r\nFrom: {$sender}\r\n";
// if (config::is_ip($remote_addr,$ip_block)==true) {include("config/blockip/index.php"); exit();}if ($_GET['page']=='404') {include("config/pages/404.php"); exit();}

/* * * * * * * * * * * * * * * * * * * * * * * 
 *        Created for comsifi.com.ua         *
 *        Оставьте отзыв        *
 *     https://facebook.com/itkondrashow     *
 * * * * * * * * * * * * * * * * * * * * * * */


?>
