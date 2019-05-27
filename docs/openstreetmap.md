## Example in another phtml view file:

```php

if(!empty($markers)){

  echo $this->partial('tipstricks::openstreetmap',
      [
        'markers' => $markers,
      ]
  );

}

```