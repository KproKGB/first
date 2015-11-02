<div class="main">
<div class="career_left">
    <h3>Приєднуйся до команди ПАТ КБ "ПриватБанк"</h3>

        <p>Ми завжди раді вітати у команді ПАТ КБ "ПриватБанк" талановитих людей! Ми шукаємо захоплених своєю справою професіоналів
        як творчих, так і технічних спеціальностей. Якщо ви цілеспрямовані та працьовиті, у вас є досвід роботи на
        телебаченні або ви бажаєте його отримати – запрошуємо до нас! Надсилайте резюме, навіть якщо зараз немає
        цікавої вам вакансії. Обов'язково вкажіть назву посади, на яку ви претендуєте.</p>

    <p onclick="show()" id="bottom">Отправить резюме</p>
</div>
<div class="career_right">
    <h3>Открытые вакансии:</h3>
    <ul>
        <li>Первая вакансия</li>
        <li>Вторая вакансия</li>
        <li>Третья вакансия</li>
        <li>Четвертая вакансия</li>
        <li>Пятая вакансия</li>
        <li>Шестая вакансия</li>
    </ul>
</div>

</div>
<div class="front" id="front"></div>
<div class="popup" id="popup">
    <p style="cursor: pointer; text-align: right" onclick="hide()">Закрыть</p>
    <form method="post" action="<?php echo URL;?>career/addResume">
        <label>Имя</label><input type="text" name="name" required>
        <label>Фамилия</label><input type="text" name="surname" required><br>
        <label>Email</label><input type="email" name="email" required>
        <label>Телефон</label><input type="tel" name="phone" placeholder="+380" required><br>
        <label>Прикрепить резюме:</label><input type="file" name="cvv" required><br>
        <label>Должность</label>
        <select name="role" required>
            <option selected disabled>Выберите вакансию</option>
            <option value="default">Default</option>
            <option value="owner">Owner</option>
            <option value="admin">Admin</option>
        </select><br>
        <label>Cсылка на видеорезюме (Youtube):</label><input type="url" name="video" placeholder="youtube.com" required><br>
        <label>Сопроводительный текст</label><br>
        <textarea name="text"></textarea><br>
        <label> </label><input type="submit">
    </form>
</div>
