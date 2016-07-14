<?php
/*
 *    This file is part of the module jxInfoBanner for OXID eShop Community Edition.
 *
 *    The module jxInfoBanner for OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    The module jxInfoBanner for OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      https://github.com/job963/jxInfoBanner
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @copyright (C) Joachim Barthel 2016
 * 
 */

class jxInfoBanner_Install
{ 
    public static function onActivate() 
    { 

        $oDb = oxDb::getDb(); 

        $isUtf = oxRegistry::getConfig()->isUtf(); 
        $sCollate = ($isUtf ? "COLLATE 'utf8_general_ci'" : "");
        
        $sLogPath = oxRegistry::get("oxConfig")->getConfigParam("sShopDir") . '/log/';
        $fh = fopen($sLogPath.'jxmods.log', "a+");
        
    $sNewUid = oxUtilsObject::getInstance()->generateUID();
        $aSql[] = array(
            /*
                    "table"     => "jx404catches",
                    "statement" => "CREATE TABLE `jx404catches` ("
                                        . "`JXID` char(32) $sCollate DEFAULT NULL, "
                                        . "`JX404URL` varchar(255) $sCollate DEFAULT NULL, "
                                        . "`JXCOUNT` int(11) $sCollate DEFAULT NULL, "
                                        . "`JXINSERT` datetime DEFAULT NULL, "
                                        . "`JXTIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, "
                                        . "UNIQUE INDEX `JX404URL` (`JX404URL`)"
                                    . ") "
                                    . "ENGINE=MyISAM DEFAULT " . ($isUtf ? ' CHARSET=utf8' : '')
             */
                        );
        
        foreach ($aSql as $sSql) {
            try {
                if ( !$oDb->getOne( "SHOW TABLES LIKE '{$sSql['table']}'", false, false ) ) {
                    $oRs = $oDb->Execute($sSql['statement']);
                }
            }
            catch (Exception $e) {
                fputs( $fh, date("Y-m-d H:i:s ").$e->getMessage() );
                echo '<div style="border:2px solid #dd0000;margin:10px;padding:5px;background-color:#ffdddd;font-family:sans-serif;font-size:14px;">';
                echo '<b>SQL-Error '.$e->getCode().' in SQL statement</b><br />'.$e->getMessage().'';
                echo '</div>';
                return false;
                die();
            }
        }
        fclose($fh);
        
        return true; 
    } 


    public static function onDeactivate() 
    { 
        /* nothing to do */
        
        return true; 
    }  
}

?>