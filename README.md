# Programa-RS-TI-PHP

Exemplo de criação de aplicativo PHP usando MVC.

## Instalação do PDO-MySQL no GitHub Workspaces

Abra o Terminal do GitHub Codespaces e execute os comandos:

```
cd
VERSION=$(php -r 'echo phpversion();')
wget https://www.php.net/distributions/php-$VERSION.tar.gz
tar xf php-$VERSION.tar.gz 
cd php-$VERSION/ext/pdo_mysql
phpize
./configure
make
make test
make install
sed -i 's/;extension=pdo_mysql/extension=pdo_mysql/' /opt/php/$VERSION/ini/php.ini

php -i | grep drivers
```

## Referências 

1. https://github.com/orgs/community/discussions/45444