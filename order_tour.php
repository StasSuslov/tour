<!--<html>-->
<!--<head>-->
<!--    <title>Заказ тура</title>-->
<!--    <link href="style/style.css" rel="stylesheet" type="text/css" media="all">-->
<!--    <meta charset="utf-8">-->
<!--</head>-->
<!--<body>-->
<!--<div id="panel"></div>-->
<!--<div id="wrap">-->
<!--    <div id="header">-->
<!--        --><?php //include ('header.php');?>
<!--    </div>-->
<!--    <div id="block-menu">-->
<!--        --><?php //include ('top-menu.php');?>
<!--    </div>-->
<!--    <div id="content">-->
<!--        --><?php //include ('order_tour/form.php');?>

        <img id="top" src="images/top.png" alt="">
        <div id="form_container">

            <h1><a>Заказ тура</a></h1>
            <form id="form_33804" class="appnitro"  method="post" action="?type=8">
                <div class="form_description">
                    <p>Введите свои данные</p>
                </div>
                <ul >

                    <li id="li_1" >
                        <label class="description" for="FIO">ФИО </label>
                        <div>
                            <input id="FIO" name="FIO" class="element text medium" type="text" maxlength="255" value="" autofocus required/>
                        </div>
                    </li>

                    <li id="li_2" >
                        <label class="description" for="City">Город </label>
                        <div>
                            <input id="City" name="City" class="element text medium" type="text" maxlength="255" value="" autofocus required/>
                        </div>
                    </li>

                    <li id="li_3" >
                        <label class="description" for="e_mail">Ваш e-mail </label>
                        <div>
                            <input id="e_mail" name="e_mail" class="element text medium" type="text" maxlength="255" value=""
                                   placeholder="qwerty@yuiop.com" autofocus required pattern="\S+@[a-z]+.[a-z]+"/>
                        </div>
                    </li>

                    <li id="li_4" >
                        <label class="description" for="phone">Ваш телефон </label>
                        <div>
                            <input id="phone" name="phone" class="element text medium" type="text" maxlength="255" value="" autofocus required/>
                        </div>
                    </li>

                    <li id="li_9" >
                        <label class="description" for="tour">Выберите тур </label>
                        <div>
                            <select class="element select medium" id="tour" name="tour">
                                <!--<option value="" selected="selected"></option>-->
                                <option value="1" >First option</option>
                                <option value="2" >Second option</option>
                                <option value="3" >Third option</option>

                            </select>
                        </div>
                    </li>

                    <li id="li_5" >
                        <label class="description" for="num_persons">Количество человек </label>
                        <div>
                            <input id="num_persons" name="num_persons" class="element text medium" type="text" maxlength="255" value="" autofocus required/>
                        </div>
                    </li>

                    <li id="li_6" >
                        <label class="description" for="element_6">Дата приезда </label>
                        <span>
                            <input id="day_in" name="day_in" class="element text" size="2" maxlength="2" value="" type="text" autofocus required> /
                            <label for="day_in">DD</label>
                        </span>
                        <span>
                            <input id="month_in" name="month_in" class="element text" size="2" maxlength="2" value="" type="text" autofocus required> /
                            <label for="month_in">MM</label>
                        </span>
                        <span>
                            <input id="year_in" name="year_in" class="element text" size="4" maxlength="4" value="" type="text" autofocus required>
                            <label for="year_in">YYYY</label>
                        </span>
<!--                        <span id="calendar_6">-->
<!--                            <img id="cal_img_6" class="datepicker" src="images/calendar.gif" alt="Pick a date.">-->
<!--                        </span>-->
<!--                        <script type="text/javascript">-->
<!--                            Calendar.setup({-->
<!--                                inputField	 : "year_in",-->
<!--                                baseField    : "element_6",-->
<!--                                displayArea  : "calendar_6",-->
<!--                                button		 : "cal_img_6",-->
<!--                                ifFormat	 : "%B %e, %Y",-->
<!--                                onSelect	 : selectDate-->
<!--                            });-->
<!--//                        </script>-->
                    </li>

                    <li id="li_7" >
                        <label class="description" for="element_7">Дата отъезда </label>
                        <span>
                            <input id="day_out" name="day_out" class="element text" size="2" maxlength="2" value="" type="text" autofocus required> /
                            <label for="day_out">DD</label>
                        </span>
                        <span>
                            <input id="month_out" name="month_out" class="element text" size="2" maxlength="2" value="" type="text" autofocus required> /
                            <label for="month_out">MM</label>
                        </span>
                        <span>
                            <input id="year_out" name="year_out" class="element text" size="4" maxlength="4" value="" type="text" autofocus required>
                            <label for="year_out">YYYY</label>
                        </span>
<!--                        <span id="calendar_7">-->
<!--                            <img id="cal_img_7" class="datepicker" src="images/calendar.gif" alt="Pick a date.">-->
<!--                        </span>-->
<!--                        <script type="text/javascript">-->
<!--                            Calendar.setup({-->
<!--                                inputField	 : "year_out",-->
<!--                                baseField    : "element_7",-->
<!--                                displayArea  : "calendar_7",-->
<!--                                button		 : "cal_img_7",-->
<!--                                ifFormat	 : "%B %e, %Y",-->
<!--                                onSelect	 : selectDate-->
<!--                            });-->
<!--//                        </script>-->
                    </li>

                    <li id="li_8" >
                        <label class="description" for="comment">Комментарии </label>
                        <div>
                            <input id="comment" name="comment" class="element text medium" type="text" maxlength="255" value=""/>
                        </div>
                    </li>

                    <li class="buttons">
                        <input type="hidden" name="form_id" value="33804" />
                        <input id="saveForm" class="button_text" type="submit" name="submit" value="Отправить" />
                    </li>
                </ul>
            </form>
        </div>
        <img id="bottom" src="images/bottom.png" alt="">

<!--    </div>-->
<!--    <div id="footer">-->
<!--        --><?php //include ('footer.php');?>
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->