# 3_labs

## Для запуска проекта с помощью docker compose необходимо выполнить следующие шаги

1. Склонировать репозиторий на свой компьютер с помощью команды git clone <https://github.com/VBIo-303rsob/web_2_labs.git>

1. Перейти в папку проекта, используя команду

```cli
cd web_2_labs
```

1. Запустить проект, используя команду

```cli
docker-compose up
```

1. Открыть браузер и перейти по адресу <http://localhost:80/>

После выполнения этих шагов вы сможете просмотреть проект в браузере и начать работу с ним.

## Структура проекта

```txt
./html             - директория с  php скриптами
docker-compose.yml - файл описания для запуска сайта с прокси сервером
nginx.conf         - конфигурационный файл прокси сервера
```

## Исходные данные

1. Создать функцию, которая принимает четыре текстовые строки, а выводит таблицу, где каждая из исходных строк расположена в отдельной строке.

2. Создать файл cookie.php.

- При первом запросе страницы cookie.php пользователем, выводить фразу «Добро пожаловать!»
- При повторных запросах:
- Выводить количество посещений. Например: «Вы зашли на страницу 5 раз»
- Указывать дату и время последнего посещения. Например: «Последнее посещение: 20-08-2009 16:34:45»

## Пояснение к функциям

### 1 задание

Функция PrintTable

В этой функции используются теги HTML для создания таблицы и вывода каждой из четырех строк в отдельной строке таблицы с помощью тега  "\<tr>" и "\<td>". Передается четыре текстовые строки в качестве аргументов функции и используются для заполнения таблицы.

## 2 задание

Функция  cookie

В этом функции мы сначала вызываем функцию setcookie() для установки cookie с именем "last_visit", а затем проверяем наличие cookie с именем "visits" и устанавливаем ее, если она не установлена.
