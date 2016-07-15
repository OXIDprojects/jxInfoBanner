[{assign var="jxToday" value=$smarty.now|date_format:"%Y%m%d"}]
[{assign var="jxInfobanner" value="jxinfobanner_"|cat:$jxToday}]
[{assign var="jxActiveCmsFound" value=false}]

[{* Check if date specific banner exists and is active *}]
[{oxifcontent ident=$jxInfobanner object="oCont"}]
    [{if $oCont->oxcontents__oxactive->value}]
        [{assign var="jxActiveCmsFound" value=true}]
    [{/if}]
[{/oxifcontent}]

[{* Check if holiday banner exists and is active *}]
[{*
[{assign var='jxHolidays' value=','|explode:"newyearsday,epiphany,laborday,xmas24,xmas25,xmas26,newyearseve"}]
[{foreach from=$jxHolidays item=jxHoliday}]
    [{assign var="jxInfobanner" value="jxinfobanner_"|cat:$jxHoliday}]
    [{oxifcontent ident=$jxInfobanner object="oCont"}]
        [{if $oCont->oxcontents__oxactive->value}]
            [{if $jxHoliday="newyearsday" && "0101"=$jxToday|substr:-4 }]
                [{assign var="jxActiveCmsFound" value=true}]
            [{elseif  $jxHoliday="newyearsday" && "0106"=$jxToday|substr:-4 }]
                [{assign var="jxActiveCmsFound" value=true}]
            [{/if}]
        [{/if}]
    [{/oxifcontent}]
[{/foreach}]
*}]

[{* Nothing found yet, check if default banner exists and is active *}]
[{if ! $jxActiveCmsFound}]
    [{oxifcontent ident="jxinfobanner" object="oCont"}]
        [{if $oCont->oxcontents__oxactive->value}]
            [{assign var="jxActiveCmsFound" value=true}]
        [{/if}]
    [{/oxifcontent}]
[{/if}]


[{assign var="oConfig" value=$oViewConf->getConfig()}]

[{if $oConfig->getConfigParam("sTheme") == "azure"}]
    <style>
        #jxInfoBanner {
            background-color: #ff8604;
            color: white;
            font-size: 1.2em;
            border: 1px solid #ec6105;
            border-radius: 4px;
            padding: 4px;
            margin-top: 2px;
        }
    </style>
    
    [{if $jxActiveCmsFound}]
        <div id="jxInfoBanner">
            [{$oCont->oxcontents__oxcontent->value}]
        </div>
    [{/if}]
[{/if}]
