<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Добавить лот");?>
<?$APPLICATION->IncludeComponent(
    "bitrix:iblock.element.add.form",
    "",
    Array(
        "CUSTOM_TITLE_DATE_ACTIVE_FROM" => "",
        "CUSTOM_TITLE_DATE_ACTIVE_TO" => "",
        "CUSTOM_TITLE_DETAIL_PICTURE" => "",
        "CUSTOM_TITLE_DETAIL_TEXT" => "Подробное описание",
        "CUSTOM_TITLE_IBLOCK_SECTION" => "Категория",
        "CUSTOM_TITLE_NAME" => "Название",
        "CUSTOM_TITLE_PREVIEW_PICTURE" => "Начальная картинка",
        "CUSTOM_TITLE_PREVIEW_TEXT" => "Начальное описание",
        "CUSTOM_TITLE_TAGS" => "",
        "DEFAULT_INPUT_SIZE" => "30",
        "DETAIL_TEXT_USE_HTML_EDITOR" => "N",
        "ELEMENT_ASSOC" => "CREATED_BY",
        "GROUPS" => array(),
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "auction",
        "LEVEL_LAST" => "Y",
        "LIST_URL" => "",
        "MAX_FILE_SIZE" => "0",
        "MAX_LEVELS" => "100000",
        "MAX_USER_ENTRIES" => "100000",
        "PREVIEW_TEXT_USE_HTML_EDITOR" => "N",
        "PROPERTY_CODES" => array("2", "3", "NAME", "DATE_ACTIVE_FROM", "DATE_ACTIVE_TO", "IBLOCK_SECTION", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT"),
        "PROPERTY_CODES_REQUIRED" => array("2", "3", "NAME", "DATE_ACTIVE_FROM", "DATE_ACTIVE_TO", "IBLOCK_SECTION", "PREVIEW_TEXT", "PREVIEW_PICTURE", "DETAIL_TEXT"),
        "RESIZE_IMAGES" => "N",
        "SEF_MODE" => "N",
        "STATUS" => "ANY",
        "STATUS_NEW" => "N",
        "USER_MESSAGE_ADD" => "",
        "USER_MESSAGE_EDIT" => "",
        "USE_CAPTCHA" => "N"
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>