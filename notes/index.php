<html>
<head>
    <title>Шпаргалка по GitHub</title>
    <link rel="stylesheet" href="inc/style.css">
    <meta charset="utf-8">
</head>
<body>
<h2>Цикл разработки через <a href="https://github.com/">github</a></h2>

<nav id="menu">
    <ul>
        <li><a href="#1">Создаем новый ключ SSH</a></li>
        <li><a href="#2">Настройка параметров пользователя</a></li>
        <li><a href="#3">Разработка</a></li>
        <li><a href="#4">Тестирование</a></li>
        <li><a href="#5">Релиз</a></li>
        <li><a href="#6">Команды GIT</a></li>
    </ul>
</nav>


<hr>
<div class="create">
    <selection id="1">
<h3>Создаем новый ключ SSH</h3>
<ol>
    <li><p>ssh-keygen -t rsa -b 4096 -C "your_email@example.com"</p></li>

    <li><p>Вводим имя ключа (обычно github_rsa):<br><br>
        <code>Enter file in which to save the key (/Users/you/.ssh/id_rsa): [Press enter]</code></p></li>

    <li><p>Вам будет предложено ввести пароль (обычно оставляют пустым):<br><br>
            <code>Enter passphrase (empty for no passphrase): [Type a passphrase]<br>
                # Enter same passphrase again: [Type passphrase again]</code></p></li>

    <li><p>Если вы используете Git Bash, включите SSH-агент:<br><br>
        <code>ssh-agent -s<br>
            # Agent pid 59566</code></p></li>

    <p>Если вы используете другой терминал строки, такие как msysgit, включите SSH-агент:<br><br>
        <code>eval $(ssh-agent -s)<br>
            # Agent pid 59566</code></p>

    <li><p>Добавить свой ключ SSH:<br><br>
            <code>ssh-add ~/.ssh/id_rsa</code></p></li>

    <li><p>Добавить сгенерированный публичный (*.pub) ключ на github: <br><br>
        <code>Settings->SSH keys->Add SSH key</code></p></li>

    <li><p>Проверка соединения:<br><br>
        <code>ssh -T git@github.com</code></p></li>
</ol></selection>
<br></div>
<hr>
<div class="setting"><selection id="2">
<h3>Настройка параметров пользователя</h3>

<p>Нужно настроить параметры для истории и удобства</p>
<code>$ git config --global user.name "Name"<br>
$ git config --global user.email "email@email.com"<br>
$ git config --global color.ui true</code><br><br>
</selection>
</div>
<hr>
<div class="dev">
<ol><selection id="3">
<h3>Разработка</h3>

<p>Существует 2 основных ветки: <b>master</b> и <b>dev</b>.</p>
<p><b>master</b> — стабильная ветка, готовая к выкатыванию на production сервер в любой момент.</p>
<p><b>dev</b> — ветка, над которой в данный момент работает команда.</p>
<p>Итак, в начале разработки <b>master</b> и <b>dev</b> ветки идентичны.</p><hr>

<li>
    <p>Когда программист начинает работу над новым дефектом / функционалом, он должен переключиться на ветку <b>dev</b>
        и получить ее последнюю версию.</p>
    <code>git checkout dev<br>
    git pull origin dev</code>
</li>

<li>
    <p>К примеру, разработчик хочет начать исправлять дефект страницы аутентификации. Номер ошибки на Github
    — 1234. Разработчик должен создать новую ветку из <b>dev</b></p>
    <code>git checkout -b 1234-bug-login</code>
    <p><b>1234-bug-login</b> это только пример. Первым словом должен быть номер дефекта, вторым — bug / feature, а
        дальше — описание проблемы.</p>
</li>

<li>
<p>Далее разработчик продолжает работу локально: делает изменения, коммиты и т.д. Commit-cообщения должны содержать
    номер ошибки и техническое описание</p>
<code>git add ...list of files...<br>
git commit -m "#1234 changing backbone model url"</code>
</li>

