<div class="main">
<div class="career_left">
    <h2 style="text-align: center">Присоединяйся к команде ПАТ КБ "ПриватБанк"</h2>

        <p>Мы всегда рады приветствовать в своей команде увлеченных работой профессионалов! Если вы целеустремленны
            и трудолюбивы, готовы долго  и плодотворно работать, у вас есть опыт работы или вы хотите его получить
            - присылайте нам свое резюме.</p>
    <img src="<?=URL?>public/img/career.jpg">
</div>

<div class="career_right">
    <h3 style="text-align: center">Открытые вакансии:</h3>
    <p><h3>- Специалист по стандартизированной претензионно-исковой работе</h3></p>
    <strong>Обязанности:</strong> подготовка претензий, исковых заявлений, жалоб и иных документов процессуального характера.<br>
    <strong>Требования:</strong>
    <ul>
        <li>высшее или неполное высшее образование (юридическое или экономическое)</li>
        <li>ориентация на результат</li>
        <li>обучаемость</li>
        <li>внимательность к деталям</li>
        <li>ответственность</li>
        <li>умение планировать и правильно использовать время</li>
        <li>коммуникабельность</li>
        <li>хорошее владение ПК</li>
    </ul>
    <strong>Условия работы:</strong>
    <ul>
        <li>прием на договор гражданско-правового характера (по результатам дальнейшей работы возможен
            переход на трудовой договор)</li>
        <li>сдельная форма оплаты труда (вознаграждение сотрудника напрямую зависит от результатов работы;
            <br>средний доход по подразделению  = 4400 грн., максимальный = не ограничен)</li>
        <li>график работы сотрудников:
            <ul>
                <li>5-дневная рабочая неделя, с 8-30 до 17-30</li>
                <li>ночной, 2 через 2, с 19-00 до 7-00</li>
            </ul>
        </li>
    </ul>
</div>

<div class="mybottom">
    <p onclick="show()" id="bottom">Отправить резюме</p><br><br><br><br>
</div>

</div>
<div class="front" id="front"></div>
<div class="popup" id="popup">
    <img onclick="hide()" src="<?=URL?>public/img/cross.png">
    <form method="post" enctype = "multipart/form-data" action="<?php echo URL;?>career/addResume"><br><br>
        <label>Фамилия *</label>
        <input type="text" name="surname" required placeholder="Ваша фамилия" value="" pattern="(^[а-яА-Яa-zA-Z]{1,15}$)"><br>
        <label>Имя *</label>
        <input type="text" name="name" placeholder="Ваше имя" required value="" pattern="(^[а-яА-Яa-zA-Z]{1,15}$)"><br>
        <label>Телефон *</label>
        <input id="phone" type="text" name="phone" placeholder="+38 (___) ___-____" required value=""><br>
        <label>E-mail *</label>
        <input type="email" name="email" required placeholder="exemple@email.com" value=""><br>
        <label>Должность *</label>
        <select name="role" required>
            <option selected disabled>Выберите вакансию</option>
            <option value="role">Специалист по претензионно-исковой работе</option>
        </select><br>
        <label>График работы *</label>
        <select name="workt" required>
            <option selected disabled>Выберите график работы</option>
            <option value="workt1">5-дневная рабочая неделя</option>
            <option value="workt2">ночной, 2 через 2</option>
        </select>
        <br>
        <label>Прикрепить резюме *</label><input type="file" name="cvv" required><br>
        <label>Cсылка на видеорезюме (Youtube)</label>
        <input type="url" name="video" placeholder="youtube.com" value=""><br><br>
        <span>* Поля обязательные к заполнению</span><br>
        <span>** Внимание!!! Письма, в которых кроме текстовой версии прикреплено и видео резюме,
       рассматриваются в первую очередь.</span><br><br>
        <input type="submit" value="Отправить резюме">
    </form>
</div>
