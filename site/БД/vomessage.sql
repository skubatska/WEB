-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Час створення: Чрв 25 2019 р., 23:58
-- Версія сервера: 10.1.31-MariaDB
-- Версія PHP: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `vomessage`
--

-- --------------------------------------------------------

--
-- Структура таблиці `becomeavolunteer`
--

CREATE TABLE `becomeavolunteer` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `city` varchar(30) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `becomeavolunteer`
--

INSERT INTO `becomeavolunteer` (`id`, `name`, `email`, `phone`, `city`, `birth`, `description`, `date`) VALUES
(5, 'Сидорук Андрій', 'andriy1998@gmail.com', '+380 (99) 000-0', 'Коломия', '16.02.1998', 'Можливо, волонтерство і не найкоротший, але однозначно безпрограшний шлях до щастя. Джерел задоволення, позитивних емоцій та щастя у волонтерстві безліч — треба лише відкритися. І тоді точно знайдеш щось по душі.  Комусь може приносити щастя робота в команді, хтось кайфує від волонтерства на фестивалях та інших великих подіях, хтось готовий увесь час покласти на розвиток соціального проекту задля великої мети. Все індивідуально.Можливо, волонтерство і не найкоротший, але однозначно безпрограшний шлях до щастя. Джерел задоволення, позитивних емоцій та щастя у волонтерстві безліч — треба лише відкритися. І тоді точно знайдеш щось по душі.  Комусь може приносити щастя робота в команді, хтось кайфує від волонтерства на фестивалях та інших великих подіях, хтось готовий увесь час покласти на розвиток соціального проекту задля великої мети. Все індивідуально.', '2019-06-20 18:59:51'),
(6, 'Голіней Віктор ', 'goliney@gmail.com', '+380 (99) 000-0', 'Івано-Франківськ', '16.02.2000', 'Можливо, волонтерство і не найкоротший, але однозначно безпрограшний шлях до щастя. Джерел задоволення, позитивних емоцій та щастя у волонтерстві безліч — треба лише відкритися. І тоді точно знайдеш щось по душі.  Комусь може приносити щастя робота в команді, хтось кайфує від волонтерства на фестивалях та інших великих подіях, хтось готовий увесь час покласти на розвиток соціального проекту задля великої мети. Все індивідуально.Можливо, волонтерство і не найкоротший, але однозначно безпрограшний шлях до щастя. Джерел задоволення, позитивних емоцій та щастя у волонтерстві безліч — треба лише відкритися. І тоді точно знайдеш щось по душі.  Комусь може приносити щастя робота в команді, хтось кайфує від волонтерства на фестивалях та інших великих подіях, хтось готовий увесь час покласти на розвиток соціального проекту задля великої мети. Все індивідуально.', '2019-06-20 19:01:30'),
(7, 'Голіней Віктор Ткачук Анна', 'anna@gmail.com', '+380 (99) 000-0', 'Івано-Франківськ', '08.03.2001', 'Усі волонтери погодяться, що передусім волонтерство дає тобі можливості. Можливості відкривати нові горизонти, можливості для саморозвитку, можливість наробити такий важливий досвід. А для багатьох можливість знайти себе.  Волонтерство — це окремий величезний світ, в якому можна стати хоч урбаністом, хоч журналістом, хоч рекрутером, і зрозуміти: яка сфера дає саме тобі той кайф та щастя.  Не менш важлива частина життя волонтера — це спільнота. У колі людей, які мають с тобою одну мету та розділяють твої цінності, приємніше та легше працювати. У спільноті тих, хто не тільки готовий допомогти в роботі, але й завжди розділяти успіхи та труднощі, підтримати розмовою за кавою чи просто справою, працювати ще приємніше.  З такими людьми навколо завжди віриш у те, що ви здатні на все. Навіть змінити світ.', '2019-06-20 19:02:56'),
(8, 'Липа Ігор', 'i1998@gmail.com', '+380 (99) 000-0', 'Коломия', '16.02.1998', 'Можливо, волонтерство і не найкоротший, але однозначно безпрограшний шлях до щастя. Джерел задоволення, позитивних емоцій та щастя у волонтерстві безліч — треба лише відкритися. І тоді точно знайдеш щось по душі.  Комусь може приносити щастя робота в команді, хтось кайфує від волонтерства на фестивалях та інших великих подіях, хтось готовий увесь час покласти на розвиток соціального проекту задля великої мети. Все індивідуально.Можливо, волонтерство і не найкоротший, але однозначно безпрограшний шлях до щастя. Джерел задоволення, позитивних емоцій та щастя у волонтерстві безліч — треба лише відкритися. І тоді точно знайдеш щось по душі.  Комусь може приносити щастя робота в команді, хтось кайфує від волонтерства на фестивалях та інших великих подіях, хтось готовий увесь час покласти на розвиток соціального проекту задля великої мети. Все індивідуально.', '2019-06-20 18:59:51'),
(9, 'Братівник Олександра', 'br@gmail.com', '+380 (99) 000-0', 'Івано-Франківськ', '16.02.2000', 'Можливо, волонтерство і не найкоротший, але однозначно безпрограшний шлях до щастя. Джерел задоволення, позитивних емоцій та щастя у волонтерстві безліч — треба лише відкритися. І тоді точно знайдеш щось по душі.  Комусь може приносити щастя робота в команді, хтось кайфує від волонтерства на фестивалях та інших великих подіях, хтось готовий увесь час покласти на розвиток соціального проекту задля великої мети. Все індивідуально.Можливо, волонтерство і не найкоротший, але однозначно безпрограшний шлях до щастя. Джерел задоволення, позитивних емоцій та щастя у волонтерстві безліч — треба лише відкритися. І тоді точно знайдеш щось по душі.  Комусь може приносити щастя робота в команді, хтось кайфує від волонтерства на фестивалях та інших великих подіях, хтось готовий увесь час покласти на розвиток соціального проекту задля великої мети. Все індивідуально.', '2019-06-20 19:01:30'),
(10, 'Ковальчук Олена', 'olena@gmail.com', '+380 (99) 000-0', 'Івано-Франківськ', '08.03.2001', 'Усі волонтери погодяться, що передусім волонтерство дає тобі можливості. Можливості відкривати нові горизонти, можливості для саморозвитку, можливість наробити такий важливий досвід. А для багатьох можливість знайти себе.  Волонтерство — це окремий величезний світ, в якому можна стати хоч урбаністом, хоч журналістом, хоч рекрутером, і зрозуміти: яка сфера дає саме тобі той кайф та щастя.  Не менш важлива частина життя волонтера — це спільнота. У колі людей, які мають с тобою одну мету та розділяють твої цінності, приємніше та легше працювати. У спільноті тих, хто не тільки готовий допомогти в роботі, але й завжди розділяти успіхи та труднощі, підтримати розмовою за кавою чи просто справою, працювати ще приємніше.  З такими людьми навколо завжди віриш у те, що ви здатні на все. Навіть змінити світ.', '2019-06-20 19:02:56'),
(11, 'Ткачук Анна', 'anna@gmail.com', '+380 (99) 000-0', 'м. Коломия', '16.02.2000', 'Соціальне та арт-волонтерство', '2019-06-23 19:27:29');

