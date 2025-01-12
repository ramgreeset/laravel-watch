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

<h3><a href="https://www.youtube.com/watch?v=9CushHceE9U&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=21">Lesson 21.
Отображение курса по ID</a></h3>
<ul>
<li>У каждого элемента массива прописываем id</li>
<li>В маршруте определяем course/{id}, Так же указываем $id в качестве аргумента к функции роута и в переданном ей массиве</li>
<li>Прописываем id в роутах внутри ссылок навигационного меню</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=kcIOf658ncQ&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=22">Lesson 22.
Получение курсов из базы данных</a></h3>
<ul>
<li>Создаем таблицу для курсов php artisan make:migration create_courses_table</li>
<li>За что отвечают методы up и down в миграциях</li>
<li>Пишем структуру для таблицы с курсами (default,string,text,integer,nullable,)</li>
<li>migrate:reset | migrate</li>
<li>Заполняем таблицу произвольными данными</li>
<li>В роутах подключаемся к БД и забираем из неё все данные select</li>
<li>Используем функцию compact(). Создает массив, содержащий переменные и их значения.</li>
<li>Изменяем обращения к элементам прошлого массива с курсами, на обращение к объектам (->) $course->title</li>
<li>Считываем одну запись для страницы курса selestOne</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=8FK3jPWEeA0&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=23">Lesson 23.
Контроллер курсов</a></h3>
<ul>
<li>Переносим логику для обработки маршрутов в контроллеры</li>
<li>Создаем контроллер php artisan make:controller CourseController</li>
<li>Создаем экшены index и show и переносим в них соответствующие маршруты</li>
<li>Указываем в качестве аргумента к show(string $id) для параметризированного роута</li>
<li>Указываем тип возвращаемого значения для экшена show (: view)</li>
<li>В маршруте указываем к какому экшену обратится роут для обработки запроса Route::get('/course/{id}', [CourseController::class, 'show'])->name('course');</li>
<li>Включаем интеграцию с БД в phpstorm</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=Gz8eqBRFsSY&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=24">Lesson 24.
Команды для
работы с базой данных в терминале</a></h3>
<pre>Работа с БД через консоль на данный момент невозможна. Windows !</pre>

