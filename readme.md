# Email signature monitor

This project allows to manage ad campaign through employees' email signatures.

## Installation

1. Make sure you have [composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) installed.
2. Pull the project on the server then run ```composer install```

## Usage

Insert this code in your email signature:

```html
<a href="http://your-site-instance.co.nz/campaign">
    <img src="http://your-site-instance.co.nz/any-filename.ext">
</a>
```

The redirect link and image can be changed directly in the web/index.php file