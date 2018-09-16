<?php 
// если была нажата кнопка "Отправить" 
if($_POST['submit']) {
        $title = substr(htmlspecialchars(trim($_POST['title'])), 0, 1000); 
        $mess =  substr(htmlspecialchars(trim($_POST['mess'])), 0, 1000000); 
        // $to - кому отправляем 
        $to = 'hqyk2004@gmail.com'; 
        // $from - от кого 
        $from='joker98989898@mail.ru'; 
        // функция, которая отправляет наше письмо
        mail($to, $title, $mess, 'From:'.$from); 
        echo 'Спасибо! Ваше письмо отправлено.';
} 
else {
        echo 'pix';
}
?>
