yii2-floatThead
=====================
This is a Yii 2 wrapper for [jquery.floatThead](http://mkoryak.github.io/floatThead/) a floating/locked/sticky/fixed table header plugin that requires no special CSS and supports window and overflow scrolling.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bluezed/yii2-float-thead "*"
```

or add

```
"bluezed/yii2-float-thead": "*"
```

to the require section of your `composer.json` file.


How to use
----------

In your view file.

```php
<table id="myTable">
    <tr>
        <th>Col1</th>
        <th>Col2</th>
    </tr>
    <tr>
        <td>Data1</td>
        <td>Data2</td>
    </tr>
</table>

<?php
\bluezed\floatThead\FloatThead::widget(
    [
        'tableId' => 'myTable', 
        'options' => [
            'top'=>'50'
        ]
    ]
);
?>
```

If you only want to register the Assets without directly applying the plugin to a table you can use this command:
```php
\bluezed\floatThead\FloatThead::widget(['registerOnly'=>true]);
```
