<?php
/**
 * Metadata version
 */
$sMetadataVersion = '1.1';
 
/**
 * Module information
 * 
 * @link      https://github.com/job963/jx404Catcher
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @copyright (C) Joachim Barthel 2016
 * 
 **/

$aModule = array(
    'id'           => 'jxInfoBanner',
    'title'        => 'jxInfoBanner - Display of short Infos on Top of all Pages',
    'description'  => array(
                        'de' => 'Anzeige von Kurzinfos in der Kopfzeile aller Seiten',
                        'en' => 'Display of short Infos on Top of all Pages',
                        ),
    'thumbnail'    => 'jxinfobanner.png',
    'version'      => '0.1.0',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxInfoBanner',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
                            'jxinfobanner_events' => 'jxmods/jxinfobanner/application/events/jxinfobanner_events.php'
                        ),
    'templates'     => array(
                            'widget/header/jxinfobanner.tpl' => 'jxmods/jxinfobanner/application/views/tpl/widget/header/jxinfobanner.tpl',
                        ),
    'blocks'        => array(
                            array(
                                'template' => 'layout/header.tpl', 
                                'block'    => 'header_main',                     
                                'file'     => '/application/views/blocks/header_main.tpl'
                              )
                        ),
    'events'       => array(
                            'onActivate'   => 'jxinfobanner_events::onActivate', 
                            'onDeactivate' => 'jxinfobanner_events::onDeactivate'
                        ),
   'settings'      => array(
                        )
);