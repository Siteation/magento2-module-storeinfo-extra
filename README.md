# Siteation - Magento 2 Module Store Info Extra

> **Warning** This package has moved to https://github.com/Siteation/magento2-storeinfo

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
