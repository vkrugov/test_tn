# Test Task for TN project. Created by Vladimir Krugov

## Required for work:
```
PHP 7.2
```

## Install App:
```
* composer install
```

## Available users:
```
* tester
* developer
* manager
* designer
```

## Available skills for users:
```
* writeCode
* testCode
* communicateWithManager
* setTask
* draw
```

## Example of commands:
```
* php ./vendor/bin/console user:developer
* php ./vendor/bin/console user:tester
* php ./vendor/bin/console user:developer
* php ./vendor/bin/console can:designer draw
* php ./vendor/bin/console can:developer writeCode
* php ./vendor/bin/console can:manager draw
* php ./vendor/bin/console can:tester testCode
```

##### Contacts:
```
Skype: vladimir_2916
E-mail: vkrugov11@gmail.com
```

##### Task Description:
```
Существует несколько видов работников: программист, дизайнер, тестировщик,
менеджер.
1. каждый работник умеет по-своему делать свою работу:
 - программист может 1) писать код, 2) тестировать код, 3)общаться с
менеджером
 - дизайнер 4) рисовать, 3)общаться с менеджером
 - тестировщик может 2) тестировать код, 3)общаться с менеджером, 5)ставить
задачи
 - менеджер может 5)ставить задачи
2 в свою очередь они не умеют:
 - программист - 4)рисовать 5) ставить задачи
 - дизайнер - 1)писать код 2) тестировать код 5)ставить задачи
 - тестировщик - 1)писать код 4) рисовать
 - менеджер - 1)писать код 4)рисовать 2) тестировать код
нужно описать умение каждого сотрудника с помощь принципов ООП
требования
1. php 7.2
2. использовать код стайл psr-12 https://www.php-fig.org/psr/psr-12/
3. создать новый репозиторий на https://github.com/ и залить туда
4. использование composer https://getcomposer.org/
5. использование https://symfony.com/doc/current/components/console.html для
запуска скрипта
пример запуска:
php ./vendor/bin/console user:developer
на выходе должны получить подобное
- code writing
- code testing
- communication with manager
6. также реализовать может ли сотрудник делать определенные действия, пример для
реализации
php ./vendor/bin/console can:developer writeCode
true
php ./vendor/bin/console can:developer draw
false
```

