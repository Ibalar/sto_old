{extends 'file:templates/base.tpl'}

{block 'main'}



    {include 'file:chunks/crumbs.tpl'}



    <section class="page-contact__content contact-content__block">

        <div class="contact-content__container">

            <div class="contact-content__row">

                <div class="contact-content__item">

                    <div class="contact-item__title">Наши реквизиты</div>

                    <div class="contact-item__text">ООО «СпецТехСолюшенс»<br>

                        УНП 193689558<br>

                        р/сч BY91 ALFA 3012 2D45 2800 2027 0000<br>

                        в ЗАО «Альфа-Банк»<br>

                        г. Минск, код ALFABY2X<br>

                        220024, г. Минск, ул. Бабушкина, 4А</div>

                    <div class="contact-item__phone"><a href="tel:+375295262500">+375 (29) 526-25-00</a></div>

                    <div class="contact-item__mail"><a href="mailto:specialtechnicalsolutions@yandex.by">specialtechnicalsolutions@yandex.by</a></div>

                    <div class="contact-item__time">Пн. - Сб. с 09:00 до 17:00</div>

                    <div class="contact-item__address">г. Минск ул. Бабушкина д. 4а</div>

                </div>

                <div class="contact-content__item">

                    <div class="contact-content__map" id="map">



                    </div>



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