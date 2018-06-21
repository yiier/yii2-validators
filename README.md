Validators for Yii2
================
Validators for Yii2

[![Latest Stable Version](https://poser.pugx.org/yiier/yii2-validators/v/stable)](https://packagist.org/packages/yiier/yii2-validators) 
[![Total Downloads](https://poser.pugx.org/yiier/yii2-validators/downloads)](https://packagist.org/packages/yiier/yii2-validators) 
[![Latest Unstable Version](https://poser.pugx.org/yiier/yii2-validators/v/unstable)](https://packagist.org/packages/yiier/yii2-validators) 
[![License](https://poser.pugx.org/yiier/yii2-validators/license)](https://packagist.org/packages/yiier/yii2-validators)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yiier/yii2-validators "*"
```

or add

```
"yiier/yii2-validators": "*"
```

to the require section of your `composer.json` file.


Method Listing
-----

**中国身份证号码验证**

```php
public function rules()
{
    return [
        // ... 
        ['id_card', \yiier\validators\IdCardValidator::className()],
        // code
    ];
}
```

**Array Validator**

```php
public function rules()
{
    return [
        // ... 
        ['product_ids', \yiier\validators\ArrayValidator::className()],
        // code
    ];
}
```

**Phone Validator**

```php
public function rules()
{
    return [
        // ... 
        ['phone', \yiier\validators\PhoneValidator::className()],
        // code
    ];
}
```


**Money Validator**

```php
public function rules()
{
    return [
        // ... 
        ['amount', \yiier\validators\MoneyValidator::className()],
        // code
    ];
}
```

……
