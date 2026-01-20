<header class="header">

    <div class="header-block__wrapper">

        <div class="header-block__top">

            <div class="header-block__container">

                <div class="header-top__row">

                    <div class="header-top__item header-item__address">г. Минск ул. Бабушкина 4а</div>

                    <div class="header-top__item header-item__time">Время работы: пн-сб c 09:00 до 17:00</div>

                    <div class="header-top__item header-item__mail"><a href="mailto:specialtechnicalsolutions@yandex.by">specialtechnicalsolutions@yandex.by</a></div>

                    <div class="header-top__item header-item__viber"><a href="viber://chat?number=+375295262500">Viber</a></div>

                </div>

            </div>

        </div>

        <div class="header-top__middle">

            <div class="header-block__container">

                <div class="header-middle__row">

                    <div class="header-middle__item header--logo">{if $_modx->resource.id == 1}STO-AUTOREM.BY{else}<a href="/">STO-AUTOREM.BY</a>{/if}</div>

                    <div class="header-middle__item header__burger">

                        <span></span>

                    </div>

                    <div class="header-middle__item header--phone"><a href="tel:+375295262500">+375 (29) 526-25-00</a></div>

                    <div class="header-middle__item header--callback"><a href="#callback" class="open-popup-link">Обратный звонок</a></div>



                </div>

            </div>

        </div>

        <div class="header-block__menu">

            <div class="header-block__container">

                {'pdoMenu'|snippet:[

                'parents' => 0,

                'level' => 1,

                'tplOuter' => '@INLINE <ul class="header-menu__list">{$wrapper}</ul>',

                'tpl' => '@INLINE <li class="header-menu__item"><a href="{$link}" class="header-menu__link">{$menutitle}</a></li>'

                ]}

            </div>

        </div>

    </div>

</header>