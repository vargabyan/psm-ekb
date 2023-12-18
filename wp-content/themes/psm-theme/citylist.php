<?php
$City = [
    'Свердловская область',
    'Алапаевск',
    'Арамиль',
    'Артемовский',
    'Асбест',
    'Березовский',
    'Богданович',
    'Верхний Тагил',
    'Верхняя Пышма',
    'Верхняя Салда',
    'Верхняя Тура',
    'Верхотурье',
    'Волчанск',
    'Дегтярск',
    'Екатеринбург',
    'Заречный',
    'Ивдель',
    'Ирбит',
    'Каменск-Уральский',
    'Камышлов',
    'Карпинск',
    'Качканар',
    'Кировград',
    'Краснотурьинск',
    'Красноуральск',
    'Красноуфимск',
    'Кушва',
    'Лесной',
    'Михайловск',
    'Невьянск',
    'Нижние Серги',
    'Нижний Тагил',
    'Нижняя Салда',
    'Нижняя Тура',
    'Новая Ляля',
    'Новоуральск',
    'Первоуральск',
    'Полевской',
    'Ревда',
    'Реж',
    'Североуральск',
    'Серов',
    'Среднеуральск',
    'Сухой лог',
    'Сысерть',
    'Тавда',
    'Талица',
    'Туринск',

    'Пермский край',
    'Александровск',
    'Березники',
    'Верещагино',
    'Горнозаводск',
    'Гремячинск',
    'Губаха',
    'Добрянка',
    'Кизел',
    'Красновишерск',
    'Краснокамск',
    'Кудымкар',
    'Кунгур',
    'Лысьва',
    'Нытва',
    'Оса',
    'Оханск',
    'Очер',
    'Пермь',
    'Соликамск',
    'Усолье',
    'Чайковский',
    'Чердынь',
    'Чермоз',
    'Чернушка',
    'Чусовой',

    'Челябинская область',
    'Аша',
    'Бакал',
    'Верхнеуральск',
    'Верхний Уфалей',
    'Еманжелинск',
    'Златоуст',
    'Карабаш',
    'Карталы',
    'Касли',
    'Катав-Ивановск',
    'Копейск',
    'Коркино',
    'Куса',
    'Кыштым',
    'Магнитогорск',
    'Миасс',
    'Озерск',
    'Снежинск',
    'Трехгорный',
    'Троицк',
    'Усть-Катав',
    'Чебаркуль',
    'Челябинск',
    'Южноуральск',

    'Тюменская область',
    'Белоярский',
    'Губкинский',
    'Заводоуковск',
    'Ишим',
    'Когалым',
    'Лабытнанги',
    'Лангепас',
    'Лянтор',
    'Мегион',
    'Муравленко',
    'Надым',
    'Нефтеюганск',
    'Нижневартовск',
    'Новый Уренгой',
    'Ноябрьск',
    'Нягань',
    'Покачи',
    'Пыть-Ях',
    'Радужный',
    'Салехард',
    'Советский',
    'Сургут',
    'Тарко-Сале',
    'Тобольск',
    ' Тюмень',
    'Урай',
    'Ханты-Мансийск',
    'Югорск',
    'Ялуторовск',
    ]
?>
<!--noindex-->
<label  class="header_you-city_select-label">
    <select class="header_you-city_select">
        <?php foreach ($City as $item) { ?>
            <option <?= $item === 'Екатеринбург'? 'selected' : ''  ?>><?= $item ?></option>
        <?php } ?>
    </select>
</label>
<!--/noindex-->