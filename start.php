<?php
/*
 * 1) вывести все продукты у которых attribute_code = page_layout. Выборку сделайте по следующим полям:
 *   entity_id, sku, created_at, value, attribute_code
( entity_id, sku, created_at из catalog_product_entity, attribute_code из eav_attribute
value из catalog_product_entity_text
)
используйте обьединение через таблицу catalog_product_entity_text
используйте алиасы для таблиц

2) вывести все продукты (catalog_product_entity) вместе с текстом (catalog_product_entity_text) от 2017-09-20 16:03:28

3) вывести все поля: entity_id, sku, created_at, value
(entity_id, sku, created_at из catalog_product_entity
value из catalog_product_entity_text
)
в которых sku есть '11'
 */

require_once __DIR__."/vendor/autoload.php";
$view = new View();
$view->controller->setTypequery($_GET['switch']);

