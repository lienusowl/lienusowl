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
        </div>

        <div class="cv_sense_block">
            <h2>Образование</h2>
        </div>
    </div>

</div>

@include('blocks.footer')
@include('blocks.scripts')
</body>
</html>
