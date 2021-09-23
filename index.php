<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Типография \"ПЕШТА\" печатает полиграфическую продукцию в Ижевске. +7 (3412) 400-200");
$APPLICATION->SetPageProperty("keywords", "типография, ижевск, визитки, фирменный стиль, заказать визитки, упаковка, печать, штампы, буклеты, полиграфия, нумераторы, полиграфия для бизнеса");
$APPLICATION->SetPageProperty("title", "ПЕШТА - Типография Ижевск");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Пешта");
?>
<div class="uk-section">
    <div class="uk-container uk-container-large">
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "catalog_stocks_market",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "catalog_stocks",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0=>"",1=>"",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "36",
                "IBLOCK_TYPE" => "catalog",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MEDIA_PROPERTY" => "",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "100",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Акции",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0=>"TITLE_COLOR",1=>"DESC_COLOR",2=>"TEXT_POSITION",),
                "SEARCH_PAGE" => "/search/",
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SLIDER_PROPERTY" => "",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "Y",
                "TEMPLATE_THEME" => "blue",
                "USE_RATING" => "N",
                "USE_SHARE" => "N"
            )
        );?>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-large uk-margin-medium-bottom">
        <h2>Хиты продаж</h2>
        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
            <ul class="uk-slider-items uk-grid">
                <li class="uk-width-1-4@l uk-width-1-3@s">
                    <div class="uk-panel product-card">
                        <div class="product_orange_block uk-margin-bottom">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/product_big.png" alt="">
                        </div>
                        <div class="product-card__name uk-margin-bottom" uk-slider-parallax="x: 100,-100"><a href="">Печать автоматическая COLOP r-45</a></div>
                        <div class="product-card__price uk-margin-bottom" uk-slider-parallax="x: 100,-100">
                            <span class="product-card__actual-price">100</span> ₽/шт
                        </div>
                        <button class="red-button">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33268 13.3333V3.33334H1.66602V1.66667H4.16602C4.38703 1.66667 4.59899 1.75447 4.75527 1.91075C4.91155 2.06703 4.99935 2.27899 4.99935 2.50001V12.5H15.3643L17.031 5.83334H6.66602V4.16667H18.0993C18.226 4.16668 18.351 4.19556 18.4649 4.25112C18.5787 4.30668 18.6784 4.38746 18.7563 4.48733C18.8342 4.58719 18.8884 4.7035 18.9146 4.82743C18.9408 4.95136 18.9385 5.07963 18.9077 5.20251L16.8243 13.5358C16.7792 13.716 16.6751 13.876 16.5287 13.9903C16.3822 14.1046 16.2018 14.1667 16.016 14.1667H4.16602C3.945 14.1667 3.73304 14.0789 3.57676 13.9226C3.42048 13.7663 3.33268 13.5544 3.33268 13.3333ZM4.99935 19.1667C4.55732 19.1667 4.1334 18.9911 3.82084 18.6785C3.50828 18.366 3.33268 17.942 3.33268 17.5C3.33268 17.058 3.50828 16.6341 3.82084 16.3215C4.1334 16.0089 4.55732 15.8333 4.99935 15.8333C5.44138 15.8333 5.8653 16.0089 6.17786 16.3215C6.49042 16.6341 6.66602 17.058 6.66602 17.5C6.66602 17.942 6.49042 18.366 6.17786 18.6785C5.8653 18.9911 5.44138 19.1667 4.99935 19.1667ZM14.9993 19.1667C14.5573 19.1667 14.1334 18.9911 13.8208 18.6785C13.5083 18.366 13.3327 17.942 13.3327 17.5C13.3327 17.058 13.5083 16.6341 13.8208 16.3215C14.1334 16.0089 14.5573 15.8333 14.9993 15.8333C15.4414 15.8333 15.8653 16.0089 16.1779 16.3215C16.4904 16.6341 16.666 17.058 16.666 17.5C16.666 17.942 16.4904 18.366 16.1779 18.6785C15.8653 18.9911 15.4414 19.1667 14.9993 19.1667Z" fill="white"/>
                            </svg>
                            в корзину
                        </button>
                    </div>
                </li>
                <li class="uk-width-1-4@l uk-width-1-3@s">
                    <div class="uk-panel product-card">
                        <div class="product_orange_block uk-margin-bottom">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/product_big.png" alt="">
                        </div>
                        <div class="product-card__name uk-margin-bottom" uk-slider-parallax="x: 100,-100"><a href="">Печать автоматическая COLOP r-45</a></div>
                        <div class="product-card__price uk-margin-bottom" uk-slider-parallax="x: 100,-100">
                            <span class="product-card__actual-price">100</span> ₽/шт <span class="product-card__old-price">25 ₽/шт</span>
                        </div>
                        <button class="red-button">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33268 13.3333V3.33334H1.66602V1.66667H4.16602C4.38703 1.66667 4.59899 1.75447 4.75527 1.91075C4.91155 2.06703 4.99935 2.27899 4.99935 2.50001V12.5H15.3643L17.031 5.83334H6.66602V4.16667H18.0993C18.226 4.16668 18.351 4.19556 18.4649 4.25112C18.5787 4.30668 18.6784 4.38746 18.7563 4.48733C18.8342 4.58719 18.8884 4.7035 18.9146 4.82743C18.9408 4.95136 18.9385 5.07963 18.9077 5.20251L16.8243 13.5358C16.7792 13.716 16.6751 13.876 16.5287 13.9903C16.3822 14.1046 16.2018 14.1667 16.016 14.1667H4.16602C3.945 14.1667 3.73304 14.0789 3.57676 13.9226C3.42048 13.7663 3.33268 13.5544 3.33268 13.3333ZM4.99935 19.1667C4.55732 19.1667 4.1334 18.9911 3.82084 18.6785C3.50828 18.366 3.33268 17.942 3.33268 17.5C3.33268 17.058 3.50828 16.6341 3.82084 16.3215C4.1334 16.0089 4.55732 15.8333 4.99935 15.8333C5.44138 15.8333 5.8653 16.0089 6.17786 16.3215C6.49042 16.6341 6.66602 17.058 6.66602 17.5C6.66602 17.942 6.49042 18.366 6.17786 18.6785C5.8653 18.9911 5.44138 19.1667 4.99935 19.1667ZM14.9993 19.1667C14.5573 19.1667 14.1334 18.9911 13.8208 18.6785C13.5083 18.366 13.3327 17.942 13.3327 17.5C13.3327 17.058 13.5083 16.6341 13.8208 16.3215C14.1334 16.0089 14.5573 15.8333 14.9993 15.8333C15.4414 15.8333 15.8653 16.0089 16.1779 16.3215C16.4904 16.6341 16.666 17.058 16.666 17.5C16.666 17.942 16.4904 18.366 16.1779 18.6785C15.8653 18.9911 15.4414 19.1667 14.9993 19.1667Z" fill="white"/>
                            </svg>
                            в корзину
                        </button>
                    </div>
                </li>
                <li class="uk-width-1-4@l uk-width-1-3@s">
                    <div class="uk-panel product-card">
                        <div class="product_orange_block uk-margin-bottom">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/product_big.png" alt="">
                        </div>
                        <div class="product-card__name uk-margin-bottom" uk-slider-parallax="x: 100,-100"><a href="">Печать автоматическая COLOP r-45</a></div>
                        <div class="product-card__price uk-margin-bottom" uk-slider-parallax="x: 100,-100">
                            <span class="product-card__actual-price">100</span> ₽/шт <span class="product-card__old-price">25 ₽/шт</span>
                        </div>
                        <button class="red-button">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33268 13.3333V3.33334H1.66602V1.66667H4.16602C4.38703 1.66667 4.59899 1.75447 4.75527 1.91075C4.91155 2.06703 4.99935 2.27899 4.99935 2.50001V12.5H15.3643L17.031 5.83334H6.66602V4.16667H18.0993C18.226 4.16668 18.351 4.19556 18.4649 4.25112C18.5787 4.30668 18.6784 4.38746 18.7563 4.48733C18.8342 4.58719 18.8884 4.7035 18.9146 4.82743C18.9408 4.95136 18.9385 5.07963 18.9077 5.20251L16.8243 13.5358C16.7792 13.716 16.6751 13.876 16.5287 13.9903C16.3822 14.1046 16.2018 14.1667 16.016 14.1667H4.16602C3.945 14.1667 3.73304 14.0789 3.57676 13.9226C3.42048 13.7663 3.33268 13.5544 3.33268 13.3333ZM4.99935 19.1667C4.55732 19.1667 4.1334 18.9911 3.82084 18.6785C3.50828 18.366 3.33268 17.942 3.33268 17.5C3.33268 17.058 3.50828 16.6341 3.82084 16.3215C4.1334 16.0089 4.55732 15.8333 4.99935 15.8333C5.44138 15.8333 5.8653 16.0089 6.17786 16.3215C6.49042 16.6341 6.66602 17.058 6.66602 17.5C6.66602 17.942 6.49042 18.366 6.17786 18.6785C5.8653 18.9911 5.44138 19.1667 4.99935 19.1667ZM14.9993 19.1667C14.5573 19.1667 14.1334 18.9911 13.8208 18.6785C13.5083 18.366 13.3327 17.942 13.3327 17.5C13.3327 17.058 13.5083 16.6341 13.8208 16.3215C14.1334 16.0089 14.5573 15.8333 14.9993 15.8333C15.4414 15.8333 15.8653 16.0089 16.1779 16.3215C16.4904 16.6341 16.666 17.058 16.666 17.5C16.666 17.942 16.4904 18.366 16.1779 18.6785C15.8653 18.9911 15.4414 19.1667 14.9993 19.1667Z" fill="white"/>
                            </svg>
                            в корзину
                        </button>
                    </div>
                </li>
                <li class="uk-width-1-4@l uk-width-1-3@s">
                    <div class="uk-panel product-card">
                        <div class="product_orange_block uk-margin-bottom">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/product_big.png" alt="">
                        </div>
                        <div class="product-card__name uk-margin-bottom" uk-slider-parallax="x: 100,-100"><a href="">Печать автоматическая COLOP r-45</a></div>
                        <div class="product-card__price uk-margin-bottom" uk-slider-parallax="x: 100,-100">
                            <span class="product-card__actual-price">100</span> ₽/шт <span class="product-card__old-price">25 ₽/шт</span>
                        </div>
                        <button class="red-button">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33268 13.3333V3.33334H1.66602V1.66667H4.16602C4.38703 1.66667 4.59899 1.75447 4.75527 1.91075C4.91155 2.06703 4.99935 2.27899 4.99935 2.50001V12.5H15.3643L17.031 5.83334H6.66602V4.16667H18.0993C18.226 4.16668 18.351 4.19556 18.4649 4.25112C18.5787 4.30668 18.6784 4.38746 18.7563 4.48733C18.8342 4.58719 18.8884 4.7035 18.9146 4.82743C18.9408 4.95136 18.9385 5.07963 18.9077 5.20251L16.8243 13.5358C16.7792 13.716 16.6751 13.876 16.5287 13.9903C16.3822 14.1046 16.2018 14.1667 16.016 14.1667H4.16602C3.945 14.1667 3.73304 14.0789 3.57676 13.9226C3.42048 13.7663 3.33268 13.5544 3.33268 13.3333ZM4.99935 19.1667C4.55732 19.1667 4.1334 18.9911 3.82084 18.6785C3.50828 18.366 3.33268 17.942 3.33268 17.5C3.33268 17.058 3.50828 16.6341 3.82084 16.3215C4.1334 16.0089 4.55732 15.8333 4.99935 15.8333C5.44138 15.8333 5.8653 16.0089 6.17786 16.3215C6.49042 16.6341 6.66602 17.058 6.66602 17.5C6.66602 17.942 6.49042 18.366 6.17786 18.6785C5.8653 18.9911 5.44138 19.1667 4.99935 19.1667ZM14.9993 19.1667C14.5573 19.1667 14.1334 18.9911 13.8208 18.6785C13.5083 18.366 13.3327 17.942 13.3327 17.5C13.3327 17.058 13.5083 16.6341 13.8208 16.3215C14.1334 16.0089 14.5573 15.8333 14.9993 15.8333C15.4414 15.8333 15.8653 16.0089 16.1779 16.3215C16.4904 16.6341 16.666 17.058 16.666 17.5C16.666 17.942 16.4904 18.366 16.1779 18.6785C15.8653 18.9911 15.4414 19.1667 14.9993 19.1667Z" fill="white"/>
                            </svg>
                            в корзину
                        </button>
                    </div>
                </li>
                <li class="uk-width-1-4@l uk-width-1-3@s">
                    <div class="uk-panel product-card">
                        <div class="product_orange_block uk-margin-bottom">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/product_big.png" alt="">
                        </div>
                        <div class="product-card__name uk-margin-bottom" uk-slider-parallax="x: 100,-100"><a href="">Печать автоматическая COLOP r-45</a></div>
                        <div class="product-card__price uk-margin-bottom" uk-slider-parallax="x: 100,-100">
                            <span class="product-card__actual-price">100</span> ₽/шт <span class="product-card__old-price">25 ₽/шт</span>
                        </div>
                        <button class="red-button">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33268 13.3333V3.33334H1.66602V1.66667H4.16602C4.38703 1.66667 4.59899 1.75447 4.75527 1.91075C4.91155 2.06703 4.99935 2.27899 4.99935 2.50001V12.5H15.3643L17.031 5.83334H6.66602V4.16667H18.0993C18.226 4.16668 18.351 4.19556 18.4649 4.25112C18.5787 4.30668 18.6784 4.38746 18.7563 4.48733C18.8342 4.58719 18.8884 4.7035 18.9146 4.82743C18.9408 4.95136 18.9385 5.07963 18.9077 5.20251L16.8243 13.5358C16.7792 13.716 16.6751 13.876 16.5287 13.9903C16.3822 14.1046 16.2018 14.1667 16.016 14.1667H4.16602C3.945 14.1667 3.73304 14.0789 3.57676 13.9226C3.42048 13.7663 3.33268 13.5544 3.33268 13.3333ZM4.99935 19.1667C4.55732 19.1667 4.1334 18.9911 3.82084 18.6785C3.50828 18.366 3.33268 17.942 3.33268 17.5C3.33268 17.058 3.50828 16.6341 3.82084 16.3215C4.1334 16.0089 4.55732 15.8333 4.99935 15.8333C5.44138 15.8333 5.8653 16.0089 6.17786 16.3215C6.49042 16.6341 6.66602 17.058 6.66602 17.5C6.66602 17.942 6.49042 18.366 6.17786 18.6785C5.8653 18.9911 5.44138 19.1667 4.99935 19.1667ZM14.9993 19.1667C14.5573 19.1667 14.1334 18.9911 13.8208 18.6785C13.5083 18.366 13.3327 17.942 13.3327 17.5C13.3327 17.058 13.5083 16.6341 13.8208 16.3215C14.1334 16.0089 14.5573 15.8333 14.9993 15.8333C15.4414 15.8333 15.8653 16.0089 16.1779 16.3215C16.4904 16.6341 16.666 17.058 16.666 17.5C16.666 17.942 16.4904 18.366 16.1779 18.6785C15.8653 18.9911 15.4414 19.1667 14.9993 19.1667Z" fill="white"/>
                            </svg>
                            в корзину
                        </button>
                    </div>
                </li>
                <li class="uk-width-1-4@l uk-width-1-3@s">
                    <div class="uk-panel product-card">
                        <div class="product_orange_block uk-margin-bottom">
                            <img src="<?=SITE_TEMPLATE_PATH?>/images/product_big.png" alt="">
                        </div>
                        <div class="product-card__name uk-margin-bottom" uk-slider-parallax="x: 100,-100"><a href="">Печать автоматическая COLOP r-45</a></div>
                        <div class="product-card__price uk-margin-bottom" uk-slider-parallax="x: 100,-100">
                            <span class="product-card__actual-price">100</span> ₽/шт <span class="product-card__old-price">25 ₽/шт</span>
                        </div>
                        <button class="red-button">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.33268 13.3333V3.33334H1.66602V1.66667H4.16602C4.38703 1.66667 4.59899 1.75447 4.75527 1.91075C4.91155 2.06703 4.99935 2.27899 4.99935 2.50001V12.5H15.3643L17.031 5.83334H6.66602V4.16667H18.0993C18.226 4.16668 18.351 4.19556 18.4649 4.25112C18.5787 4.30668 18.6784 4.38746 18.7563 4.48733C18.8342 4.58719 18.8884 4.7035 18.9146 4.82743C18.9408 4.95136 18.9385 5.07963 18.9077 5.20251L16.8243 13.5358C16.7792 13.716 16.6751 13.876 16.5287 13.9903C16.3822 14.1046 16.2018 14.1667 16.016 14.1667H4.16602C3.945 14.1667 3.73304 14.0789 3.57676 13.9226C3.42048 13.7663 3.33268 13.5544 3.33268 13.3333ZM4.99935 19.1667C4.55732 19.1667 4.1334 18.9911 3.82084 18.6785C3.50828 18.366 3.33268 17.942 3.33268 17.5C3.33268 17.058 3.50828 16.6341 3.82084 16.3215C4.1334 16.0089 4.55732 15.8333 4.99935 15.8333C5.44138 15.8333 5.8653 16.0089 6.17786 16.3215C6.49042 16.6341 6.66602 17.058 6.66602 17.5C6.66602 17.942 6.49042 18.366 6.17786 18.6785C5.8653 18.9911 5.44138 19.1667 4.99935 19.1667ZM14.9993 19.1667C14.5573 19.1667 14.1334 18.9911 13.8208 18.6785C13.5083 18.366 13.3327 17.942 13.3327 17.5C13.3327 17.058 13.5083 16.6341 13.8208 16.3215C14.1334 16.0089 14.5573 15.8333 14.9993 15.8333C15.4414 15.8333 15.8653 16.0089 16.1779 16.3215C16.4904 16.6341 16.666 17.058 16.666 17.5C16.666 17.942 16.4904 18.366 16.1779 18.6785C15.8653 18.9911 15.4414 19.1667 14.9993 19.1667Z" fill="white"/>
                            </svg>
                            в корзину
                        </button>
                    </div>
                </li>
            </ul>
            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
        </div>
    </div>
