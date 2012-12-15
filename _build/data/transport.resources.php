<?php
/**
 * resources transport file for CacheClear extra
 *
 * Copyright 2012 by Bob Ray <http://bobsguides.com>
 * Created on 12-14-2012
 *
 * @package cacheclear
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $resources */


$resources = array();

$resources[1] = $modx->newObject('modResource');
$resources[1]->fromArray(array(
    'id' => '1',
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'CacheClear',
    'longtitle' => '',
    'description' => '',
    'alias' => 'cache-clear',
    'link_attributes' => '',
    'published' => '',
    'isfolder' => '',
    'introtext' => '',
    'richtext' => '',
    'template' => 'default',
    'menuindex' => '1',
    'searchable' => '1',
    'cacheable' => '1',
    'createdby' => '1',
    'editedby' => '1',
    'deleted' => '',
    'deletedon' => '0',
    'deletedby' => '0',
    'menutitle' => '',
    'donthit' => '',
    'privateweb' => '',
    'privatemgr' => '',
    'content_dispo' => '0',
    'hidemenu' => '',
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => '1',
    'hide_children_in_tree' => '0',
    'show_in_tree' => '1',
    'properties' => '',
), '', true, true);
$resources[1]->setContent(file_get_contents($sources['data'].'resources/cacheclear.content.html'));

return $resources;
