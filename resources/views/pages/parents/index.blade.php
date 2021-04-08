@extends('layouts.parents')


@section('content')
    <main>

        <div class="page-title">


            <div class="e2-heading search-heading">

                <div class="page-title-actions">




                </div>

                <!-- <h1>Русский язык</h1> -->

                @if(Request::is('parents'))
                    <h1 class="page-title-smaller-heading">Для Родителей</h1>
                @else
                    <h1 class="page-title-smaller-heading">Для Учеников</h1>
                @endif






                <section class="e2-heading-gallery">
                    <div class="e2-section-heading">Последнее</div>




                    <div class="e2-notes-gallery ">



                        <div class="e2-notes-gallery-area" style="grid-area: 1/2/1/4">




                            <div class="e2-notes-gallery-item  e2-notes-gallery-item-with-large-title">


                                <div class="e2-notes-gallery-text">

                                    <div class="e2-notes-gallery-item-title  e2-notes-gallery-item-title-large"><a href="https://ilyabirman.ru/meanwhile/2006/06/27/2/" title="27 июня 2006, 12:59" class="">О&nbsp;запятой после «С&nbsp;уважением»</a></div>

                                    <div class="e2-notes-gallery-item-summary">В&nbsp;соответствии с&nbsp;правилами русского языка, после строки «С&nbsp;уважением» запятая не&nbsp;ставится. Это логично: чтобы поставить запятую, нужен повод, а&nbsp;там его нет</div>

                                    <div class="e2-notes-gallery-item-meta">

                                        <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;10</span>&nbsp;&nbsp;
                                        <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;139565</span>&nbsp;&nbsp;
                                        <span title="27 июня 2006, 12:59, GMT+05:00">2006</span>

                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="e2-notes-gallery-area" style="grid-area: 1/4">




                            <div class="e2-notes-gallery-item ">


                                <div class="e2-notes-gallery-text">

                                    <div class="e2-notes-gallery-item-title "><a href="https://ilyabirman.ru/meanwhile/all/cases/" title="1 октября 2006, 14:30">Хитрые падежи русского языка</a></div>


                                    <div class="e2-notes-gallery-item-meta">

                                        <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;30</span>&nbsp;&nbsp;
                                        <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;15121</span>&nbsp;&nbsp;
                                        <span title="1 октября 2006, 14:30, GMT+05:00">2006</span>

                                    </div>

                                </div>
                            </div>



                            <div class="e2-notes-gallery-item ">


                                <div class="e2-notes-gallery-text">

                                    <div class="e2-notes-gallery-item-title "><a href="https://ilyabirman.ru/meanwhile/all/bud-to/" title="22 марта 2021, 19:29">Будь то</a></div>


                                    <div class="e2-notes-gallery-item-meta">

                                        <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;2</span>&nbsp;&nbsp;
                                        <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;962</span>&nbsp;&nbsp;
                                        <span title="22 марта 2021, 19:29, GMT+05:00">16 дн</span>

                                    </div>

                                </div>
                            </div>

                        </div>



                        <div class="e2-notes-gallery-area" style="grid-area: 1/1">




                            <div class="e2-notes-gallery-item ">


                                <div class="e2-notes-gallery-text">

                                    <div class="e2-notes-gallery-item-title "><a href="https://ilyabirman.ru/meanwhile/all/o-naraschenii-okonchaniy-chislitelnyh/" title="8 ноября 2010, 14:35" class="">О&nbsp;наращении окончаний числительных</a></div>


                                    <div class="e2-notes-gallery-item-meta">

                                        <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;19</span>&nbsp;&nbsp;
                                        <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;17590</span>&nbsp;&nbsp;
                                        <span title="8 ноября 2010, 14:35, GMT+05:00">2010</span>

                                    </div>

                                </div>
                            </div>

                        </div>


                    </div>      </section>


                <!-- <div class="e2-note-meta">
                216 заметок: <a href="">*с первой</a> · <a href="">с последней</a>
                </div> -->


                <div class="e2-heading-meta">216 заметок&nbsp;&nbsp;&nbsp;См. также:&nbsp;&nbsp;<a href="https://ilyabirman.ru/meanwhile/tags/life/" class="e2-tag">жизнь</a> &nbsp; <a href="https://ilyabirman.ru/meanwhile/tags/angliyskiy-yazyk/" class="e2-tag">английский язык</a> &nbsp; <a href="https://ilyabirman.ru/meanwhile/tags/photo/" class="e2-tag">фото</a> &nbsp; <a href="https://ilyabirman.ru/meanwhile/tags/idiots/" class="e2-tag">идиоты</a> &nbsp; <a href="https://ilyabirman.ru/meanwhile/tags/lebedev/" class="e2-tag">Лебедев</a></div>

                <div class="e2-heading-description e2-text">
                    <div class="b-list-in-columns">
                        <h2>Текущая Информация</h2>
                        <ul>
                            <li><a href="http://ilyabirman.ru/meanwhile/2009/07/31/2/">Деепричастные обороты</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2006/11/12/1/" class="">Склонение топонимов на&nbsp;<i>-о</i></a> и&nbsp;<a href="http://ilyabirman.ru/meanwhile/2007/02/01/2/" class="">их творительный падеж</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/o-naraschenii-okonchaniy-chislitelnyh/">Наращение окончаний числительных</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/to-to/">Частица -то</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/lists/">Список&nbsp;— это однородные члены</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2010/01/29/1/">Пропущенные дефисы</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2008/05/05/1/">Грамотность в&nbsp;аське и&nbsp;слово «щас»</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2006/12/31/1/">Новый год</a></li>
                        </ul>
                        <h2>Экзамен</h2>
                        <ul>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/yo-dots/">Точки над&nbsp;ё</a> (главное про&nbsp;букву <i>ё</i>)</li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/yo-myths/">100 мифов о&nbsp;букве ё</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/e-acute/">Об&nbsp;акуте над&nbsp;е</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2007/07/10/2/">Транслитерация в&nbsp;схеме метро и&nbsp;буква ё</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2007/10/03/1/">Про&nbsp;Рёнтгена и&nbsp;Пастёра</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2007/01/19/1/">О&nbsp;законодательном требовании употребления буквы ё</a></li>
                        </ul>
                        <h2>Зачет</h2>
                        <ul>
                            <li><a href="http://ilyabirman.ru/meanwhile/2005/12/28/2/">Об&nbsp;оформлении почтовых адресов</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/heading-colon/">Заголовку не&nbsp;нужно двоеточие</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2009/01/03/1/">Идея для&nbsp;маркетологов-кретинов</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2006/06/04/1/" class="">Маркированные списки</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2006/03/07/2/">О&nbsp;квадратных скобках</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/otricatelnye-arabskie-veka/">Отрицательные арабские века</a></li>
                        </ul>
                        <h2>Книги</h2>
                        <ul>
                            <li><a href="http://ilyabirman.ru/meanwhile/2008/09/17/1/">Микрософт и&nbsp;Пионер</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2008/09/23/1/">Иноязычные имена собственные в&nbsp;русском языке</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2009/01/13/1/">О&nbsp;Газе и&nbsp;газе</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2009/01/21/1/">Переводим названия фирм, коллективов и&nbsp;продуктов</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2008/05/07/1/">Белоруссия и&nbsp;кретины</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2008/07/10/1/">Мегабайт против «Мехамании»</a></li>
                        </ul>
                        <h2>Видео</h2>
                        <ul>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/mozhno-bez-mozhno/">Можно без&nbsp;можно</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2010/02/26/1/">Поражаясь тупости слоганов</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/snyat-i-vnesti/">Снять и&nbsp;внести</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2009/09/03/1/">Сокращаем месяцы</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/2009/05/07/1/">Работы ограждения</a></li>
                            <li><a href="http://ilyabirman.ru/meanwhile/all/ellipses/">Многоточия</a></li>
                        </ul>
                    </div>
                </div>


            </div>



        </div>



        <div class="margins">





            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/nabut/"><span class="e2-note-favourite-title">Набуть</span></a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>У&nbsp;меня язык не&nbsp;повернётся сказать «обуть ботинки»</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/nabut/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>4 комментария</u></a> &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;365</span>&nbsp;&nbsp;
                    <span title="5 апреля 2021, 22:33, GMT+05:00">2 дн</span> &nbsp;

                    <mark><span class="e2-tag">русский язык</span></mark></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/bud-to/"><span class="e2-note-favourite-title">Будь то</span></a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>Нам дали по&nbsp;предмету, будь то телефон, книга или&nbsp;чашка</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/bud-to/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>2 комментария</u></a> &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;962</span>&nbsp;&nbsp;
                    <span title="22 марта 2021, 19:29, GMT+05:00">16 дн</span> &nbsp;

                    <mark><span class="e2-tag">русский язык</span></mark></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/kontrolyor-controller/"><span class="e2-note-favourite-title">Контролёр и&nbsp;контроллер</span></a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>В&nbsp;русском языке есть слова контролёр и&nbsp;контро́ллер. Первое произошло от&nbsp;русского глагола «контролировать», который означает «следить», а&nbsp;второе&nbsp;— от&nbsp;английского глагола to&nbsp;control</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/kontrolyor-controller/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>Нет комментариев</u></a>
                    &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;103</span>&nbsp;&nbsp;
                    <span title="13 октября 2020, 13:43, GMT+05:00">5 мес</span> &nbsp;

                    <mark><span class="e2-tag">русский язык</span></mark></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/listening-40/">Что послушать&nbsp;— 40</a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>Гаянэ Багдасарян про&nbsp;шрифты, Микитко сын Алексеев про&nbsp;Пушкина и&nbsp;англицизмы и&nbsp; Сэм Харрис о&nbsp;пользе медитации в&nbsp;сложные времена</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/listening-40/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>Нет комментариев</u></a>
                    &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;211</span>&nbsp;&nbsp;
                    <span title="5 октября 2020, 13:42, GMT+05:00">6 мес</span> &nbsp;

                    <a href="https://ilyabirman.ru/meanwhile/tags/meditaciya/" class="e2-tag">медитация</a> &nbsp; <mark><span class="e2-tag">русский язык</span></mark> &nbsp; <a href="https://ilyabirman.ru/meanwhile/tags/listening/" class="e2-tag">что послушать</a> &nbsp; <a href="https://ilyabirman.ru/meanwhile/tags/fonts/" class="e2-tag">шрифты</a></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/igo/">Иго</a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>Большинство слов мы учим без&nbsp;словаря: просто слышим, как они используются, и&nbsp;через это понимаем их смысл...</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/igo/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>10 комментариев</u></a> &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;857</span>&nbsp;&nbsp;
                    <span title="3 октября 2020, 21:25, GMT+05:00">6 мес</span> &nbsp;

                    <a href="https://ilyabirman.ru/meanwhile/tags/life/" class="e2-tag">жизнь</a> &nbsp; <mark><span class="e2-tag">русский язык</span></mark></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/listening-38/">Что послушать&nbsp;— 38</a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>Загоны из-за порно, нормы русского языка и&nbsp;почему менталитета не&nbsp;существует</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/listening-38/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>1 комментарий</u></a> &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;874</span>&nbsp;&nbsp;
                    <span title="23 сентября 2020, 20:00, GMT+05:00">6 мес</span> &nbsp;

                    <a href="https://ilyabirman.ru/meanwhile/tags/obschestvo/" class="e2-tag">общество</a> &nbsp; <mark><span class="e2-tag">русский язык</span></mark> &nbsp; <a href="https://ilyabirman.ru/meanwhile/tags/sex/" class="e2-tag">секс</a> &nbsp; <a href="https://ilyabirman.ru/meanwhile/tags/listening/" class="e2-tag">что послушать</a></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/insayt-i-insayd/"><span class="e2-note-favourite-title">Инсайт и&nbsp;инсайд</span></a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>Многие люди путают слова «инсайт» и&nbsp;«инсайд». Избежать ошибки поможет простое правило: не&nbsp;использовать эти слова</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/insayt-i-insayd/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>Нет комментариев</u></a>
                    &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;653</span>&nbsp;&nbsp;
                    <span title="14 июля 2020, 08:48, GMT+03:00">8 мес</span> &nbsp;

                    <mark><span class="e2-tag">русский язык</span></mark></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/circle-globe-ring/">Кружок, шар и&nbsp;кольцо</a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>Ну кстати ещё про&nbsp;войс вместо голоса. Удобная фича языка&nbsp;— импортировать обычное слово из&nbsp;другого языка и&nbsp;дать ему специфическое значение</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/circle-globe-ring/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>Нет комментариев</u></a>
                    &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;567</span>&nbsp;&nbsp;
                    <span title="7 июня 2020, 12:13, GMT+03:00">10 мес</span> &nbsp;

                    <mark><span class="e2-tag">русский язык</span></mark></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/golos-i-voys/">Голос и&nbsp;войс</a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>Зачем слово «войс», когда есть нормальное русское «голос»? Когда я говорю «можно голосом», собеседник может подумать, что я предлагаю созвониться</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/golos-i-voys/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>2 комментария</u></a> &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;627</span>&nbsp;&nbsp;
                    <span title="7 июня 2020, 12:12, GMT+03:00">10 мес</span> &nbsp;

                    <mark><span class="e2-tag">русский язык</span></mark></div>

            </div>


            <div class="e2-note-snippet">



                <div>




                    <h1>
                        <a href="https://ilyabirman.ru/meanwhile/all/unequivocally/">Без&nbsp;экивоков</a>
                    </h1>

                </div>



                <div class="e2-note-snippet-text">
                    <p>Читаю: «Facebook employees are speaking out unequivocally»</p>
                </div>




                <div class="e2-note-meta">
                    <a href="https://ilyabirman.ru/meanwhile/all/unequivocally/#comments" class="nu"><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M2 15v-3.7C1.4 10.9.1 9.8.1 8 .1 5.5 3.6 3.5 8 3.5s7.9 2 7.9 4.5-3.5 4.5-7.9 4.5H5.3L2 15zM8 4.5C4.3 4.5 1.1 6.1 1.1 8c0 1.7 1.6 2.5 1.6 2.6l.3.1V13l1.9-1.5h.2s.8.1 2.9.1c3.7 0 6.9-1.6 6.9-3.5S11.7 4.5 8 4.5z" stroke="none"></path><path d="M2.5 11v3l2.6-2.1-.1-.5c-.9 0-1.4-.1-2-.7-.1.1-.5.3-.5.3z" stroke="none"></path></svg></span>&nbsp;<u>Нет комментариев</u></a>
                    &nbsp;


                    <span><span class="e2-svgi"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M8 12.5C3 12.5.3 8.4.2 8.3L0 8l.1-.3C.2 7.6 2.5 3.5 8 3.5s7.8 4.1 7.8 4.3l.2.3-.2.2c-.1.2-2.8 4.2-7.8 4.2zM1.2 8c.7.8 3.1 3.5 6.8 3.5 3.8 0 6.1-2.7 6.8-3.5-.6-.9-2.6-3.5-6.8-3.5-4.2 0-6.2 2.6-6.8 3.5z" stroke="none"></path><path d="M8 10.5c-1.9 0-3.5-1.6-3.5-3.5S6.1 3.5 8 3.5s3.5 1.6 3.5 3.5-1.6 3.5-3.5 3.5zm0-6C6.6 4.5 5.5 5.6 5.5 7S6.6 9.5 8 9.5s2.5-1.1 2.5-2.5S9.4 4.5 8 4.5z" stroke="none"></path><circle cx="6.7" cy="6.5" r="1.5"></circle></svg></span>&nbsp;629</span>&nbsp;&nbsp;
                    <span title="2 июня 2020, 09:03, GMT+03:00">10 мес</span> &nbsp;

                    <a href="https://ilyabirman.ru/meanwhile/tags/angliyskiy-yazyk/" class="e2-tag">английский язык</a> &nbsp; <mark><span class="e2-tag">русский язык</span></mark></div>

            </div>


            <div class="e2-pages">
                <a href="https://ilyabirman.ru/meanwhile/tags/russian-language/page-2/">Ранее</a>
                <span class="e2-keyboard-shortcut e2-keyboard-shortcut_visible">Ctrl + ↓</span>
            </div>




        </div>

        <div style="clear: both"></div>

    </main>
@endsection
