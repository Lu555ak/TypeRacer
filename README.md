# Typeracer Game with Laravel

![Typeracer Preview](https://github.com/Lu555ak/TypeRacer/blob/main/screenshot.jpg)

A Typeracer game using Laravel, where players can compete by typing text passages as fast as they can. This README will guide you through the setup and usage of the Typeracer game.

## Table of Contents
- [Features](#features)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
  - [Configuration](#configuration)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Features

- Diverse text passages for players to type.
- Leaderboard to track the fastest typists.
- User authentication and profiles.
- Chosoe your own buddy to type along

## Getting Started

Follow these instructions to set up and run the Typeracer game on your local machine.

### Prerequisites

Make sure you have the following software installed on your computer:

- PHP: Download and install PHP from [https://www.php.net/](https://www.php.net/).
- Composer: Download and install Composer from [https://getcomposer.org/](https://getcomposer.org/).
- Laravel: Install Laravel globally using Composer:
  ```bash
   composer global require laravel/installer
  ```

### Installation
1. Clone the Typeracer repository to your local machine using Git:

```bash
git clone https://github.com/yourusername/typeracer.git
```
2. Navigate to the project directory:

```bash
cd typeracer
```
3. Install the project dependencies:

```bash
composer install
```
4. Create a copy of the .env.example file and name it .env. Update the database configuration and other environment variables in this file.

5. Generate an application key:

```bash
php artisan key:generate
```
6. Migrate the database:

```bash
php artisan migrate
```
7. Start the Laravel development server:

```bash
php artisan serve
```
8. Open your web browser and go to `http://localhost:8000` to view the Typeracer game.

## Configuration

- Customize the game settings, such as text passages, typing speed requirements, and scoring, by modifying the configuration files in the `config` directory.

### Usage

1. Register or log in as a user on the Typeracer website.

2. Choose your typing buddy!

3. Start typing the displayed passage as fast and accurately as you can.

4. Compete for the top spot on the leaderboard!

### Contributing

We welcome contributions from the community. To contribute to the Typeracer game, please follow these steps:

1. Fork the repository on GitHub.

2. Clone your forked repository to your local machine.

3. Create a new branch for your feature or bug fix.

4. Make your changes and test them thoroughly.

5. Commit your changes and push them to your fork on GitHub.

6. Create a pull request to the main repository's `main` branch.

### License

SpaceSite is open-source software licensed under the [MIT License](LICENSE). Feel free to use, modify, and distribute it as per the terms of the license. Please attribute the project if you use it in your own work.