-- --------------------------------------------------------

--
-- Структура таблиці `findvolunteers`
--

CREATE TABLE `findvolunteers` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `findvolunteers`
--

INSERT INTO `findvolunteers` (`id`, `name`, `email`, `phone`, `description`, `date`, `status`) VALUES
(5, 'Сіреджук Анна', 'i1998@gmail.com', '+380 99 0000000', 'Дослідження проводилось по всій Україні, включаючи території, які знаходяться в зоні АТО, без Криму, 20-\r\n26 листопада 2014 року, за допомогою методології CATI\r\n(телефонні інтерв’ю, дзвінки на мобільні номери).\r\nБуло опитано 1000 респондентів у віці 16 років і старше. Вибірка репрезентативна населенню України (за\r\nвинятком Криму) за регіоном, розміром населеного\r\nпункту, статтю та віком згідно даних Державної служби\r\nстатистики станом на 1 січня 2013 року.\r\nЗгідно висновків дослідження, українці визнають велику роль волонтерського руху в суспільних процесах:\r\n62% визнають роль волонтерів у політичних змінах\r\nостаннього року, 85% вважають, що волонтерський\r\nрух допомагає зміцненню миру, а 81% схильні вважати\r\nволонтерський рух обов’язковою складовою громадянського суспільства.\r\nМайже чверть українців (23%) мали досвід волонтерства, із них 9% українців почали займатись волонтерством протягом останнього року. Основним напрямом\r\nдіяльності волонтерів у 2014 році стала допомога українській армії та пораненим - цим займались 70% волонтерів. До подій Майдана найбільш актуальними\r\nнапрямами діяльності були допомога соціально незахищеним групам населення та благоустрій громадського простору.\r\nНайбільша група волонтері', '2019-06-20 19:13:09', 0),
(6, 'Волошенюк Ігор', 'i1998@gmail.com', '00000000000000', 'Дослідження проводилось по всій Україні, включаючи території, які знаходяться в зоні АТО, без Криму, 20-\r\n26 листопада 2014 року, за допомогою методології CATI\r\n(телефонні інтерв’ю, дзвінки на мобільні номери).\r\nБуло опитано 1000 респондентів у віці 16 років і старше. Вибірка репрезентативна населенню України (за\r\nвинятком Криму) за регіоном, розміром населеного\r\nпункту, статтю та віком згідно даних Державної служби\r\nстатистики станом на 1 січня 2013 року.\r\nЗгідно висновків дослідження, українці визнають велику роль волонтерського руху в суспільних процесах:\r\n62% визнають роль волонтерів у політичних змінах\r\nостаннього року, 85% вважають, що волонтерський\r\nрух допомагає зміцненню миру, а 81% схильні вважати\r\nволонтерський рух обов’язковою складовою громадянського суспільства.\r\nМайже чверть українців (23%) мали досвід волонтерства, із них 9% українців почали займатись волонтерством протягом останнього року. Основним напрямом\r\nдіяльності волонтерів у 2014 році стала допомога українській армії та пораненим - цим займались 70% волонтерів. До подій Майдана найбільш актуальними\r\nнапрямами діяльності були допомога соціально незахищеним групам населення та благоустрій громадського простору.\r\nНайбільша група волонтері', '2019-06-20 19:14:52', 0),
(7, 'Гричук Анатолій', 'i1998@gmail.com', '+380 99 0000000', 'Дослідження проводилось по всій Україні, включаючи території, які знаходяться в зоні АТО, без Криму, 20-\r\n26 листопада 2014 року, за допомогою методології CATI\r\n(телефонні інтерв’ю, дзвінки на мобільні номери).\r\nБуло опитано 1000 респондентів у віці 16 років і старше. Вибірка репрезентативна населенню України (за\r\nвинятком Криму) за регіоном, розміром населеного\r\nпункту, статтю та віком згідно даних Державної служби\r\nстатистики станом на 1 січня 2013 року.\r\nЗгідно висновків дослідження, українці визнають велику роль волонтерського руху в суспільних процесах:\r\n62% визнають роль волонтерів у політичних змінах\r\nостаннього року, 85% вважають, що волонтерський\r\nрух допомагає зміцненню миру, а 81% схильні вважати\r\nволонтерський рух обов’язковою складовою громадянського суспільства.', '2019-06-20 19:13:09', 0),
(8, 'Дутчак Віталія', 'i1998@gmail.com', '00000000000000', 'Дослідження проводилось по всій Україні, включаючи території, які знаходяться в зоні АТО, без Криму, 20-\r\n26 листопада 2014 року, за допомогою методології CATI\r\n(телефонні інтерв’ю, дзвінки на мобільні номери).\r\nБуло опитано 1000 респондентів у віці 16 років і старше. Вибірка репрезентативна населенню України (за\r\nвинятком Криму) за регіоном, розміром населеного\r\nпункту, статтю та віком згідно даних Державної служби\r\nстатистики станом на 1 січня 2013 року.\r\nЗгідно висновків дослідження, українці визнають велику роль волонтерського руху в суспільних процесах:\r\n62% визнають роль волонтерів у політичних змінах\r\nостаннього року, 85% вважають, що волонтерський\r\nрух допомагає зміцненню миру, а 81% схильні вважати\r\nволонтерський рух обов’язковою складовою громадянського суспільства.\r\nМайже чверть українців (23%) мали досвід волонтерства, із них 9% українців почали займатись волонтерством протягом останнього року. Основним напрямом\r\nдіяльності волонтерів у 2014 році стала допомога українській армії та пораненим - цим займались 70% волонтерів. До подій Майдана найбільш актуальними\r\nнапрямами діяльності були допомога соціально незахищеним групам населення та благоустрій громадського простору.\r\n', '2019-06-20 19:14:52', 0);

