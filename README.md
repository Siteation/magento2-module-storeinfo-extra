# Siteation - Magento 2 Module Store Info Extra

[![Packagist Version](https://img.shields.io/packagist/v/siteation/magento2-storeinfo-extra?style=for-the-badge)](https://packagist.org/packages/siteation/magento2-storeinfo-extra)
![Supported Magento Versions](https://img.shields.io/badge/magento-%202.3_|_2.4-brightgreen.svg?logo=magento&longCache=true&style=for-the-badge)
[![Hyvä Themes Supported](https://img.shields.io/badge/Hyva_Themes-Supported-3df0af.svg?longCache=true&style=for-the-badge)](https://hyva.io/)
![License](https://img.shields.io/github/license/Siteation/magento2-module-storeinfo-extra?color=%23234&style=for-the-badge)

This Magento 2 module add the option to show social buttons or more extras with ease.

So you can get the whatsapp number from the Stores > Config.
Instead using static block or hard code it in your template directly.

## Installation

Install the package via;

```bash
composer require siteation/magento2-storeinfo-extra
bin/magento module:enable Siteation_StoreInfoExtra
bin/magento setup:upgrade
```

> **Note** This Module require Magento 2.3 or higher!
> For more requirements see the `composer.json`.

## How to use

By default this module loads nothing.

Use one of the samples to get started.

After this Enter your information in the available options found in Stores > Configuration > General > General > Store Extra information

### Adding sample block

<details open><summary>Hyva - XML Sample</summary>

```xml
<referenceContainer name="footer">
    <block
        name="footer.store.socials"
        as="footer-store-socials"
        template="Siteation_StoreInfoExtra::hyva/socials.phtml"
    />
</referenceContainer>
```

> Other options are: `coc-number.phtml`, `whatsapp-button.phtml`

</details>

<details><summary>Luma - XML Sample</summary>

```xml
<referenceContainer name="footer">
    <block name="footer.store.socials"
        as="footer-store-socials"
        template="Siteation_StoreInfoExtra::luma/socials.phtml">
        <arguments>
            <argument name="viewModelStoreInfo" 
                xsi:type="object">Siteation\StoreInfoExtra\ViewModel\StoreInfoExtra</argument>
        </arguments>
    </block>
</referenceContainer>
```

> Other options are: `coc-number.phtml`, `whatsapp-button.phtml`

</details>

### Extending

Incase you want to add your own fields,
you need create your own module,
that has at least contains the `etc/adminhtml/system.xml` file.

In here you can create new fields, just as this module is doing.

## Preview

![Magento 2 footer with social icons](assets/preview.png)
