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
 * @copyright (C) Joachim Barthel 2016-2017
 * 
 **/

$aModule = array(
    'id'           => 'jxInfoBanner',
    'title'        => 'jxInfoBanner - Display of Messages on Top of all Pages',
    'description'  => array(
                        'de' => '<b>Anzeige von Mitteilungen in der Kopfzeile aller Seiten</b><ul>'
                                . '<li>Anzeige von CMS Seiten'
                                . '<li>Permanente Anzeige'
                                . '<li>Datumsabhängige Anzeige</ul>',
                        'en' => '<b>Display of Messages on Top of all Pages</b><ul>'
                                . '<li>Display of CMS pages'
                                . '<li>Permanent display'
                                . '<li>Date specific display</ul>',
                        ),
    'thumbnail'    => 'jxinfobanner.png',
    'version'      => '0.2.0',
    'author'       => 'Joachim Barthel',
    'url'          => 'https://github.com/job963/jxInfoBanner',
    'email'        => 'jobarthel@gmail.com',
    'extend'       => array(
                        ),
    'files'        => array(
                            'jxinfobanner_events' => 'jxmods/jxinfobanner/application/events/jxinfobanner_events.php'
                        ),
    'templates'     => array(
                            'widget/header/jxinfobanner_azure.tpl'  => 'jxmods/jxinfobanner/application/views/tpl/widget/header/jxinfobanner_azure.tpl',
                            'widget/header/jxinfobanner_flow.tpl'   => 'jxmods/jxinfobanner/application/views/tpl/widget/header/jxinfobanner_flow.tpl',
                            'widget/header/jxinfobanner_roxive.tpl' => 'jxmods/jxinfobanner/application/views/tpl/widget/header/jxinfobanner_roxive.tpl'
                        ),
    'blocks'        => array(
                            array(  /* Azure Theme */
                                'template' => 'layout/header.tpl', 
                                'block'    => 'layout_header_top',                     
                                'file'     => '/application/views/blocks/layout_header_top.tpl'
                              ),
                            array(  /* Flow Theme */
                                'template' => 'layout/header.tpl', 
                                'block'    => 'header_main',                     
                                'file'     => '/application/views/blocks/header_main.tpl'
                              ),
                            array(  /* RoxIVE Theme */
                                'template' => 'layout/header.tpl', 
                                'block'    => 'dd_layout_page_header',                     
                                'file'     => '/application/views/blocks/dd_layout_page_header.tpl'
                              )
                        ),
    'events'       => array(
                            'onActivate'   => 'jxinfobanner_events::onActivate', 
                            'onDeactivate' => 'jxinfobanner_events::onDeactivate'
                        ),
   'settings'      => array(
                        )
);