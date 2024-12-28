<h1>laravel-watch</h1>
<pre>
<a href="https://www.youtube.com/watch?v=X2q8dcqpjOg&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=1">Laravel для новичков</a>
<b>Stack</b>: Laravel, Blade Templates, PostgreSQL
</pre>

<h3><a href="https://www.youtube.com/watch?v=X2q8dcqpjOg&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=1">Lesson 1.
Подготовка окружения разработки</a></h3>
<ul>
<li>Установка Laravel Herd</li>
<li>Установка PHP через Laravel Herd</li>
<li>Создаем новый проект через консоль laravel new</li>
<li>Подключаем проект к Herd для работы с встроенным сервером</li>
<li>Создаем сервер БД PostgreSQL</li>
<li>Создаем БД</li>
<li>Настраеваем .env файл</li>
<li>Подключаемся к БД</li>
<li>Запускаем миграции php artisan migrate</li>
<li>herd unlink закроет доступ к приложению в браузере</li>
<li>Запуск защищенного соединения (TLS сертификат)с проектом herd secure</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=wWqPOEevbgE&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=2">Lesson 2.
Плагины</a></h3>
<ul>
<li>Для более удобной работы с Laravel проектами рекомендуется к установке плагин Laravel Idea</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=x46NMH4UbFE&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=3">Lesson 3.
Форматирование кода</a></h3>
<ul>
<li>Стандартный форматер кода</li>
<li>Настраеваем форматер Pint от Laravel</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=0ST5ZVevJ6k&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=4">Lesson 4.
Установка Tailwind CSS</a></h3>
<ul>
<li>Устанавливаем Tilewind CSS</li>
<li>Настраиваем tailwind.config.js</li>
<li>Устанавливаем npm зависимости (npm install)</li>
<li>Запускаем Vite сервер (npm run dev)</li>
<li>Подключаем стили tailwind @vite(.../app.css)</li>
<li>Указываем роут для тестирования подключения Tailwind</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=KX5o5PcJJ4Y&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=5">Lesson 5.
Делаем разметку шапки сайта</a></h3>
<ul>
<li>Пишем html структуру <header></header></li>
<li>Добавляем иконку с сайта fontawesome.com в качестве логотипа</li>
<li>Указываем стили для логотипа при помощи класса "size-12"</li>
<li>Верстка меню навигации и определяем стили</li>
<li>Задаем контейнер для контента</li>
<li>Указываем настройки для контейнера в файле tailwind.config.js для центровки (theme:{container:{center:true}})</li>
<li>Задаем шапке fixed свойства</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=2JgdtzmGcDA&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=6">Lesson 6.
Интерполяция в blade-шаблонах. Динамические значения</a></h3>
<ul>
<li>Двойные фигурные скобки в blade {{ | }} - Вывод экранированных данных с дополнительной защитой от XSS атак</li>
<li>config('app.name') - вывод значения APP_NAME из config -> app.php -> env -> APP_NAME</li>
<li>Присваивание имени пути Route::view('/', 'index')->name('index'); для обращения к пути через route('index')</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=NCUb3dF0lnw&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=7">Lesson 7.
Маршруты</a></h3>
<ul>
<li>GET обращение к маршруту /courses и возврат строкового значения из функции</li>
<li>Рефакторим функцию в стрелочную для улучшения читаемости кода</li>
<li>Создаем маршруты для всех страниц сайта</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=ZxeczT2vA-Q&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=8">Lesson 8.
Компонент layout</a></h3>
<ul>
<li>Создаем папку components для хранения blade компонентов</li>
<li>Создаем компонент при помощи функционала Laravel Idea, create view</li>
<li>Создаем компонент layout.blade.php</li>
<li>Связываем <x-name>Content</x-name> c {{ $slot }}. В $slot падает весь контент, который был определен в <x-name> связь организуется по названию компонентов и тега</li>
<li>Создаем компоненты для всех роутов</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=8f0yC0OfyhE&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=9">Lesson 9.
Компоненты шапки</a></h3>
<ul>
<li>Разбиваем разметку хедера на компоненты</li>
<li>Выделяем ссылки навигации в массив при помощи директивы @php</li>
<li>Выводим ссылки при помощи директивы @foreach</li>
<li>В компоненте nav.blade мы определяем <x-nav> с атрибутом :href (с двоеточием), который в последствии упадет в {{ $attributes }} указанную в компоненте nav-item</li>
<li>Сокращаем :href так как имя атрибута совпадает с именем переменной, которую мы помещаем в качестве атрибута</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=RtMBDMLe2o4&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=10"></>Lesson 10.
Подвал</h3>
<ul>
<li>Пишем структуру футера. Копирайт (&copy;), дата (date('Y')), меню, социальные сети</li>
<li>Повторяем тот же вывод навигации как в шапка</li>
<li>Определяем маршруты. Для выделения повторяющихся слов используем Alt+J</li>
<li>Добавляем файлы с шаблонами новых маршрутов</li>
<li>Задаем стили для навигации в футере</li>
<li>Центрируем контент</li>
<li>Добавляем иконки соцсетей</li>
<li></li>
</ul>


