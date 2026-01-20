{extends 'file:templates/base.tpl'}
{block 'main'}
    <section class="home-page__banner home-banner__block">
        <div class="home-banner__container">
            <div class="home-banner__wrapper">
                <div class="home-banner__title">Ремонт и техническое обслуживание
                    грузовых <span>автомобилей и спецтехники</span></div>
                <div class="home-banner__subtitle">Любые работы - от замены масла и фильтров до сложных ремонтов двигателя и подвески</div>
                <div class="home-banner__advantages">
                    <ul class="advantages__list">
                        <li class="advantages__item">Квалифицированные
                            механики</li>
                        <li class="advantages__item">Современное
                            оборудование</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <section class="home-page__plus home-plus__block">
        <div class="home-plus__container">
            <div class="home-plus__title">Наши преимущества</div>
            <div class="home-plus__row">
                <div class="home-plus__item plus-item__one">
                    <div class="plus-item__number">1</div>
                    <div class="plus-item__description">Наша автомастерская использует только
                        качественные запчасти и материалы,
                        что гарантирует долговечность
                        и надежность ремонта.</div>
                </div>
                <div class="home-plus__item plus-item__two">
                    <div class="plus-item__number">2</div>
                    <div class="plus-item__description">Мы имеем многолетний опыт работы
                        в сфере ремонта автомобилей различных
                        марок и моделей, поэтому можем решить
                        любую проблему с вашим автомобилем.</div>
                </div>
                <div class="home-plus__item plus-item__three">
                    <div class="plus-item__number">3</div>
                    <div class="plus-item__description">Мы понимаем, как важно быстро решить проблему с автомобилем, поэтому стараемся выполнять работы в кратчайшие сроки.</div>
                </div>
                <div class="home-plus__item plus-item__four">
                    <div class="plus-item__number">4</div>
                    <div class="plus-item__description">Мы всегда готовы проконсультировать клиента по любым вопросам, связанным с ремонтом автомобиля и необходимых работах.</div>
                </div>
                <div class="home-plus__item plus-item__five">
                    <div class="plus-item__number">5</div>
                    <div class="plus-item__description">Мы гарантируем качество своих услуг
                        и предоставляем гарантию
                        на выполненные работы.</div>
                </div>
                <div class="home-plus__item plus-item__six">
                    <div class="plus-item__number">6</div>
                    <div class="plus-item__description">Мы предоставляем регулярные акции и скидки на наши услуги, что делает ремонт автомобиля более доступным для наших клиентов.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="home-page__service home-service__block">
        <div class="home-service__container">
            <div class="home-service__title">Наши услуги</div>
            <div class="home-service__row">
                <div class="home-service__item">
                    <div class="service-item__title">Ремонт грузовиков и
                        спецтехники</div>
                    <div class="service-item__list">
                        <li class="service-list__item">Ремонт двигателя</li>
                        <li class="service-list__item">Ремонт топливной системы</li>
                        <li class="service-list__item">Ремонт системы охлаждения</li>
                        <li class="service-list__item">Ремонт системы питания воздухом</li>
                        <li class="service-list__item">Ремонт систем выхлопа</li>
                        <li class="service-list__item">и др.</li>
                    </div>
                    <div class="service-item__button"><a href="{$_modx->makeUrl(11)}" class="service-item__link">Подробнее</a></div>
                </div>
                <div class="home-service__item">
                    <div class="service-item__title">Ремонт прицепов и
                        полуприцепов</div>
                    <div class="service-item__list">
                        <li class="service-list__item">Ремонт подвески прицепа</li>
                        <li class="service-list__item">Ремонт тормозных систем</li>
                        <li class="service-list__item">Ремонт электрики и электропроводки</li>
                        <li class="service-list__item">Ремонт пневмосистем прицепа</li>
                        <li class="service-list__item">и др.</li>
                    </div>
                    <div class="service-item__button"><a href="{$_modx->makeUrl(11)}" class="service-item__link">Подробнее</a></div>
                </div>
                <div class="home-service__item">
                    <div class="service-item__title">Компьютерная диагностика</div>
                    <div class="service-item__list">
                        <li class="service-list__item">Компьютерная диагностика грузовиков</li>
                        <li class="service-list__item">Компьютерная диагностика спецтехники</li>
                        <li class="service-list__item">Компьютерная диагностика автобусов</li>
                        <li class="service-list__item">Компьютерная диагностика прицепов и полуприцепов</li>
                        <li class="service-list__item">и др.</li>
                    </div>
                    <div class="service-item__button"><a href="{$_modx->makeUrl(11)}" class="service-item__link">Подробнее</a></div>
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
                <form class="home-form__list" method="post" action="telegram.php">
                    <div class="home-form__item"><input type="text" id="name" name="name" placeholder="Имя" required></div>
                    <div class="home-form__item"><input type="text" placeholder="+375 (29) 123-45-67" name="phone" id="phone" data-mask="+375 (99) 999-99-99" required></div>
                    <div class="home-form__item home-form__button"><button type="submit" class="button-send">Записаться на сервис</button></div>
                </form>
                <p class="home-form__politika">Нажимая кнопку “Записаться на сервис” Вы даете согласие на обработку своих персональных данных</p>
            </div>
        </div>
    </section>
    <section class="home-page__content home-content__block">
        <div class="home-content__container">
            <div class="home-content__title">О компании</div>
            <div class="home-content__description">
                <p>Наш автосервис для грузовых автомобилей и спецтехники! Мы - команда опытных профессионалов, готовых помочь вам в решении любых задач, связанных с обслуживанием и ремонтом вашего транспорта.</p>
                <p>Мы оснащены самым современным оборудованием, что позволяет нам оперативно и качественно проводить диагностику и ремонт грузовых автомобилей и спецтехники разных марок и моделей. Наши механики и электротехники имеют большой опыт работы с такой техникой и знают все ее тонкости.</p>
                <p>Мы предлагаем полный спектр услуг, начиная от планового технического обслуживания и заканчивая сложными ремонтами двигателей, трансмиссий и других узлов и агрегатов. Мы используем только высококачественные запчасти и расходные материалы, чтобы обеспечить долговечность и безопасность вашего транспорта.</p>
                <p>Наш автосервис работает быстро и эффективно, что позволяет нашим клиентам максимально экономить время и деньги. Мы также предлагаем гарантию на все проводимые работы, что доказывает нашу ответственность и профессионализм.</p>
                <p>Не стоит откладывать ремонт и обслуживание вашей спецтехники и грузовых автомобилей на потом! Обращайтесь к нам - мы сделаем все возможное, чтобы ваш транспорт был в отличном техническом состоянии и готов к любым задачам!</p>
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
