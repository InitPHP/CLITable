#!usr/bin/php
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