<h3><a href="https://www.youtube.com/watch?v=S6_A6jpPFow&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=11">Lesson 11.
Компоненты подвала</a></h3>
<ul>
<li>Создаем директорию footer. Файл footer.blade.php перемещаем в созданную директорию и переименовываем в index.blade.php таким образом адрес
к файлу footer находящийся в layout (x-footer) можно не менять.
</li>
<li>Отделяем copyright</li>
<li>Переносим nav в директорию footer. Указываем Blade адрес <x-footer.nav></li>
<li>Сбрасываем кеш Blade командой php artisan view:clear</li>
<li>Выносим nav в отдельную директорию</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=agw6OvE4o14&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=12">Lesson 12.
Перемещение пунктов навигации в layout</a></h3>
<ul>
<li>Оптимизируем nav использующийся в header и footer при помощи пропса :nav-items="$navItems"</li>
<li>Объединяем массивы с повторяющимися данными в корневом файле layout</li>
<li>Передаем массив в компоненты header и footer через props (инструмент передачи динамических данных) :nav-items="$navItems". Двоеточие перед именем пропса (nav-items) указывает, что мы передаем динамическое значение</li>
<li>Используем сокращенную нотацию для пропса :$navItems</li>
<li>Фильтруем массив для отображения конкретных данных в header и footer (В футере у нас отличаются два пункта)</li>
<li>Используем laravel helper collect для создания коллекции из нашего массива для более гибкой работы с ним</li>
<li>Используем laravel метод reject. Метод reject фильтрует коллекцию, используя заданное замыкание. Замыкание должно возвращать, true если элемент должен быть удален из результирующей коллекции:</li>
<li>Передаем отфильтрованную коллекцию дальше в дочерний элемент (nav)</li>
<li>Задаем route() пропсу :href чтобы исключить данную функцию из нашего массива и следовательно из метода reject</li>
<li>Оптимизируем вызовы хелпера collect, один раз обернув исходный массив, вместо оборачивания отдельно в футере и хедере</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=S2em3ZIe-T8&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=13">Lesson 13.
Активный пункт навигации</a></h3>
<ul>
<li>В файле items отделяем переменную attributes в блок @php</li>
<li>Присваиваем переменной attributes значения по умолчанию через метод $attributes->merge(['class'])</li>
<li>Элементу class присваиваем стили по умолчанию через merge</li>
<li>Применяем условное слияние классов через метод class()
<ul>
<li>Метод class, принимающий массив классов, где ключ массива содержит класс или классы ('px-4, 'flex'), которые вы хотите добавить, а значение является логическим выражением.</li>
<li>Метод class применит наш класс указанный в ключе при выполнении условия true указанном в значении</li>
</ul>
</li>
<li>Добавляем пропс isActive из родительского элемента для передачи его в item</li>
<li>При помощи request->routeIs($routeName)) проверяем соответствие входящего запроса "именованному маршруту"
<ul>
<li>Метод request() содержит текущий HTTP запрос</li>
<li>При помощи request()->path() можно проверить путь текущей страницы</li>
<li>Метод routeIs($val) выполняет проверку совпадает ли текущий маршрут с заданным именем $val и возвращает treu || false</li>
</ul>
</li>
</ul>


