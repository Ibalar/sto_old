{extends 'file:templates/base.tpl'}
{block 'main'}

    {include 'file:chunks/crumbs.tpl'}

    <section class="home-page__content home-content__block">
        <div class="home-content__container">
            <div class="home-content__description">
                {$modx->resource->content}
            </div>
        </div>
    </section>

    <section class="page-content__price content-price__block">
        <div class="content-price__container">
            <div class="content-price__title">Цены на наши услуги</div>
            <div class="content-price__list">
                <div class="content-price__item">
                    <div class="price-item__title">Плановое ТО</div>
                    <div class="price-item__cosht">от 40 BYN</div>
                </div>
                <div class="content-price__item">
                    <div class="price-item__title">Капитальный ремонт двигателя</div>
                    <div class="price-item__cosht">от 1 200 BYN</div>
                </div>
                <div class="content-price__item">
                    <div class="price-item__title">Ремонт ходовой</div>
                    <div class="price-item__cosht">от 160 BYN</div>
                </div>
                <div class="content-price__item">
                    <div class="price-item__title">Тормозная система</div>
                    <div class="price-item__cosht">от 50 BYN</div>
                </div>
                <div class="content-price__item">
                    <div class="price-item__title">Ремонт КПП</div>
                    <div class="price-item__cosht">от 240 BYN</div>
                </div>
                <div class="content-price__item">
                    <div class="price-item__title">Автоэлектрика</div>
                    <div class="price-item__cosht">от 20 BYN</div>
                </div>
                <div class="content-price__item">
                    <div class="price-item__title">Кондиционер</div>
                    <div class="price-item__cosht">от 50 BYN</div>
                </div>
                <div class="content-price__item">
                    <div class="price-item__title">Прицепы</div>
                    <div class="price-item__cosht">от 20 BYN</div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-page__manufacturer home-manufacturer__block">
        <div class="home-manufacturer__container">
            <div class="home-manufacturer__title">Мы обслуживаем</div>
            <div class="home-manufacturer__list">
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/01.png" alt=""></div>
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/02.png" alt=""></div>
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/03.png" alt=""></div>
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/04.png" alt=""></div>
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/05.png" alt=""></div>
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/06.png" alt=""></div>
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/07.png" alt=""></div>
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/08.png" alt=""></div>
                <div class="home-manufacturer__item"><img src="./assets/img/manufacturer/09.png" alt=""></div>
            </div>
            <div class="home-manufacturer__subtitle">и другие...</div>
        </div>
    </section>
    <section class="page-home__form home-form__block">
        <div class="home-form__container">
            <div class="home-form__row">
                <form class="home-form__list">
                    <div class="home-form__item"><input type="text" id="name" name="name" placeholder="Имя" required></div>
                    <div class="home-form__item"><input type="text" placeholder="+375 (29) 123-45-67" name="phone" id="phone" data-mask="+375 (99) 999-99-99" required></div>
                    <div class="home-form__item home-form__button"><button type="submit" class="button-send">Записаться на сервис</button></div>
                </form>
                <p class="home-form__politika">Нажимая кнопку “Записаться на сервис” Вы даете согласие на обработку своих персональных данных</p>
            </div>
        </div>
    </section>
    <section class="home-page__slider home-slider__block">
        <div class="home-slider__container">
            <div class="home-slider__title">Фото нашего автосервиса</div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img src="./assets/img/slider/slider-01.jpg"></div>
                    <div class="swiper-slide"><img src="./assets/img/slider/slider-02.jpg"></div>
                    <div class="swiper-slide"><img src="./assets/img/slider/slider-03.jpg"></div>
                    <div class="swiper-slide"><img src="./assets/img/slider/slider-01.jpg"></div>
                    <div class="swiper-slide"><img src="./assets/img/slider/slider-02.jpg"></div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>
{/block}
