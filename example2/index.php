<?php

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle("Title example#2");
dd(\Bitrix\Main\Config\Configuration::getValue('exception_handling'));
?>
hello world 2
<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';



