<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <?php foreach ($arResult["ITEMS"] as $arItem): ?>
        <div class="article-card">
            <div class="article-card__title"><?= $arItem["NAME"]?></div>
            <div class="article-card__date"><?= date_format(date_create($arItem["TIMESTAMP_X"]), 'd F o') ?></div>
            <div class="article-card__content">
                <div class="article-card__image sticky"><img
                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"] ?>" alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>" data-object-fit="cover"/>
                </div>
                <div class="article-card__text">
                    <div class="block-content" data-anim="anim-3">
                        <p><?= $arItem["PREVIEW_TEXT"].'..' ?></p>
                    </div>
                    <a class="article-card__button" href="<?= $arItem["DETAIL_PAGE_URL"] ?>">Подробнее</a></div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>