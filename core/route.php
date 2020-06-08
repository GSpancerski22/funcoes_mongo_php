<?php

$route[]=['/',       'dashController'];
$route[]=['usuarios','usuarios/tableview'];
$route[]=['marcas',  'marcas/tableview'];
$route[]=['produtos','produtos/tableview'];

$route[]=['usuarios_add','usuarios/add'];
$route[]=['marcas_add',  'marcas/add'];
$route[]=['produtos_add','produtos/add'];

$route[]=['marcas_save',    'marcas/save'];
$route[]=['usuarios_save',  'usuarios/save'];
$route[]=['produtos_save',  'produtos/save'];

$route[]=['marcas_edit',  'marcas/edit'];
$route[]=['produtos_edit',  'produtos/edit'];

$route[]=['marcas_update',  'marcas/update'];
$route[]=['produtos_update',  'produtos/update'];






//return $route;