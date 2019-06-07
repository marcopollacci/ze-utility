## Example:

# Put in your configuration: 
```
 google_analytics => 'UA-XXXXXX-XX'
```
# Example:
```php
<?php

declare(strict_types=1);

return [
  'google_analytics' => 'UA-XXXXXX-XX'
];

```

# Put in your layout.phtml

```php

if(!empty($google_analytics)){

  echo $this->partial('tipstricks::analytics',
      [
        'ganalytics' => $google_analytics,
      ]
  );

}


```