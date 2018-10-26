# jxInfoBanner

OXID eShop Extension for Displaying Messages on Top of all Pages

  - Support of permanent display
  - Support of date specific display
  - Support of the themes Azure, Flow and RoxIVE

The message texts are taken from CMS pages starting with 'jxinfobanner'.


## Setup

1. Unzip the complete file with all the folder structures and upload the content of the folder copy_this to the root folder of your shop.
2. After this navigate in the admin backend of the shop to _Extensions_ - _Modules_. Select the module _jxInfoBanner_ and click on `Activate`.

## Options

### One day banner
If a CMS page with ident = `jxinfobanner_YYYYMMDD` exists, eg. `jxinfobanner_20181125`, this page will be shown as message on 2018-11-25.

### Anniversary or Christmas banner
If a CMS page with ident = `jxinfobanner_MMDD` exists, eg. `jxinfobanner_0815`, this page will be shown as message each year at 08-15.

### Permanent banner
If a CMS page with ident = `jxinfobanner` exists, this page will be shown as message permanentely.

### Time range banner
If a CMS page with ident = `jxinfobanner_range` exists and the title contains two valid date values, eg. `20170825-20170830` 
and today is between these dates, this page will be shown as message.

  
## Screenshots

