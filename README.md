# JUST NU calculator for Aftonbladet

Calculates how many instances of "JUST NU" exists on the Aftonbladet front page at any given time!

### 1. Install

```
composer require aftonbladet/just-nu-calculator
```

### 2. Use it

```php
$ab = new Aftonbladet\JustNu();
echo $ab->getCount(); // (int) 5
```