<h3><a href="https://www.youtube.com/watch?v=aIXcleaklhU&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=14">Lesson 14.
Компонент иконок</a></h3>
<pre>В данном уроке мы оптимизируем код вывода иконок соц. сетей при помощи отдельного массива
с названиями компании и её URL.

Данный урок был прослушан, но не повторен, потому как функцианал реализуемый лектором 
я ввел заранее в рамках самостоятельной работы.
</pre>

<h3><a href="https://www.youtube.com/watch?v=4eeiyGItbHc&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=15">Lesson 15.
Перемещение пунктов навигации и ссылок на социальные сети в конфигурацию</a></h3>
<ul>
<li>В директории config создаем файл с названием проекта watch</li>
<li>Внутри watch делаем return содержащий многоменрый массив с названием nav_items содержащий в себе пары ключ=>значение элементов навигации</li>
<li>Убираем пропсы из кода. Теперь мы можем обращаться к элементам навигации через метод config('nav_items')</li>
<li>Оборачиваем config(nav_items) в метод collect. Возможно будет целесообразно обернуть в коллекцию исходный массив определенный в директории config</li>
<li>Повторяем тоже самое с иконками социальных сетей</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=jsMae_xDhgQ&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=16">Lesson 16.
Основная секция главной страницы</a></h3>
<ul>
<li>Прибиваем футер к низу экрана</li>
<li>Верстка Tailwind. Наполняем index.blade.php контентом</li>
<li>Определяем section в отдельный blade шаблон x-hero/li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=PawGibOBtfs&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=17">Lesson 17.
Секция новых курсов.</a></h3>
<ul>
<li>Верстка структуры блока с последними курсами</li>
<li>Вывод item курсов через перебор foreach(range(0, 3 as $i)) <- вернет массив элементов </li>
<li>Выносим верстку в отдельный компонент</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=995_oI4FElY&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=19">Lesson 18.
Рефакторинг иконок</a></h3>
<ul>
<li>Определяем маршрут course и задаем его нашим блокам курсов</li>
<li>Задаем маршрут у карточек курсов</li>
<li>Удаляем иконки из файла config</li>
<li>Создаем файл x-icon в котором будут храниться наши иконки</li>
<li>Внутри x-icon создаем ветвление @if ($name = "youtube")</li>
<li>Что бы прокинуть эту переменную в x-icon пишем <x-icon name="youtube"/></li>
<li></li>
<li></li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=Ms1Gcom_vI0&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=19">Lesson 19.
Компонент курса</a></h3>
<ul>
<li>Создаем отдельный элемент для карточки курса</li>
<li>Создаем массив данных с информацией о курсе</li>
<li>Перебераем массив как $course и прокидываем эти данные пропсом в компонент курса</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=gUO839PGTBM&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=20">Lesson 20.
Страница с курсами</a></h3>
<ul>
<li>Выносим массив с данными курса в отдельный файл (пока web) для доступа к нему из разных компонентов</li>
<li>Определяем роут (index) get c return view('/,['courses' => $courses]); используем замыкание (use) для передачи функции доступа к массиву $courses</li>
<li>Повторяем подобную маршрутизацию для courses для отображения внутри нее данных по курсам</li>
<li>Для блока с курсами на главной странице и странице с курсами указываем уникальные h2 прокидывая атрибут (<x-courses heading="Latest Courses"/>) как строку</li>
<li>Выводим "заглушку" курса (первый элемент массива $courses) по маршруту course</li>
<li>Правим верстку</li>
<li>В маршрутах, замыкания меняем на стрелочную функцию чтобы не использовать use, return и для более лаконичного вида</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=9CushHceE9U&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=22">Lesson 21.
Отображение курса по ID</a></h3>
<ul>
<li>У каждого элемента массива прописываем id</li>
<li>В маршруте определяем course/{id}, Так же указываем $id в качестве аргумента к функции роута и в переданном ей массиве</li>
<li>Прописываем id в роутах внутри ссылок навигационного меню</li>
<li></li>
<li></li>
</ul>

<h3><a>Lesson N.</a></h3>
<ul>
<li></li>
</ul>

<h3><a>Lesson N.</a></h3>
<ul>
<li></li>
</ul>

<h3><a>Lesson N.</a></h3>
<ul>
<li></li>
</ul>


