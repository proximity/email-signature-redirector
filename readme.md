# Email signature redirector

Ever had the need to edit the email signatures of your 100 strong company to include a promotion / notification? Then had to go back and change all their footers again once the promotion finished? 

*This project allows centralised management of email footer campaigns.*

By using simple redirects, html signature footers can have images and links change from one centralised server.

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
