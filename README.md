# InitPHP CLI Table Generator

This library allows you to create nice looking tables in the CLI interface with PHP.

_**Note** : Not required, but the **MB_String** extension is highly recommended._

## Installation

```
composer require initphp/cli-table
```

or include `src/Table.php`.

## Usage

```php
<?php
require_once __DIR__ . "/vendor/autoload.php";
use \InitPHP\CLITable\Table;

$table = new Table();

$table->row([
    'id'        => 1,
    'name'      => 'Matthew S.',
    'surname'   => 'Kramer',
    'email'     => 'matthew@example.com',
    'status'    => true,
]);

$table->row([
    'id'        => 2,
    'name'      => 'Millie J.',
    'surname'   => 'Koenig',
    'email'     => 'millie@example.com',
    'status'    => false,
]);

$table->row([
    'id'        => 3,
    'name'      => 'Regina G.',
    'surname'   => 'Hart',
    'email'     => 'regina@example.com',
    'status'    => true,
]);

echo $table;
```

Output : 

![basic-cli-table](https://user-images.githubusercontent.com/104234499/186993361-3917979a-0a40-4e7b-84e8-4dd5f51c1bd1.jpg)

### Styled

```php
<?php
declare(strict_types=1);
require_once __DIR__ . '/../vendor/autoload.php';
use InitPHP\CLITable\Table;

$table = new Table();
$table->setBorderStyle(Table::COLOR_BLUE);
$table->setCellStyle(Table::COLOR_GREEN);
$table->setHeaderStyle(Table::COLOR_RED, Table::BOLD);

$table->setColumnCellStyle('id', Table::ITALIC, Table::COLOR_LIGHT_YELLOW);
$table->setColumnCellStyle('email', Table::BOLD, Table::ITALIC);

$table->row([
    'id'        => 1,
    'name'      => 'Matthew S.',
    'surname'   => 'Kramer',
    'email'     => 'matthew@example.com',
    'status'    => true,
]);

$table->row([
    'id'        => 2,
    'name'      => 'Millie J.',
    'surname'   => 'Koenig',
    'email'     => 'millie@example.com',
    'status'    => false,
]);

$table->row([
    'id'        => 3,
    'name'      => 'Regina G.',
    'surname'   => 'Hart',
    'email'     => 'regina@example.com',
    'status'    => true,
]);

echo $table;
```

Output : 

![styled-cli-table](https://user-images.githubusercontent.com/104234499/186993365-82c0e55d-d572-45d2-a89a-5cf60c5c9fbe.jpg)


## Credits 

- [Muhammet ŞAFAK](https://github.com/muhammetsafak) <<info@muhammetsafak.com.tr>>

## License

Copyright &copy; 2022 [MIT License](./LICENSE)
