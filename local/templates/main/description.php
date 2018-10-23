<?php
/**
 * Created by PhpStorm.
 * User: ThinkPad
 * Date: 09.10.2018
 * Time: 18:05
 */
?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die(); ?>
<?use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$arTemplate = Array(
    "NAME" => Loc::getMessage("TEMPLATE_DESCRIPTION_NAME"),
    "DESCRIPTION" => Loc::getMessage("TEMPLATE_DESCRIPTION_DESC")
);
?>

