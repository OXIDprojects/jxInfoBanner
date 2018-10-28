# jxInfoBanner

OXID eShop Extension for Displaying Messages on Top of all Pages

  - Permanent banner display
  - One time, date specific banner display
  - Recurrring banner display
  - Time range based banner display
  - Support of the themes Azure, Flow and RoxIVE

The message texts are taken from CMS pages starting with ident 'jxinfobanner'.


## OXID eShop Versions

The module is available for the following versions
  * **OXID eShop 6** (actual module version)
  * OXID eShop 4.x / 5.x ([download here](https://github.com/job963/jxInfoBanner/tree/oxid-4x))

## Setup

### OXID eShop 6

1. Install the module  
  ```composer config repo.JxMods/JxInfoBanner git https://github.com/job953/jxinfobanner.git```

    ```composer require jxmods/jxcinfobanner```

2. Activate the module  
Navigate in the admin backend of the shop to _Extensions_ - _Modules_.  
Select the module _jxInfoBanner_ and click on `Activate`.

### OXID eShop 4/5

Goto branch [oxid-4x](https://github.com/job963/jxInfoBanner/tree/oxid-4x) and follow the instructions there.


## Options

### One time banner
If a CMS page with ident = `jxinfobanner_YYYYMMDD` exists, eg. `jxinfobanner_20181125`, this page will be shown as message on 2018-11-25.

### Anniversary or Christmas banner
If a CMS page with ident = `jxinfobanner_MMDD` exists, eg. `jxinfobanner_0815`, this page will be shown as message each year at 08-15.

### Permanent banner
If a CMS page with ident = `jxinfobanner` exists, this page will be shown as message permanentely.

### Time range banner
If a CMS page with ident = `jxinfobanner_range` exists and the title contains two valid date values, eg. `20170825-20170830` 
and today is between these dates, this page will be shown as message.

  
## Screenshots

