# InitPHP CLI Table Generator

> ## ⚠️ DEPRECATED — Use [`initphp/console`](https://github.com/InitPHP/Console) instead
>
> As part of the InitPHP package consolidation, **this package has been merged into [`initphp/console`](https://github.com/InitPHP/Console) starting with version 2.1.** The consolidated package ships an identical table renderer under `\InitPHP\Console\Utils\Table` plus the rest of the Console toolkit (Application, Command, Input, Output, Question).
>
> This repository is kept read-only for historical reference. **No further updates will be released.**
>
> ### Migration
>
> 1. Update your `composer.json`:
>
>    ```diff
>    - "initphp/cli-table": "^1.0",
>    + "initphp/console": "^2.1"
>    ```
>
> 2. Your existing `use InitPHP\CLITable\Table;` imports keep working — `initphp/console:^2.1` ships a `class_alias` that aliases the old FQCN to the canonical `\InitPHP\Console\Utils\Table`. **No source changes required.**
>
> 3. When you next touch the code, prefer the new canonical namespace:
>
>    ```php
>    // Before
>    use InitPHP\CLITable\Table;
>
>    // After
>    use InitPHP\Console\Utils\Table;
>    ```
>
> Composer declares a `replace` from `initphp/console:^2.1` to this package, so the two will not be installed side-by-side.

---

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
