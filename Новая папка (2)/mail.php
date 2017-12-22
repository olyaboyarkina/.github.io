<meta http-equiv='refresh' content='6; url=https://www.google.ru/search?newwindow=1&safe=active&ei=nsYyWvXcOqjp6ASQy4nADQ&q=bootstrap+%D1%84%D0%BE%D1%80%D0%BC%D1%8B+%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%B8%D1%82%D1%8C+%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D1%83%D1%8E+%D0%BF%D0%BE%D1%87%D1%82%D1%83+%D0%BA%D1%83%D0%B4%D0%B0+%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D1%8F%D0%B5%D1%82%D1%8C%D1%81%D1%8F+%D0%BF%D0%B8%D1%81%D1%8C%D0%BC%D0%BE&oq=bootstrap+%D1%84%D0%BE%D1%80%D0%BC%D1%8B+%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%B8%D1%82%D1%8C+%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D0%BD%D0%BD%D1%83%D1%8E+%D0%BF%D0%BE%D1%87%D1%82%D1%83+%D0%BA%D1%83%D0%B4%D0%B0+%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D1%8F%D0%B5%D1%82%D1%8C%D1%81%D1%8F+%D0%BF%D0%B8%D1%81%D1%8C%D0%BC%D0%BE&gs_l=psy-ab.3...350412.408569.0.408937.93.81.11.1.1.0.179.6851.68j13.81.0....0...1c.1.64.psy-ab..0.73.5577...0j0i22i30k1j35i39k1j0i67k1j33i160k1j33i22i29i30k1j33i21k1.0.H_Cb2v8hJ4U'>
<meta charset="UTF-8" />
<?php
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['email'])) {$email = $_POST['email']; if ($email == '') {unset($email);}}
if (isset($_POST['sub'])) {$sub = $_POST['sub']; if ($sub == '') {unset($sub);}}
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}
 
if (isset($name) && isset($email) && isset($sub) && isset($body)){
 
$address = "boyarkina.olchik@yandex.ru";
$mes = "Имя: $name \nE-mail: $email \nТема: $sub \nТекст: $body";
$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
if ($send == 'true')
{echo "Сообщение отправлено успешно, через 6 секунд Вы будете направлены на главную страницу блога <a href='http://bloggood.ru/'>BLOGGOOD.RU</a>,где сможете продолжить ваш просмотр";}
else {echo "Ошибка, сообщение не отправлено!";}
 
}
else
{
echo "Вы заполнили не все поля, вернитесь назад и заполните необходимые поля!";
}
?>