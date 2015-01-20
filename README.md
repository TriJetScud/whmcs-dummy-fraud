# WHMCS Dummy Fraud Module

## The 15,000 ft View
This module is written for the WHMCS fraud prevention feature. When this module is enabled, this module will always return a fraud order regardless of the user input.

If you write custom extensions for WHMCS that involves manipulating the order process, you may find this module useful for handling test cases that involves orders failing fraud checks. (i.e. minFraud).

## Installation

You may install this dummy module under the /modules/fraud/dummy directory in your WHMCS installation. Make sure dummy.php is **inside** the /modules/fraud/dummy directory.

## Compatibility

I've only tested this module under WHMCS 5.3.9. I haven't tested this module with other versions yet since WHMCS [do not provide examples for creating](http://www.whmcstips.com/custom-fraud-protection-module-with-maxmind-api/) a third party fraud prevention modules.

## Legal Stuff
This module is licensed under the BSD 2-Clause license. 

A word of caution though, when enabled this fraud module will **_reject all your orders_**, so please use this in a **__development envrionment__**. I can not stress this enough, if you break your WHMCS installation - it's your problem, not mine. Don't come crying to me for help if you do.
