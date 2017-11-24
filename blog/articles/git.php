<?php //include './../../header.php' ?>   
    <div id="blog"> 
            <h1> Шпаргалка по использованию Git!</h1>
            <hr>
            <h2>Основной базовый цикл:</h2>
            <ol>
                <li>Сделать\внести изменения;</li>
                <li>Добавить изменения (в буфер);</li>
                <li>Закоммитить изменения с сообщением в репозиторий</li>
            </ol>
            <h2>Рекомендуемые правила составления сообщений для коммита:</h2>
            <ol>
                <li>Краткое однострочное сообщение (менее 50 символов);</li>
                <li>Опционально может последовать пустая строка, затем более подробное описание;</li>
                <li>Для больших описаний каждая отдельная строка должна быть менее 72 символов;</li>
                <li>Сообщение для коммита писать в настоящем времени, не в прошедшем, маркируете этим, что делает коммит, а не что сделали вы как создатель:
                    - "Фиксит баг" , не "Пофиксил баг";</li>
                <li>Если нужен список, можно использовать звездочки или дефисы;</li>
                <li>Можно использовать номера багов, номера тикетов или номера запросов;</li>
                <li>Можно в квадратных скобках указать сокращения используемые в вашей организации:</li>
                    <ul>
                        <li>"[css, js]"</li>
                        <li>"bugfix: "</li>
                        <li>""#38405"</li>
                    </ul>
                <li>Писать четкие и содержательные сообщения:<br>
                    - Плохо: "Исправить опечатку"<br>
                    - Хорошо: "Добавить отсутствующий тег > в разделе проекта HTML"<br>
                    - Плохо: "Обновить код логина"<br>
                    - Хорошо: "Изменить пользовательскую аутентификацию на Blowfish"<br>
                    - Плохо: "Обновляет отчет о членстве, на следующей неделе мы обсудим, правильно ли это"(включает другие комментарии, которые не касаются самого коммита)</li>
            </ol>
            <h2>Для успешного начала работы необходимо выполнить ряд действий:</h2>
                <ol>
                    <li>Необходимо установить Git;</li>
                    <li>Необходимо произвести первые настройки, а именно:</li>
                        <ul>
                            <li>установить имя пользователя <span class="code"> git config user.name <em>sername</em></span>;</li>
                            <li>установить email adress пользователя <span class="code">git config user.email <em>email@example.com</em></span>.</li>
                        </ul>
                    <li>Создание репозитория:
                        <ul>
                            <li>переходим в необходимою директорию <span class="code">cd <em>/путь к директории</em></span></li>
                            <li>говорим git отслеживать изменения в данной директории <span class="code">git init</span></li>
                        </ul>
                    </li>
                    <li>Добавить в репозиторий все имеющиеся в директории файлы <span class="code">git add . </span></li>
                    <li>Проверить статус изменений <span class="code">git status </span></li>
                    <li>Сделать первый коммит <span class="code">git commit -m "comment"</span></li>
                </ol>
            <h2>Возможность просматривать логи коммитов:</h2>
            <ul>
                <li>Просмотреть все логи <span class="code">git log</span></li>
                <li>Показать последние n изменений <span class="code">git log -n 1</span></li>
                <li>Показать количество коммитов до данной дыты <span class="code">git log --until=2012-06-15</span></li>
                <li>Показать лог с коммитами от автора с именем Kevin (часть имени) <span class="code">git log - -author="Kevin"</span></li>
                <li>Поиск коммита с использованием шаблона регулярного выражения <span class="code">git log --grep="Init"</span></li>
                <li>Сравнить файлы, находящиеся в рабочей директории и репозитории <span class="code">git diff</span></li>
                <li>Просмотреть изменения произведенные в конкретном файле <span class="code">git diff <em>name.fail</em></span></li>
                <li>Сравнить файлы, находящиеся в буфере и репозитории <span class="code">git diff --staged</span></li>
            </ul>
             <h2>Отмена изменений</h2>
            <ul> 
                <li>Вернуть файл из репозитория в рабочую директорию при этом (--) остаться в той же ветке (бранче) <span class="code">git checkout -- <em>name.file</em></span></li>
                <li>Вернуть файл из буфера, т.е. не включать файл в коммит <span class="code"> git reset HEAD <em>name.fail</em></span></li>
                <li>Добавить изменения к пердыдущему коммиту:
                    <ol>
                        <li> узнать HEAD и комментарий последнего коммита <span class="code">git log</span></li>
                        <li> добавить необходимый файл в буфер <span class="code">git add</span></li>
                        <li> добавить необходимый файл в коммит <span class="code">git commit --amed -m "Сообщение предыдущего коммита"</span></li>
                    </ol>
                </li>
                <li>Изменить сообщение коммита <span class="code">git commit --amed -m "изменённое сообщение"</span></li>
                <li>Вернуть файл в буфер из коммита <span class="code">git checkout <первые 10 симфолов ssh> -- <em>name.file</em></span></li>
                <li>Вернуться к предыдущему коммиту <span class="code">git revert <первые 10 симфолов ssh></span> иземенить сообщение комита и нажать enter</li>
                <li>git reset
                    <ul>
                        <li><span class="code">-- soft</span> переместить указатель HEAD</li>
                        <li><span class="code">--mixed</span> возвращает указатель на конкретный коммит и меняет буфер соответствующий репозиторию, но не меняет рабочую дирректорию</li>
                        <li><span class="code">--hard</span> возвращат всё к необходимому коммиту А и стирает все данные сделанные после коммита А</li>
                    </ul>
                </li>
            </ul>
            <h2> Игнорирование файлов</h2>
            <ul> 
                <li>Необходимо создать файл в корне проекта <span class="code">touch <em>.gitignore</em></span></li>
                <li>Далее необходимо в данный файл внести игнорируемые файлы используя названия файла или регулярные выражения</li>
                <li> Если файлы были когда-то отслеживаемым, то их необходимо сначало удалить из репозитория <span class="code">git rm --cached <em>filename</em></span></li>
                <li>После чего необходимо всё закомитить</li>
            </ul>
            <h2>Бранчинг</h2>
            <ul>
                <li>Показать список веток <span class="code">git branch</span></li>
                <li>Создать новую ветку (бранч) c именем new_feature <span class="code"> git branch new_feature</span></li>
                <li>Перейти на ветку new_feature <span class="code">git checkout new_feature</span></li>
                <li>Создать новую ветку и сразу же переключиться/перейти на неё <span class="code">git chekout -b shorten_title</span></li>
                <li>сравнить изменения в верхушках этих двух веток <span class="code"> git diff master..new_feature</span></li>
                <li>показывает изменения в файле на одной строке <span class="code"> git diff --color-words new_feature..shorten_title</span></li>
                <li>покажет все бранчи, которые полностью включены в данный бранч <span class="code">git branch --merged</span></li>
                <li>переименовать бранч <span class="code">git branch -m new_feature seo_title</span></li>
                <li>удалить бранч с именем branch_to_delete <span class="code">git branch -d branch_to_delete</span></li>
                <li>удалить ветку branch_to_delete принудительно, игнорируя предупреждение о неслитых изменениях <span class="code">git branch -D branch_to_delete</span></li>
                <li>не производить быстрое слияние, а создать новый коммит слияния <span class="code">git merge --no-ff branch</span></li>
                <li>произвести слияние, если оно будет быстрым<span class="code">git merge --ff-only branc</span></li>
                <li>оборвать\отменить процесс слияния<span class="code">git merge --abort</span></li>
            </ul>
            <h2>Удалённые репозитории</h2>
            <ul>
                <li>отправить изменения на отдаленный репозиторий в ветку master<span class="code">push</span></li>
                <li>показывает подключенные к этому проекту отдаленные репозитории<span class="code">git remote</span></li>
                <li>создать ветку с именем origin и подключить к ней отдаленный репозиторий по адресу, с которым будет синхронизироваться<span class="code">git remote add origin https://github.com/user/repositoryname.git </span></li>
                <li>показать информацию об отдаленном репозитории<span class="code">git remote -v</span></li>
                <li>отправить на отдаленный репозиторий коммиты из локального репозитория<span class="code">git push -u origin master </span></li>
                <li>показать отдаленные ветки <span class="code">git branch -r</span></li>
                <li>показать все ветки, в том числе и отдаленные<span class="code">git branch -a</span></li>
                <li>клонировать проект из отдаленного репозитория к себе. Вместо имени по умолчанию (название репозитория) можно указать другое название папки "foldername", в которую он будет склонирован <span class="code">git clone https://github.com/user/reponame.git <em>foldername</em></span></li>
                <li>установить опцию "отслеживания\tracking" для ранее не отслеживаемой ветки non_tracking<span class="code">git branch - -set-upstream non_tracking origin/non_tracking</span></li>
                <li>отправить изменения в отдаленную ветку origin <span class="code">git push origin master</span></li>
                <li>получить изменения из отдаленного репозитория в ветку origin/master, синхронизироваться с ним, т.к. у нас только один отдаленный репозиторий, то название можно опустить и использовать сокращенную команду<span class="code">git fetch origin</span></li>
                <li>слить изменения из origin/master в нашу текущую ветку<span class="code">git merge origin/master</span></li>
                <li>находит последний коммит, скачивает его и делает слияние в текущий бранч за один шаг<span class="code">git pull = git fetch + git merge</span></li>
            </ul>          
       </div>
<?php //include './../../footer.php'?>