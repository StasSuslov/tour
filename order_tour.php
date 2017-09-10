<?php
if(isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    $flag = TRUE;
    require 'scripts/connect.php';
    $query = mysqli_query($link, "SELECT Name, Surname, Mail, Phone FROM users WHERE user_id='".mysqli_real_escape_string($link, $_COOKIE['id'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    $FIO = $data['Name'].' '.$data['Surname'];
    $mail = $data['Mail'];
    $phone = $data['Phone'];
    mysqli_close($link);
}
else
{
    $flag = FALSE;
}
?>
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
                    <input id="FIO" name="FIO" class="element text medium" type="text" maxlength="255"
                           value="<?php if($flag) echo $FIO?>" autofocus required/>
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
                    <input id="e_mail" name="e_mail" class="element text medium" type="text" maxlength="255"
                           value="<?php if($flag) echo $mail?>"
                           placeholder="qwerty@yuiop.com" autofocus required pattern="\S+@[a-z]+.[a-z]+"/>
                </div>
            </li>

            <li id="li_4" >
                <label class="description" for="phone">Ваш телефон </label>
                <div>
                    <input id="phone" name="phone" class="element text medium" type="text" maxlength="255"
                           value="<?php if($flag) echo $phone?>" autofocus required/>
                </div>
            </li>

            <li id="li_9" >
                <label class="description" for="tour">Выберите тур </label>
                <div>
                    <select class="element select medium" id="tour" name="tour">
                        <!--<option value="" selected="selected"></option>-->
                        <option value="1" >Путешествие на Байкал</option>
                        <option value="2" >Русская Пасха в Петергофе</option>
                        <option value="3" >Дорога к солнечному камню</option>
                        <option value="4">Мурманск</option>
                        <option value="5">Великий Новгород</option>
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