<li>
    <p>Итак, разработка окончена, и теперь необходимо отправить изменения на Github</p>
    <code>git push origin 1234-bug-login</code>
    <p>Все изменения теперь в репозитории. После этого разработчику необходимо обновить свою ветку из <b>dev</b>,
        чтобы иметь возможность слить ее без конфликтов.
        Сперва необходимо получить последнюю версию <b>dev</b> ветки</p>
    <code>git checkout dev<br>
    git pull origin dev</code>
    <p>И затем влить все изменения, которые произошли в <b>dev</b> ветке, в свою ветку (1234-bug-login)</p>
    <code>git checkout 1234-bug-login<br>
    git rebase dev<br>
    git push -f origin 1234-bug-login</code>
</li>

<li>
    <p>Отлично! Ветка с решенными конфликтами в репозитории. Теперь разработчик делает <b>Сreate Pull Request</b>
        из <b>1234-bug-login</b>
        в <b>dev</b> ветку при помощи Github. Так же необходимо разместить ссылку на задачу (#1234) в описании
        Pull Request.</p>
    <img src="img/Comparing%20dev...1234-bug-login.png">
</li>

<li>
<p>Pull Request отправлен, любой разработчик может сделать code review, написать комментарии, уточнения и т.д.
    Комментарии должны быть исправлены и отправлены на Github обычным способом. Pull Request обновится
    автоматически.</p>
</li>

<li>
    <p>Иногда, исправления занимают некоторое время, и другие разработчики уже слили свои ветки с <b>dev</b>. В этом
        случае есть 2 варианта:</p>
    <ul>
        <li><p>кнопка <b>Merge pull request</b> на Github активна. Это означает, что изменения других разработчиков
                не конфликтуют с текущими изменениями, и ничего дополнительного делать не требуется.</p></li>
        <img src="img/Pull%20Request%201.png">
        <li><p>кнопка <b>Merge pull request</b> неактивна. Необходимо вернуться к пункту 4) и заново слить и отправить
                изменения из <b>dev</b> ветки в <b>1234-bug-login</b>.</p></li>
        <code>git checkout dev<br>
        git pull origin dev<br>
        git checkout 1234-bug-login<br>
        git rebase dev<br>
        git push -f origin 1234-bug-login</code>
    </ul>
</li>

<li>
    <p>Отлично! Все изменения сделаны, и кто-то написал комментарий «merge it» в Pull Request. Пора нажимать кнопку
    <b>Merge pull request</b>, чтобы влить изменения <b>1234-bug-login<</b> в <b>dev</b> ветку.</p>
</li></selection>
<hr>
    <selection id="4">
    <h3>Тестирование</h3>
<li>
    <p>Как только <b>1234-bug-login</b> попадает в <b>dev</b>, Jenkins (система непрерывной интеграции) автоматически
        обновляет <b>dev сервер</b> из <b>dev</b> ветки. QA могут начинать тестировать и как итог подтвердить или
        переоткрыть задачу.</p>
</li>

<li>
    <p>Если Pull Request вносит много изменений, разработчик может при помощи Jenkins загрузить свою ветку на
        <b>qa сервер</b> для проверки тестерами.</p>
</li></selection>
<hr>
<selection id="5">
    <h3>Релиз</h3>
<li>
        <p>Перед обновлением production сервера необходимо влить <b>dev</b> ветку в <b>master</b>. Для этого мы создаем <b>Pull Request</b>
            из <b>dev</b> в <b>master</b> при помощи Github и нажимаем <b>Merge pull request</b>, вот и все. При выполнении предыдущих
            пунктов, никаких конфликтов быть не будет.</p>
</li>

<li>
        <p>Если регрессионное тестирование успешно закончено, можно обновлять production сервер, при этом берется
            последний пакет (тот, на котором проходило тестирование), и именно он устанавливается на production
            сервер.</p>
</li>