</div>
<div class="uk-section advantages">
    <div class="uk-container uk-container-large uk-margin-medium-bottom">
        <h2>Наши преимущества</h2>
        <?$APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "advantages_market",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "N",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "COMPONENT_TEMPLATE" => "catalog_stocks",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "N",
                "DISPLAY_DATE" => "Y",
                "DISPLAY_NAME" => "Y",
                "DISPLAY_PICTURE" => "Y",
                "DISPLAY_PREVIEW_TEXT" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array(0=>"",1=>"",),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "37",
                "IBLOCK_TYPE" => "catalog",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MEDIA_PROPERTY" => "",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "100",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Акции",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array(0=>"",1=>"",2=>"",),
                "SEARCH_PAGE" => "/search/",
                "SET_BROWSER_TITLE" => "N",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "N",
                "SET_META_KEYWORDS" => "N",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "N",
                "SHOW_404" => "N",
                "SLIDER_PROPERTY" => "",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "Y",
                "TEMPLATE_THEME" => "blue",
                "USE_RATING" => "N",
                "USE_SHARE" => "N"
            )
        );?>
    </div>
</div>
<div class="uk-section">
    <div class="uk-container uk-container-large uk-margin-medium-bottom">
        <h2>Категории</h2>
        <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"market_catalog_sections", 
	array(
		"ADD_SECTIONS_CHAIN" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "38",
		"IBLOCK_TYPE" => "catalog",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "catalog/#SECTION_CODE_PATH#/",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "1",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "market_catalog_sections"
	),
	false
);
	?>
    </div>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
