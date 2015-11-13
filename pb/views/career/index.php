<div class="main">
<div class="career_left">
    <h3 style="text-align: center">Присоединяйся к команде ПАТ КБ "ПриватБанк"</h3>

        <p>Мы всегда рады приветствовать в своей команде увлеченных работой профессионалов! Если вы целеустремленны
            и трудолюбивы, готовы долго  и плодотворно работать, у вас есть опыт работы или вы хотите его получить
            - присылайте нам свое резюме.</p>
    <img src="<?=URL?>public/img/career.jpg">
</div>

<div class="career_right">
    <h3 style="text-align: center">Открытые вакансии:</h3>
    <p><strong>- Специалист по стандартизированной претензионно-исковой работе</strong></p>
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
        <li>прием на договор гражданско-правового характера (по результатам дальнейшей работы возможен переход на трудовой договор)</li>
    <li>сдельная форма оплаты труда (вознаграждение сотрудника напрямую зависит от результатов работы;
        средний доход по подразделению  = 4400 грн., максимальный = не ограничен)</li>
    <li>график работы сотрудников:<ul>
    <li>5-дневная рабочая неделя, с 8-30 до 17-30</li>
    <li>ночной, 2 через 2, с 19-00 до 7-00</li></ul></li>
    </ul>
</div>

<div class="mybottom">
    <p onclick="show()" id="bottom">Отправить резюме</p>
    <span>Внимание!!! Письма, в которых кроме текстовой версии прикреплено и видео резюме,
       рассматриваются в первую очередь.</span>
</div>

</div>
<div class="front" id="front"></div>
<div class="popup" id="popup">
    <img onclick="hide()" src="<?=URL?>public/img/cross.png">
    <form method="post" action="<?php echo URL;?>career/addResume">
        <label>Фамилия</label><input type="text" name="surname" required value="surname">
        <label>Имя</label><input type="text" name="name" required value="name"><br>
        <label>Телефон</label><input type="tel" name="phone" placeholder="+380" required value="380501234567">
        <label>Email</label><input type="email" name="email" required value="admin@admin.com"><br>
        <label>Должность</label>
        <select name="role" required>
            <option selected disabled>Выберите вакансию</option>
            <option value="cvv1">Вакансия 1</option>
            <option value="cvv2">Вакансия 2</option>
            <option value="cvv3">Вакансия 3</option>
        </select>
        <label>График работы</label>
        <select name="workt" required>
            <option selected disabled>Выберите время</option>
            <option value="workt1">5-дневная рабочая неделя</option>
            <option value="workt2">ночной, 2 через 2</option>
        </select>
        <br>
        <label>Прикрепить резюме:</label><input type="file" name="cvv"><br>
        <label>Cсылка на видеорезюме (Youtube):</label>
        <input type="url" name="video" placeholder="youtube.com" required value="https://youtu.be/Et-mM92HPxQ"><br><br>
        <span>* Внимание!!! Письма, в которых кроме текстовой версии прикреплено и видео резюме,
       рассматриваются в первую очередь.</span><br><br>
        <input class="push" type="submit" value="Отправить резюме">
    </form>
</div>
