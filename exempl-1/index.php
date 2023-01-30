<?

use Bitrix\Main\Config\Configuration;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "exemple Один Страница");
$APPLICATION->SetPageProperty("description", "Это точно страница Exampl 1");
$APPLICATION->SetTitle("Exempl One");
?>hello World!!! example one...<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>