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


<h3><a>Lesson 11. Компоненты подвала</a></h3>
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

<h3><a>Lesson N.</a></h3>
<ul>
<li></li>
</ul>