<li>
        <p>Иногда QA находят ошибки во время регрессионного тестирования. В этом случае исправления выполняются по
            стандартной схеме, исключая то, что ветка создается и сливается не из <b>dev</b>, а из <b>master</b>. После релиза
            необходимо влить исправления из <b>master</b> в <b>dev</b>.</p>
</li>
    <code>git checkout master<br>
    git pull origin master<br><br>
    git checkout dev<br>
    git pull origin dev<br><br>
    git merge master<br><br>
    git push origin dev</code>
</selection>
</ol></div>
<hr>
<div class="notes">
    <selection id="6">
<h3>Команды GIT</h3>
<ol>
    <li>Для инициализации локального репозитория необходимо выполнить:<br>
        <code>$ git clone github.com:&lt;repo-name&gt; &lt;path&gt;</code></li>
    <br>
    <li>Узнать об именах удаленных репозиториев<br>
    <code>git remote -v</code></li>
    <br>
    <li>Проверка текущего состояния репозитория<br>
    <code>git status</code></li>
    <br>
    <li>Добавление файла в коммит: <br>
    <code>git add &lt;file&gt; </code>
    <br>
    <code>git add --all &lt;path&gt; </code></li>
    <br>
    <li>Создаем коммит. Вместо "message" пишется сообщение коммита.<br>
            "-a" — Коммит всех изменений в репозитории<br>
    <code>git commit -m "message"<br>
    git commit -a -m ""</code></li>
    <br>
    <li>Получение списка произведенных изменений.<br>
    <code>git log</code><br>
        Подробный список произведенных изменений<br>
    <code>git log -p</code><br>
        Подробный список произведенных изменений в файле<br>
        <code>git log -p &lt;path&gt;</code><br>
    </li>
    <br>
    <li>
        Алиас hist/отсортированный log<br>
        <code>git config --global alias.hist 'log --pretty=format:"%h %ad | %s%d │ [%an]" --graph --date=short'</code>
    </li>
    <br>
    <li>Допустим, вы сделали commit в git, но поняли, что он недостаточно хорош. В таком случае можно продолжить правки,
        а при следующем коммите набрать:<br>
    <code>git commit -a --amend</code><br>
        Ключ --amend (улучшить, в переводе с английского) позволяет добавить к последнему коммиту новые изменения.
    </li>
    <br>
    <li>Если вы сделали commit в git, но поняли, что он достаточно плох, то можно сделать и так:<br>
        <code>git reset --soft HEAD^</code><br>
        Эта команда отменит последний коммит (но не изменения, которые вы внесли, они сохранятся).</li>
    <br>
    <li>Если последний коммит отвратителен, то можно вообще его удалить:<br>
    <code>git reset --hard HEAD^</code></li><br>
    <li>Все это работает, если вы не опубликовали свои изменения. В случае, если вы их опубликовали, то не остается ничего
        другого, как сделать коммит, который отменяет какой-то коммит:<br>
    <code>git revert commit-sha1</code><br>
        Ну, а потом опубликовать поскорее его командой git push.</li><br>
    <li>Просмотр подробной информации об изменении файла:<br>
    <code>git diff HEAD &lt;file&gt;</code></li>
    <br>
    <li>Переключение на спрятанную stash-ем версию файла<br>
    <code>git checkout --theirs &lt;file&gt;</code><br>
        Возвращение на рабочуюю версию файла<br>
        <code>git checkout --ours &lt;file&gt;</code>
    </li>
    <br>
    <li>Если случайно ветку откололи не от мастера - это можно поправить:<br>
            <code>
            1) заходишь на свою ветку, пишешь git log -1 и копируешь хеш коммита<br>
            2) заходишь на мастер, пишешь git branch -D xxx --- номер своей ветки. Это удалит твою ветку<br>
            3) git checkout -b xxx --- создаст твою ветку заново<br>
            4) git cherry-pick HASH --- вставляешь хеш коммита и он перетаскивается на новую ветку<br>
            5) git push -f origin xxxxx<br>
            -f перезатирает существующую ветку на сервере гита<br>
      </code>
    </li>
</ol></selection>
</div>
</body>
</html>