-- --------------------------------------------------------

--
-- Структура таблиці `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `phone`, `message`, `date`, `status`) VALUES
(66, 'Ткачук Андрій', 'andriy@gmail.com', '+380990000000', 'Постановка проблеми. Становлення волонтерського руху в Україні сьогодні відбувається за кількома основними напрямами,\r\nякі мають такі особливості:\r\n– добровільна безкоштовна робота волонтерів у громадських та некомерційних організаціях надання допомоги різним категоріям населення у будь-яких видах діяльності,\r\nнавчання, розвитку. Таке спрямування діяльності волонтерів будь-якого віку сприяє\r\nїх творчій та соціальній самореалізації, саморозвитку та самоспостереженню;\r\n– добровільна систематична або епізодична допомога державним установам реалізовувати соціальну політику, допомога\r\nосвітянським (шкільним та позашкільним)\r\nзакладам у навчально-виховній роботі, установам соціального забезпечення – в роботі\r\nз дітьми та молоддю з особливими потребами\r\nта людьми похилого віку;\r\n– волонтерська діяльність є наслідком\r\nтворчого саморозвитку, навчання інших\r\nтому, що сам добре знаєш, але ця діяльність\r\nне є професійною;\r\n– педагогічно спрямована волонтерська\r\nдіяльність, по суті, виступає і механізмом\r\nрозвитку особистості, її соціалізації і духовного становлення. Цей напрям розвивається в дитячих та молодіжних об\'єднаннях\r\n(метою їх створення є суспільно корисна діяльність), в різних групах при ЦССМ [1].', '2019-06-20 17:12:52', 0),
(67, 'Гурська Вікторія', 'email@gmail.com', '380990000000', 'Постановка проблеми. Становлення волонтерського руху в Україні сьогодні відбувається за кількома основними напрямами,\r\nякі мають такі особливості:\r\n– добровільна безкоштовна робота волонтерів у громадських та некомерційних організаціях надання допомоги різним категоріям населення у будь-яких видах діяльності,\r\nнавчання, розвитку. Таке спрямування діяльності волонтерів будь-якого віку сприяє\r\nїх творчій та соціальній самореалізації, саморозвитку та самоспостереженню;\r\n– добровільна систематична або епізодична допомога державним установам реалізовувати соціальну політику, допомога\r\nосвітянським (шкільним та позашкільним)\r\nзакладам у навчально-виховній роботі, установам соціального забезпечення – в роботі\r\nз дітьми та молоддю з особливими потребами\r\nта людьми похилого віку;\r\n– волонтерська діяльність є наслідком\r\nтворчого саморозвитку, навчання інших\r\nтому, що сам добре знаєш, але ця діяльність\r\nне є професійною;\r\n– педагогічно спрямована волонтерська\r\nдіяльність, по суті, виступає і механізмом\r\nрозвитку особистості, її соціалізації і духовного становлення. Цей напрям розвивається в дитячих та молодіжних об\'єднаннях\r\n(метою їх створення є суспільно корисна діяльність), в різних групах при ЦССМ [1].', '2019-06-20 17:12:52', 0),
(82, 'Ткачук Андрій', 'wwwwwww@gmail.com', '+380990000000', 'Постановка проблеми. Становлення волонтерського руху в Україні сьогодні відбувається за кількома основними напрямами,\r\nякі мають такі особливості:\r\n– добровільна безкоштовна робота волонтерів у громадських та некомерційних організаціях надання допомоги різним категоріям населення у будь-яких видах діяльності,\r\nнавчання, розвитку. Таке спрямування діяльності волонтерів будь-якого віку сприяє\r\nїх творчій та соціальній самореалізації, саморозвитку та самоспостереженню;\r\n– добровільна систематична або епізодична допомога державним установам реалізовувати соціальну політику, допомога\r\nосвітянським (шкільним та позашкільним)\r\nзакладам у навчально-виховній роботі, установам соціального забезпечення – в роботі\r\nз дітьми та молоддю з особливими потребами\r\nта людьми похилого віку;\r\n– волонтерська діяльність є наслідком\r\nтворчого саморозвитку, навчання інших\r\nтому, що сам добре знаєш, але ця діяльність\r\nне є професійною;\r\n– педагогічно спрямована волонтерська\r\nдіяльність, по суті, виступає і механізмом\r\nрозвитку особистості, її соціалізації і духовного становлення. Цей напрям розвивається в дитячих та молодіжних об\'єднаннях\r\n(метою їх створення є суспільно корисна діяльність), в різних групах при ЦССМ [1].', '2019-06-20 17:12:52', 0),
(83, 'Левицький Юрій', 'email@gmail.com', '380990000000', 'Постановка проблеми. Становлення волонтерського руху в Україні сьогодні відбувається за кількома основними напрямами,\r\nякі мають такі особливості:\r\n– добровільна безкоштовна робота волонтерів у громадських та некомерційних організаціях надання допомоги різним категоріям населення у будь-яких видах діяльності,\r\nнавчання, розвитку. Таке спрямування діяльності волонтерів будь-якого віку сприяє\r\nїх творчій та соціальній самореалізації, саморозвитку та самоспостереженню;\r\n– добровільна систематична або епізодична допомога державним установам реалізовувати соціальну політику, допомога\r\nосвітянським (шкільним та позашкільним)\r\nзакладам у навчально-виховній роботі, установам соціального забезпечення – в роботі\r\nз дітьми та молоддю з особливими потребами\r\nта людьми похилого віку;\r\n– волонтерська діяльність є наслідком\r\nтворчого саморозвитку, навчання інших\r\nтому, що сам добре знаєш, але ця діяльність\r\nне є професійною;\r\n– педагогічно спрямована волонтерська\r\nдіяльність, по суті, виступає і механізмом\r\nрозвитку особистості, її соціалізації і духовного становлення. Цей напрям розвивається в дитячих та молодіжних об\'єднаннях\r\n(метою їх створення є суспільно корисна діяльність), в різних групах при ЦССМ [1].', '2019-06-20 17:12:52', 1),
(84, 'Остапенко Стас', 'уууууууууу@gmail.com', '+380 99 0000000', 'Постановка проблеми. Становлення волонтерського руху в Україні сьогодні відбувається за кількома основними напрямами,\r\nякі мають такі особливості:\r\n– добровільна безкоштовна робота волонтерів у громадських та некомерційних організаціях надання допомоги різним категоріям населення у будь-яких видах діяльності,\r\nнавчання, розвитку. Таке спрямування діяльності волонтерів будь-якого віку сприяє\r\nїх творчій та соціальній самореалізації, саморозвитку та самоспостереженню;\r\n– добровільна систематична або епізодична допомога державним установам реалізовувати соціальну політику, допомога\r\nосвітянським (шкільним та позашкільним)\r\nзакладам у навчально-виховній роботі, установам соціального забезпечення – в роботі\r\nз дітьми та молоддю з особливими потребами\r\nта людьми похилого віку;\r\n– волонтерська діяльність є наслідком\r\nтворчого саморозвитку, навчання інших\r\nтому, що сам добре знаєш, але ця діяльність\r\nне є професійною;\r\n– педагогічно спрямована волонтерська\r\nдіяльність, по суті, виступає і механізмом\r\nрозвитку особистості, її соціалізації і духовного становлення. Цей напрям розвивається в дитячих та молодіжних об\'єднаннях\r\n(метою їх створення є суспільно корисна діяльність), в різних групах при ЦССМ [1].', '2019-06-20 17:12:52', 0),
(85, 'Візнюк Ірина', 'email@gmail.com', '380990000000', 'Постановка проблеми. Становлення волонтерського руху в Україні сьогодні відбувається за кількома основними напрямами,\r\nякі мають такі особливості:\r\n– добровільна безкоштовна робота волонтерів у громадських та некомерційних організаціях надання допомоги різним категоріям населення у будь-яких видах діяльності,\r\nнавчання, розвитку. Таке спрямування діяльності волонтерів будь-якого віку сприяє\r\nїх творчій та соціальній самореалізації, саморозвитку та самоспостереженню;\r\n– добровільна систематична або епізодична допомога державним установам реалізовувати соціальну політику, допомога\r\nосвітянським (шкільним та позашкільним)\r\nзакладам у навчально-виховній роботі, установам соціального забезпечення – в роботі\r\nз дітьми та молоддю з особливими потребами\r\nта людьми похилого віку;\r\n– волонтерська діяльність є наслідком\r\nтворчого саморозвитку, навчання інших\r\nтому, що сам добре знаєш, але ця діяльність\r\nне є професійною;\r\n– педагогічно спрямована волонтерська\r\nдіяльність, по суті, виступає і механізмом\r\nрозвитку особистості, її соціалізації і духовного становлення. Цей напрям розвивається в дитячих та молодіжних об\'єднаннях\r\n(метою їх створення є суспільно корисна діяльність), в різних групах при ЦССМ [1].', '2019-06-20 17:12:52', 0),
(86, 'Ткачук Андрій', 'wwwwwww@gmail.com', '+380990000000', 'Таке спрямування діяльності волонтерів будь-якого віку сприяє\r\nїх творчій та соціальній самореалізації, саморозвитку та самоспостереженню;\r\n– добровільна систематична або епізодична допомога державним установам реалізовувати соціальну політику, допомога\r\nосвітянським (шкільним та позашкільним)\r\nзакладам у навчально-виховній роботі, установам соціального забезпечення – в роботі\r\nз дітьми та молоддю з особливими потребами\r\nта людьми похилого віку;\r\n– волонтерська діяльність є наслідком\r\nтворчого саморозвитку, навчання інших\r\nтому, що сам добре знаєш, але ця діяльність\r\nне є професійною;\r\n– педагогічно спрямована волонтерська\r\nдіяльність, по суті, виступає і механізмом\r\nрозвитку особистості, її соціалізації і духовного становлення. Цей напрям розвивається в дитячих та молодіжних об\'єднаннях\r\n(метою їх створення є суспільно корисна діяльність), в різних групах при ЦССМ [1].', '2019-06-20 17:12:52', 0),
(87, 'Левицький Юрій', 'email@gmail.com', '380990000000', 'Постановка проблеми. Становлення волонтерського руху в Україні сьогодні відбувається за кількома основними напрямами,\r\nякі мають такі особливості:\r\n– добровільна безкоштовна робота волонтерів у громадських та некомерційних організаціях надання допомоги різним категоріям населення у будь-яких видах діяльності,\r\nнавчання, розвитку.', '2019-06-20 17:12:52', 0),
(88, 'Віталенко Оксана', '+380000000000', 'oksana@gmail.com', 'Є пропозиція!', '2019-06-24 03:43:24', 1);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `becomeavolunteer`
--
ALTER TABLE `becomeavolunteer`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `findvolunteers`
--
ALTER TABLE `findvolunteers`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `becomeavolunteer`
--
ALTER TABLE `becomeavolunteer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблиці `findvolunteers`
--
ALTER TABLE `findvolunteers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблиці `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
