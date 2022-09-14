# Composer 01
- Ir até a pasta `C:\xampp\htdocs\testeee>` na prompt de comando;
- Digitar o comando `composer init`;
- Só ir dando Enter, e no final botar três `no` como resposta;
- Abrir a pasta no VS Code;
- Adicionar o código 
```
    "autoload": {
        "psr-4": {
            "": "src/"
        }
    }
```
no arquivo `composer.json`;
- Voltar na prompt de comando e digitar o comando `composer dump-autoload`;
- Iniciar o arquivo `index.php` no navegador;