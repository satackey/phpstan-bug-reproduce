
```
$ composer install
$ vendor/bin/phpstan analyze -c phpstan.neon src
 3/3 [▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓▓] 100%

 ------ ------------------------------------------------------------------------------------------ 
  Line   index.php                                                                                 
 ------ ------------------------------------------------------------------------------------------ 
  5      PHPDoc tag @var has no value type specified in iterable type Src\FooList.                 
         💡 See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type  
 ------ ------------------------------------------------------------------------------------------ 

                                                                                                                        
 [ERROR] Found 1 error                                                                                                  
                                                                                                                        
```