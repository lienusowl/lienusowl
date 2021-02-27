<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'lienusowl blog') }}</title>
    @include('blocks.head')
</head>
<body>
@include('blocks.header')

<div class="container">

    <div class="cv">
        <div class="cv_sense_block">
            <h2>Резюме</h2>
            <div class="about-block">
                <div class="row">
                    <div class="col-3">
                        <p class="item">Ф.И.О.</p>
                    </div>
                    <div class="col-9">
                        <p class="inner">Никифоров Александр Сергеевич</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="item">Позиция</p>
                    </div>
                    <div class="col-9">
                        <p class="inner">frontend developer</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="item">Занятость</p>
                    </div>
                    <div class="col-9">
                        <p class="inner">Удаленная работа, полный рабочий день. Не рассматриваю проектную работу</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="item">Эл. почта</p>
                    </div>
                    <div class="col-9">
                        <p class="inner"><a target="_blank" href="mailto:lienusowl@yandex.ru">lienusowl@yandex.ru</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="item">Telegram</p>
                    </div>
                    <div class="col-9">
                        <p class="inner"><a target="_blank" href="https://t.me/lienusowl">@lienusowl</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="item">Github</p>
                    </div>
                    <div class="col-9">
                        <p class="inner"><a target="_blank" href="https://github.com/lienusowl">github.com/lienusowl</a></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3">
                        <p class="item">Портфолио</p>
                    </div>
                    <div class="col-9">
                        <p class="inner"><a target="_blank" href="http://zsws.ru">zsws.ru</a></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="cv_sense_block">
            <h2>Стек технологий</h2>
            <div class="skills">
                <div class="col-lg-6">
                    <h5>Владею</h5>
                    <div class="skills-blocks">
                        <div class="col-lg-2">
                            <div class="skill"><p>HTML</p></div>
                            <div class="skill"><p>SCSS</p></div>
                            <div class="skill"><p>LESS</p></div>
                            <div class="skill"><p>БЭМ</p></div>
                            <div class="skill"><p>bootstrap</p></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="skill"><p>JavaScript</p></div>
                            <div class="skill"><p>TypeScript</p></div>
                            <div class="skill"><p>Vue2</p></div>
                            <div class="skill"><p>Angular</p></div>

                        </div>
                        <div class="col-lg-2">
                            <div class="skill"><p>SQL</p></div>
                            <div class="skill small-text"><p>phpmyadmin</p></div>

                        </div>
                        <div class="col-lg-2">
                            <div class="skill"><p>git</p></div>
                            <div class="skill"><p>gitflow</p></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="skill"><p>PHP</p></div>
                            <div class="skill"><p>Laravel</p></div>
                            <div class="skill"><p>Битрикс</p></div>
                            <div class="skill"><p>MODX Revo</p></div>
                            <div class="skill"><p>MODX Evo</p></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="skill"><p>Прочее</p></div>
                            <div class="skill"><p>Ubuntu Server</p></div>
                            <div class="skill"><p>webpack</p></div>
                            <div class="skill"><p>nginx</p></div>
                            <div class="skill"><p>Axure DevOps</p></div>
                            <div class="skill"><p>docker</p></div>
                            <div class="skill"><p>Figma</p></div>
                            <div class="skill"><p>photoshop</p></div>
                            <div class="skill"><p>bash</p></div>

                        </div>
                    </div>
                </div>
                <div class="offset-1 col-lg-5">
                    <h5>В планах изучить</h5>
                    <div class="skills-blocks">
                        <div class="col-lg-3">
                            <div class="skill"><p>Express</p></div>

                        </div>
                        <div class="col-lg-3">
                            <div class="skill"><p>GraphQL</p></div>
                            <div class="skill"><p>PostgreSQL</p></div>
                            <div class="skill"><p>MongoDB</p></div>
                        </div>
                        <div class="col-lg-3">
                            <div class="skill"><p>GoLang</p></div>

                        </div>
                        <div class="col-lg-3">
                            <div class="skill"><p>k8s</p></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="cv_sense_block">
            <h2>Опыт работы</h2>
            <h5>Опыт работы 9 лет 6 месяцев</h5>

            <div class="row mb-4">
                <div class="col-3">
                    <p>Август 2020 — по настоящее время</p>
                </div>
                <div class="col-9">
                    <p class="mb-3"><b>ООО Программный центр</b><br>
                        Киров (Кировская область), pbprog.ru</p>
                    <p><b>Руководитель отдела информационных технологий</b><br>
                        Принятие кадровых и тактических решений в разработке продуктов компании,
                        организация работы отдела информационных технологий.
                        Администрирование серверов.
                        Найм и собеседование, аттестация сотрудников.
                        Планирование и постановка задач, формирование требований. </p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">
                    <p>Май 2020 — август 2020
                        <br><span>4 месяца</span></p>
                </div>
                <div class="col-9">
                    <p class="mb-3"><b>ООО Программный центр</b><br>
                        Киров (Кировская область), pbprog.ru</p>
                    <p><b>ИО Руководителя отдела ИТ</b><br>
                            Контроль команды, распределение задач, код ревью, взаимодействие нескольких отделов,
                            планирование</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">
                    <p>Август 2018 — май 2020
                        <br><span>1 год 10 месяцев</span></p>
                </div>
                <div class="col-9">
                    <p class="mb-3"><b>ООО Программный центр</b><br>
                        Киров (Кировская область), pbprog.ru</p>
                    <p><b>Фронтенд разработчик</b><br>
                        Верстка, фронт, помощь в разработке интерфейсов</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">
                    <p>Май 2013 — август 2018
                        <br><span>5 лет 4 месяца</span></p>
                </div>
                <div class="col-9">
                    <p class="mb-3"><b>фриланс</b><br>
                        zsws.ru</p>
                    <p><b>Frontend-разработчик</b><br>
                        вел проекты, от выявления бизнес и технических требований заказчика, до запуска
                        готового продукта, основная специализация по проектам: визуальная составляющая,
                        дизайн и frontend разработка, частично backend</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">
                    <p>Март 2014 — май 2016
                        <br><span>2 года 3 месяца</span></p>
                </div>
                <div class="col-9">
                    <p class="mb-3"><b>Топинвеб</b><br>
                            top-in-web.ru</p>
                    <p><b>Веб-разработчик</b><br>
                        ведение всех проектов компании, верстка сайтов, сопровождение, разработка дизайна</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">
                    <p>Январь 2012 — июль 2013
                        <br><span>1 год 7 месяцев</span></p>
                </div>
                <div class="col-9">
                    <p class="mb-3"><b>Репутация в интернет</b><br>
                        Киров (Кировская область), reputation-in-web.ru</p>
                    <p><b>Руководитель компании</b><br>
                            организация рабочего процесса, встречи с заказчиками, разработка простых сайтов,
                            seo продвижение</p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-3">
                    <p>Сентябрь 2011 — январь 2012
                        <br><span>5 месяцев</span></p>
                </div>
                <div class="col-9">
                    <p class="mb-3"><b>Best-промоутер</b><br>
                        Киров (Кировская область), best-promoter.ru</p>
                    <p><b>веб разработчик</b><br>
                        постановка задачи, общение с клиентом, разработка дизайна,
                        разрабатывал 90% сайтов компании и занимался поддержкой,
                        пусть они были относительно не сложными, работа контент менеджером,
                        успевал всё от контент-менеджера, дизайнера, разработчика,
                        до человека который решает сложные вопросы с заказчиком</p>
                </div>
            </div>

        </div>

        <div class="cv_sense_block">
            <h2>Образование</h2>
            <h5>Неоконченное высшее образование</h5>
            <div class="row mb-4">
                <div class="col-3">
                    <p>2014</p>
                </div>
                <div class="col-9">
                    <p><b>Филиал Московской финансово-юридической академии, Киров (Кировская область)</b><br>
                        Прикладная информатика, Информатика и вычислительная техника
                        (бакалавр техники и технологии)</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-3">
                    <p>2011</p>
                </div>
                <div class="col-9">
                    <p><b>Инженерно сапёрное училище</b><br>
                        Инженер ИТСО, Инженерно саперные средства охраны</p>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-3">
                    <p>2010</p>
                </div>
                <div class="col-9">
                    <p><b>Филиал Московской финансово-юридической академии, Киров (Кировская область)</b><br>
                            Прикладная информатика, Прикладная информатика в экономике</p>
                </div>
            </div>
        </div>
    </div>

</div>

@include('blocks.footer')
@include('blocks.scripts')
</body>
</html>
