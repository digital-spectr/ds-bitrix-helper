# bx.helper
Полезные методы для работы с Bitrix'ом и не только

## Список методов
##
**ArrayHelper** - массивы

`arrayToObject` - преобразование массива в объект

`sortBySubValue` - сортирует вложенные массивы в многомерном массиве по определенному значению ключа вложенных массивов

`generateRandMassive` - генерация массива случайных значений, в котором повторяющиеся элементы нерасположены друг за другом

`generateAllPermutation` - генерация массива перестановок

`generateAllPermutationCustom` - генерация массива перестановок с учётом кол-ва элементов в строке

`arrayMsort`
`arrayOrderBy` - сортировка многомерного массива

`parseTimeTable` - парсинг временной таблицы

`searchInMultiArrayByKeyValue` - поиск по значению ключа в многомерном массиве

`arrayToString` - смена типа элементов на строковый

`arrayToInt` - смена типа элементов на целочисленный

`recursiveRemovalByKey` - удалить элемент по ключу из многомерного массива

`recursiveRemoval` - удалить элемент из многомерного массива

`removeElementByKey` - удаление из массива элемента с определённым ключом

`arithmeticalMean` - среднее арифметическое массива

`diverseArray` - долго описывать, смотрите комментарий перед методом


##
**BasketHelper** - корзина

`isProductBasket` - есть ли товар в корзине ?

`productQuantityBasket` - количество товара в корзине


##
**CatalogHelper** - каталог

`normalizeActiveCatalogState` - приводит товары в нужное состоние активен/неактивен, опираясь на колчество


##
**CommonHelper** - хелперы общего назначения

`getFormattedEnding` 
`getNumEnding` - форматирует окончание в соответствии с переданным числом

`Debug`
`dump` - форматированный вывод сущностей для дебага

`getYoutubeVideoID` - получений id YouTube видео

`adminAuthorize` - авторизация под админом

`getDistance` - расстояние между двумя координатами

`IsAjax` - мы в ajax-запросе ?


##
**CurrencyHelper** - валюты

`getFormattedEndingCurrency` - склонение текстового написания валюты в зависимости от суммы 


##
**DateTimeHelper** - дата-время

`dateHumanitized` - форматирование даты/времени в человекоудобный формат

`timeToMinutes` - время в минутах


##
**FacetIndexHelper** - фасетный индекс

`cleanFacetIndex` - очистка фасетного индекса


##
**FilesHelper** - файлы

`getFileExt` - получение расширения файла


##
**HighLoadBlockHelper** - HL-блоки

`GetElementByXMLID` - получение данных из HL блока по XML_ID элемента


##
**IBlockHelper** - инфоблоки

`clear` - полностью очищает инфоблок

`randomSortAtIblockElems` - выставление рандомных значений сортировки у элементов

`sectionHasItems` - не пустая ли секция ? 


##
**LogHelper** - логирование

`addToLog` - запись строковых данных в лог


##
**PricesHelper** - цены

`formatCurrency` - форматирование цены

`getSaleValue` - вычисление скидки


##
**SaleHelper** - интернет-магазин

`getLocationIdByCityId` - определение id города по id местоположения

`getOrderPropertyValue` - получение свойства заказа по коду свойства


##
**SearchHelper** - поиск

`reIndexCatalog` = переиндексация


##
**StringHelper** - строки

`startsWith` - проверяет, начинается ли строка с указанного символа/строки

`endsWith` - проверяет, заканчивается ли строка указанным символом/строкой

`getHiddenPhone` - сокрытие номера телефона

`mbUcfirst` - мультибайтовый аналог ucfirst — преобразует первый символ строки в верхний регистр


##
**UrlHelper** - url

`removeKeyFromURLString` - удаление параметра из url

`removeKeyFromCurrentURL` - удаление параметров из текущего URL

`removeKeyFromURL` - удаление параметров из URL

`zAddUrlGet` - добавление параметров к URL

`selfURL` - получение URL текущей страницы


##
**UserHelper** - пользователи

`getUserInfoByIp` - получение информации о пользователе по ip

`isBot` - является ли пользователь ботом ?

##
**Пример вызова метода:** `DS\Helper\CommonHelper::Debug($_SERVER);`