<h3><a href="https://www.youtube.com/watch?v=74O6Q8DGwxw&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=25">Lesson 25.
Инспектирование SQL запросов</a></h3>
<ul>
<li>В файле AppServiceProvider в методе boot определяем слушатель SQL запросов</li>
<li>DB::listen(function(QueryExecuted $query)</li>
<li>Обращаемся к методам $query dump([$query->sql, $query->bindings, $query->time]); внутри DB::listen</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=-hd_Ghbgjbc&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=26">Lesson 26.
Конструктор SQL запросов</a></h3>
<ul>
<li>Переписываем запрос на получение всех данных из таблицы courses с помощью SQL конструктора через метод table->get</li>
<li>Переписываем запрос на получение данных из конкретного кортежа $course = DB::table('courses')->where('id', $id)->first();</li>
<li>Рассматриваем сокращенный вариант записи через метод find($id)</li>
<li>Инспектируем SQL запрос при помощи dump | $courses = DB::table('courses')->dump()->get();</li>
<li>Метод ddRowSql() - позволяет отобразить SQL запрос с учетом переданных динамических данных</li>
<li>query->toRawSql в AppServiceProvider</li>
<li>Для доступа метода toRawSql обновляем зависимости composer</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=MWEN1CAbzwA&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=27">Lesson 27.
Группировка маршрутов</a></h3>
<ul>
<li>Оборачиваем схожие маршруты в Route::group</li>
<li>Указываем контроллер, который отвечает за обработку сгруппированных маршрутов</li>
<li>Используем метод prefix('courses') для сокращения длинны маршрута</li>
<li>Именуем маршруты по конвенции Laravel name('courses.index')</li>
<li>Используем метод name и удаляем префикс из названия маршрута name('index')</li>
<li>Меняем названия маршрутов (courses.show и courses.index) в ссылках ведущих на страницы курсов</li>
<li>Меняем путь до страницы Courses в файле конфигурации</li>
<li>Создаем новую директорию для хранения шаблонов страниц | pages</li>
<li>Меняем наименование компонентов на show и index</li>
<li>Переопределяем маршрут для view с учетом новой директории (pages)</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=nzGiqRqjGEI&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=28">Lesson 28.
Модель курса</a></h3>
<ul>
<li>invokable controller - контроллер с одним методом</li>
<li>Создаем контроллер php artisan make:controller --invokable</li>
<li>Переносим содержимое роута главной страницы в созданный контроллер</li>
<li>Импортируем класс DB</li>
<li>Указываем инвокабл контроллер в роуте</li>
<li>Создаем модель</li>   
<li>Используем модель в контроллере курса и Index контроллере</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=ruTZZFGa7F4&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=29">Lesson 29.
Связывание модели с параметром маршрута</a></h3>
<ul>
<li>Связываем модель с маршрутом при помощи параметризированного роута. Неявное связывание модели с параметром маршрута</li>
<li>Указываем явно к какому полю в БД обращаться роуту для вывода данных /{course:lessons_count}</li>
<li>Рассматриваем getRouteKeyName для глобального обращения роутов к определенным колонкам в БД</li>
<li>Используем метод missing для отображения кастомных данный в случае если запись не будет найдена в БД</li>
<li>Используем класс Redirect</li>

</ul>

<h3><a href="https://www.youtube.com/watch?v=Vur8nekwa0E&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=30">Lesson 30.
Сидер курсов</a></h3>
<ul>
<li>Создаем класс сеятель для создания моковых данных курсов</li>
<li>В методе run Определяем класс Course с методом create внутри которого вкладываем массив с данными-заглушками</li>
<li>Тестируем сидер php artisan db:seed --class=CourseSeeder</li>
<li>В сидере определяем коллекцию с диапазоном значений (1, 10) для добавления 10 записей collect()->range(1, 10)->each(function (int $i)</li>
<li>Указываем переменную $i в поле 'title' => 'Course'.$i, для нумерации курсов</li>
<li>Course::truncate - метод для удаления данных из таблицы</li>
<li>Указываем наш класс сидера в DatabaseSeeder и выполняем db:seed (без указания класса сидера) для заполнения БД мок данными</li>
<li>Рассматриваем команду php artisan migrate:fresh для обновления миграций. флаг --seed дополнительно прокинет наши сиды</li>

</ul>

<h3><a href="https://www.youtube.com/watch?v=AjC095wnlcM&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=31">Lesson 31.
Фабрика курсов</a></h3>
<ul>
<li>Создаем класс фабрики CourseFactory</li>
<li>Вызываем класс фабрики в CourseSeeder | Course::factory(10)->create(); в качестве аргумента factory() указываем кол-во создаваемых данных</li>
<li>Указываем в модели трейт use HasFactory;</li>
<li>Выполняем сидер</li>
<li>Генерируем данные при помощи faker</li>
<li>$this->faker->words(rand(2, 4), true)</li>
<li>$this->faker->text()</li>
<li>$this->faker->numberBetween(1, 50)</li>
<li>Используем faker с интерполяцией blade</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=WYGjdavpM0k&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=32">Lesson 32.
Генерация фабрик моделей</a></h3>
<ul>
<li>Правка верстки</li>
<li>Альтернативный синтаксис библиотеки fakerphp | глобальная функция fake()</li>
<li>Оборачиваем title в ucfirst - Верхний регистр первого символа строки</li>
<li>Выносим функции фейк данных в отдельную переменную для большей читаемости</li>
<li>fake()->paragraph(1)</li>
<li>generate helper code</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=DBwMVE0_Udc&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=33">Lesson 33.
Метод sequence в фабриках</a></h3>
<ul>
<li>Добавляем массив с предопределенными данными для использования метода sequence в сидере</li>
<li>В методе factory получаем кол-во элементов массива $data (массив с предопред. данными)</li>
<li>Используем метод sequence и оператор спред (...)</li>
</ul>

<h3><a">Lesson 34. Пагинация</a></h3>
<ul>
<li>Course::paginate(); По умолчанию пагинация отображает 15 записей</li>
<li>В конфигурационном файле tailwind указываем путь до стилей к пагинации</li>
<li>darkMode: 'selector'</li>
<li>Указываем методу paginate(4) в качестве аргумента кол-во элементов для вывода на одной странице</li>
<li>На {{ $courses->links() }} вешаем проверку на существование метода, для отображения пагинации только на странице курсов method_exists</li>
<li>В контроллере IndexController указываем $courses=Course::take(4)->get() для отображения 4 карточек курсов</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=cDB9ICc2Kr0&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=35">Lesson 35.
Сортировка курсов</a></h3>
<ul>
<li>В инвокабл контроллере добавляем метод latest для сортировки курсов</li>
<li>Метод oldest - сортировка в порядке возрастания</li>
<li>Метод сортировки orderBy() - Сортировка по определенному значению указанному в аргементе метода</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=HTNNVWxOtto&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=36">Lesson 36.
Форма поиска курсов</a></h3>
<ul>
<li>Отвязываем логику компонента с курсами от логики курсов на главной странице (Правим шаблон с пагинацией)</li>
<li>Создаем компонент поисковой строки</li>
<li>Определяем иконку поиска в компонент x-icon</li>
<li>Прописываем стили для формы поиска</li>
<li>Установка tailwindCSS forms</li>
<li>Правка стилей</li> 
</ul>

<h3><a href="https://www.youtube.com/watch?v=fBgZtzg_BaU&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=37">Lesson 37.
Поиск курсов</a></h3>
<ul>
<li>В форме поиска указываем action ведущий на страницу с курсами courses.index</li>
<li>В CourseController задаем доступ к объекту request | index(Request $request)</li>
<li>Указываем имя поисковому полю (<input name="search">) | В request->all упадет массив search=>... при обращении к адресу ...test/courses?search=bla-bla</li>
<li>При указании request->search мы получим только строку указанную после ?search=</li>
<li>Тестируем отправку запроса из input в поимковую строку</li>
<li>К $courses применяем метод whereLike('title', "%{$request->search}%") В качестве аргументов указываем по какому ключу будем проводить сравнение, а также шаблон SQL запроса к БД </li>
<li>Используем функцию orWhereLike('description', "%{$request->search}%") для поиска по описанию'</li>
<li>В результате получим запрос select * from 'courses' where 'title like ? or 'description like ? order by 'created_at' desc</li>
<li>Указываем <input value="{{request()->search}}"> или <input value="{{request('search')}}"> для того чтобы запрос оставался в поле инпута после отправки</li>
<li>Используем метод withQueryString() для правильного взаимодействия поиска с пагинацией (при выдаче результата по поиску и переходу на новую страницу запрос перестает быть актуальным и пагинатор выдает нам все страницы вместо тех, которые соответствуют запросу)</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=mj-ezqObdAE&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=38">Lesson 38.
Страница курса</a></h3>
<ul>
<li>Рефакторинг верстки страницы с курсом</li>
<li>В шаблоне курса выводим информацию о последнем обновлении {{ $course->updated_at->format('d.m.Y') }}
</ul>

<h3><a href="https://www.youtube.com/watch?v=CecXFkN8ZyI&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=39">Lesson 39.
Список уроков</a></h3>
<ul>
<li>Верстка блока со списком уроков. Использование спец символа &middot</li>
<li>Вывод списка уроков через foreach</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=coIq9Odmfp8&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=40">Lesson 40.
Группировка компонентов ресурса курсов</a></h3>
<ul>
<li>Рефакторинг. Разбиение страницы с курсом на компоненты</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=0rzRB9GReBM&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=41">Lesson 41.
Заполнение таблицы уроков</a></h3>
<ul>
<li>Создаем модель Lesson, а так же фабрику, сидер и миграции</li>
<li>Определяем необходимые нам поля в миграциях</li>
<li>Заполняем фабрику и сидер</li>
<li>Работа с функцией mt_rand() (в фабрике)</li>
<li>Добавляем класс LessonSeeder в массив вызовов внутри DatabaseSeeder</li>
<li>Запускаем миграцию</li>
<li>Прокидываем данные из модели Lesson в компонент курсаю Работа с методом take()</li>
<li>Указываем данные полученные из класса Lesson и раскидываем их в компоненте {{$lessons->title}} и т.д.</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=3X6BDtTN8Es&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=42">Lesson 42.
Внешние ключи (foreign keys)</a></h3>
<ul>
<li>Добавляем в миграции lessons, колонку с id (course_id) для связывания таблиц через внешние ключи (foreign key)</li>
<li>Работа с методом foreign, а также references для связывания course_id (lessons) и id->on('courses')</li>
<li>Работа с методом foreignId('course_id')->constrained(table: 'courses');</li>
<li>Метод onUpdate('cascade') при обновлении кортежа обновит так же связанный с ним кортеж</li>
<li>Метод onDelete('cascade') при удалении кортежа так же удалит связанный с ним кортеж</li>
<li>Метод foreignIdFor(Class::class) - альтернативный синтаксис для реализации связывания таблиц</li>
<li>cascadeOnUpdate и cascadeOnDelete - работают вметсе с foreignIdFor(Class::class)</li>
<li>Course::inRandomOrder->first()->id() - связывание одной записи с другой в хаотичном порядке</li>
<li>Schema::withoutForeignKeyConstraints() - отключение проверок</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=q15h43GfQnM&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=43">Lesson 43.
Отношение один ко многим</a></h3>
<ul>
<li>Определив public function lessons(){}:HasMany, которая вернет $this->hasMany(Lesson::class) мы связываем модель Course с моделью Lesson</li>
<li>Проверяем полученные (связанные) данные через интерфейс командной строки tinker</li>
<li>Обращаемся к свойству lessons ($course->lessons) в котором находятся связанные с id <-> course_id данные</li>
<li>Помещаем внешнее свойство в компонент <x-course.lessons :lessons="$course->lessons"></li>
<li>Используем метод $lessons->count() для подсчета кол-ва уроков в коллекции</li>
<li>Если мы не следуем соглашениям именования, мы можем указать связь таблиц (в Models\Course) явно $this->hasMany(Lesson::class, 'course_id', 'id')</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=PsDPKq9_EOk&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=44">Lesson 44.
Отношение один ко многим</a></h3>
<ul>
<li>Меняем логику генерации случайных данных в LessonSeeder для кол-ва уроков в курсах | Course::each. В логике указываем добавление данных в поле 'number'</li>
<li>В модели Lesson описываем отношение "Многие к одному" belongsTo</li>
<li>При помощи Lesson::factory()->for($course) в LessonSeeder указываем с какой моделью связать сгенерированные данные</li>
<li>Выводим данные о кол-ве уроков в карточку курса</li>
<li>Удаляем добавление фейковых данных в таблицу из factory lessons_count и саму колонку lessons_count из миграций </li>

<pre>
В уроках по отношениям осталось много магии. К данным урокам нужно вернуться и посмотреть их повторно
В LessonSeeder мы обращаемся к Course::each.
Перебираем курсы и для каждого из них генерируем определенное кол-во уроков
так же связываем текущие сгенерированные уроки с конкретным курсом и 
добавляем в таблицу данных number курса.
</pre>
</ul>

<h3><a href="https://www.youtube.com/watch?v=IEcrXKwBQfs&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=45">Lesson 45.
Страница урока</a></h3>
<ul>
<li>Создаем контроллер в котором создаем метод show</li>
<li>Определяем маршрут для урока и указываем к какому контроллеру и экшену обращаться Route::get('lessons/{lesson}', [LessonController::class, 'show'])</li>
<li>В методе show(Lesson $lesson) в (LessonController) возвращаем (return) страницу lesson.show.blade.php и передаем ей массив lesson, указав вторым аргументом compact('lesson')</li>
<li>Указываем маршрут в ссылках внутри компонентов в тегах <a></li>
<li>Создаем компонент lesson.show.blade.php. Верстка</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=kq64_4QiLhU&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=46">Lesson 46.
Видео плеер</a></h3>
<ul>
<li>Добавляем iframe видео на страницу урока</li>
<li>Убираем лишние атрибуты (height, width)</li>
<li>В поле title указываем $lesson->title</li>
<li>Верстка кнопок плеера. пред/след. урок.</li>
<li>Добавление иконок</li>
<li>В роуте для кнопки "Все курсы" указываем отношение урока к курсу {{ route('courses.show', $lesson->course) }}</li>
<li>Добавление иконок</li>
<li>Добавление иконок</li>
</ul>

<h3><a href="https://www.youtube.com/watch?v=bZiOOZfEh3w&list=PL-FhWbGlJPfY8KK_1Tp6fdmCjlX8soQCA&index=47">Lesson 47.
Тестовые данные уроков</a></h3>
<ul>
<li>Отделение компонента плеера</li>
<li>Правка контейнера в tailwind.config | Рефакторинг верстки</li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ul>

<h3><a">Lesson 48.</a></h3>
<ul>
<li></li>
</ul>

<h3><a">Lesson 49.</a></h3>
<ul>
<li></li>
</ul>

<h3><a">Lesson 50.</a></h3>
<ul>
<li></li>
</ul>

<h3><a">Lesson 51.</a></h3>
<ul>
<li></li>
</ul>

<h3><a">Lesson 52.</a></h3>
<ul>
<li></li>
</ul>

<h3><a">Lesson 53.</a></h3>
<ul>
<li></li>
</ul>

<h3><a">Lesson 54.</a></h3>
<ul>
<li></li>
</ul>

<h3><a">Lesson 55.</a></h3>
<ul>
<li></li>
</ul>
