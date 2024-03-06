<p style="text-align: center"><img src="./public/images/tela_login.jpg"></p>

<div style="text-align: center">

# Technical test 🚀

</div>

Test application for [Beer And Code mentoring](https://beerandcode.com.br)

### Objective, Lists the best github users

- [See the project demo](https://beerandcodeteste032024.zigcms.com)

## Install

⚠️ This project was developed in the [Laravel Sail](https://laravel.com/docs/10.x/sail)
environment,
so if you already have `Docker` in your development environment, this will make your life easier
😁

<br> 

Clone this repository

```shell
git clone https://github.com/ewvlnet/beerandcode_teste_tecnico_03_2024.git NAMEOFYOURPROJECT
```

<br>

Enter the created folder

```shell
cd NAMEOFYOURPROJECT/
```

<br>

Now run the commands below

```shell
composer install

cp .env.example .env

php artisan key:generate
```

<br>

💡Before the `Sail Installation command`, change the database connection data as you wish

```dotenv
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=YOURDATABASENAME
DB_USERNAME=sail
DB_PASSWORD=password
```


<br>

Do the `require` of `Laravel Sail`, then run the installation command

```shell
composer require laravel/sail --dev

# Select MySQL and any other services you want
php artisan sail:install
```


<br>

Also, after the `Sail installation command`, in the next step it will create the images (making the `build`), and you
only need to run the up command, after that

```shell
./vendor/bin/sail up -d
```

The `-d` at the end of the command prevents the terminal from becoming locked, and you will be able to execute new
commands

<br>

Add your `github token` to the `.env` file in the `GITHUB_TOKEN` variable

```dotenv
GITHUB_TOKEN=YourGithubToken
```

<br>

Run the migrations

```shell
sail artisan migrate:fresh --seed
```

# 🥳🥂🎉🍻🎈

#### Once this is done, just access `localhost` and see the project login screen

### 📄 License

[MIT](./LICENSE.md)

