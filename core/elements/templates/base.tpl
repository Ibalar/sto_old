<!DOCTYPE html>
<html lang="ru">
    {include 'file:chunks/head.tpl'}
<body>
<div class="wrapper">

    {include 'file:chunks/header.tpl'}

    {block 'main'}

    {/block}

</div>

{include 'file:chunks/footer.tpl'}


<div id="callback" class="black-popup mfp-hide decor">
    <div class="form-block__subtitle">Заказать звонок</div>
    <form action="telegram.php" method="post" class="contact-form__row">
        <div class="contact-form__item">
            <label for="name" class="contact-form__label">Введите ваше имя:</label>
            <input type="text" placeholder="Иван Иванов" name="name" id="name" class="contact-form__input" required>
        </div>
        <div class="contact-form__item">
            <label for="phone" class="contact-form__label">Введите ваш телефон:</label>
            <input type="text" placeholder="+375 (29) 123-45-67" name="phone" id="phone" data-mask="+375 (99) 999-99-99" class="contact-form__input" required>
        </div>
        <div class="contact-form__button">
            <button class="service-button__send animate__animated animate__pulse animate__infinite" type="submit">ЗАКАЗАТЬ</button>
        </div>
    </form>
    <div class="contact-form__offer">
        Нажимая на кнопку, вы даете согласие на обработку своих персональных данных
    </div>
</div>
{if $_modx->resource.id == 20}
    <script src="https://api-maps.yandex.ru/2.0/?apikey=1e447194-5fb1-4596-84bc-f10e4f0b759f&load=package.full&lang=ru-RU"></script>
{/if}
<script src="/assets/js/main.js"></script>
</body>
</html>