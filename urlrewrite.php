<?php
$arUrlRewrite=array (
  2 => 
  array (
    'CONDITION' => '#^/catalog/([\\w,-]+)/([\\w,-]+)/([^/]*)#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2',
    'ID' => '',
    'PATH' => '/catalog/element.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/catalog/([^/]+?)/([^/]+?)/\\??(.*)#',
    'RULE' => 'SECTION_CODE=$1&ELEMENT_CODE=$2&$3',
    'ID' => 'bitrix:catalog.section',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  1 => 
  array (
    'CONDITION' => '#^/catalog/([\\w,-]+)/([^/]*)#',
    'RULE' => 'SECTION_CODE=$1',
    'ID' => '',
    'PATH' => '/catalog/section.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/lp/#',
    'RULE' => NULL,
    'ID' => 'bitrix:landing.pub',
    'PATH' => '/lp/index.php',
    'SORT' => 100,
  ),
);
