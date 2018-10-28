[{assign var="jxToday" value=$smarty.now|date_format:"%Y%m%d"}]
[{assign var="jxInfobanner" value="jxinfobanner_"|cat:$jxToday}]
[{assign var="jxActiveCmsFound" value=false}]

[{* Check if date specific banner exists and is active *}]
[{oxifcontent ident=$jxInfobanner object="oCont"}]
    [{if $oCont->oxcontents__oxactive->value}]
            [{assign var="jxActiveCmsFound" value=true}]
    [{/if}]
[{/oxifcontent}]


[{* Nothing found yet, check if a range banner exists and is active *}]
[{if ! $jxActiveCmsFound}]
    [{oxifcontent ident="jxinfobanner_range" object="oCont"}]
        [{if $oCont->oxcontents__oxactive->value}]
            [{assign var="jxBegin" value=$oCont->oxcontents__oxtitle->rawValue|substr:0:8}]        
            [{assign var="jxEnd" value=$oCont->oxcontents__oxtitle->rawValue|substr:-8}]
            [{if $jxBegin <= $jxToday and $jxEnd >= $jxToday}]
                [{assign var="jxActiveCmsFound" value=true}]
            [{/if}]
        [{/if}]
    [{/oxifcontent}]
[{/if}]


[{* Nothing found yet, check if repeating date exists and is active *}]
[{if ! $jxActiveCmsFound}]
    [{assign var="jxToday" value=$smarty.now|date_format:"%m%d"}]
    [{assign var="jxInfobanner" value="jxinfobanner_"|cat:$jxToday}]
    [{oxifcontent ident=$jxInfobanner object="oCont"}]
        [{if $oCont->oxcontents__oxactive->value}]
            [{assign var="jxActiveCmsFound" value=true}]
        [{/if}]
    [{/oxifcontent}]
[{/if}]


[{* Nothing found yet, check if default banner exists and is active *}]
[{if ! $jxActiveCmsFound}]
    [{oxifcontent ident="jxinfobanner" object="oCont"}]
        [{if $oCont->oxcontents__oxactive->value}]
            [{assign var="jxActiveCmsFound" value=true}]
        [{/if}]
    [{/oxifcontent}]
[{/if}]


[{if $jxActiveCmsFound}]
    <div id="jxInfoBanner">
        <div class="alert alert-warning">
            [{oxcontent ident=$oCont->oxcontents__oxloadid->value}]
        </div>
    </div>
[{/if}]
