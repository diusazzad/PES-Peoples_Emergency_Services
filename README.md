<!-- https://readme.shaankhan.dev/#about-the-project -->

![Downloads](https://img.shields.io/github/downloads/diusazzad/PES-Peoples_Emergency_Services/total) ![Contributors](https://img.shields.io/github/contributors/diusazzad/PES-Peoples_Emergency_Services?color=dark-green) ![Forks](https://img.shields.io/github/forks/diusazzad/PES-Peoples_Emergency_Services?style=social) ![Stargazers](https://img.shields.io/github/stars/diusazzad/PES-Peoples_Emergency_Services?style=social) ![Issues](https://img.shields.io/github/issues/diusazzad/PES-Peoples_Emergency_Services) ![License](https://img.shields.io/github/license/diusazzad/PES-Peoples_Emergency_Services)

## Table Of Contents

* [Project Overview](#Project-Overview)
* [Software Requirement Specification](#Software-Requirement-Specification)
* [SYSTEM ANALYSIS](#SYSTEM-ANALYSIS)
* [System Design Specification](#System-Design-Specification)
* [Built With](#built-with)
* [Getting Started](#getting-started)
  * [Prerequisites](#prerequisites)
  * [Installation](#installation)
* [Usage](#usage)
* [Roadmap](#roadmap)
* [Contributing](#contributing)
* [License](#license)
* [Authors](#authors)
* [Acknowledgements](#acknowledgements)

## About The Project

There are many great README templates available on GitHub, however, I didn't find one that really suit my needs so I created this enhanced one. I want to create a README template so amazing that it'll be the last one you ever need.

Here's why:

* Your time should be focused on creating something amazing. A project that solves a problem and helps others
* You shouldn't be doing the same tasks over and over like creating a README from scratch
* You should element DRY principles to the rest of your life :smile:

Of course, no one template will serve all projects since your needs may be different. So I'll be adding more in the near future. You may also suggest changes by forking this repo and creating a pull request or opening an issue.

A list of commonly used resources that I find helpful are listed in the acknowledgements.

## Features

* Cookie-based authentication for regular users. ✔️
* custom Token-based authentication for the superadmin role.❌
* JWT authentication for the admin and editor roles.❌
* Frontend
* Design Welcome page , Login, Registration and Payment System. ✔️
* Multi Role based Dashboard Same Template with role based Functionality ✔️
* Api intregration
* web/android Features
* Responsive  ✔️
* Cross platform
* Multiple Database with backup ✔️
* Role Based Authentication
  * User  ✔️
    * Community Page ✔️
    * Task Management ✔️
    * Helpdesk ❌
    * Fitness ❌
    * Profile ❌
    * Setting ❌
  * Superadmin  ✔️
    * Assign Roles ✔️
  * Admin  ✔️
    * User and Editor Assign ✔️
  * Editor  ✔️
    * User Activity ✔️



## Built With

 [Laravel](https://laravel.com): A powerful PHP framework for building web applications and APIs.

* [Blade](https://laravel.com/docs/blade): Laravel's templating engine for efficient and reusable UI components.
* [Vue.js](https://vuejs.org): A progressive JavaScript framework for building interactive front-end interfaces.
* [Flutter](https://flutter.dev): A UI toolkit for developing native mobile applications on iOS and Android.
* API: A set of RESTful APIs designed for seamless data communication between front-end and back-end.
* [MySQL](https://www.mysql.com): The open-source relational database management system used for data storage.
* [Tailwind CSS](https://tailwindcss.com): A utility-first CSS framework for rapidly building custom designs.
* [GitHub Actions](https://github.com/features/actions): Automation workflows to enhance the development process.
* [Docker](https://www.docker.com): A containerization platform for easy deployment and scalability.
* [Nginx](https://www.nginx.com): A high-performance web server used for handling HTTP requests.

## Getting Started

Welcome to [Project Name]! This guide will help you get started with the project and its development environment.

### Prerequisites

Before you begin, make sure you have the following installed on your system:

1. [Node.js](https://nodejs.org) (version X.X.X): Used for running JavaScript applications and development tools.
2. [npm](https://www.npmjs.com) (version X.X.X): The Node.js package manager used for installing dependencies.
3. [Flutter](https://flutter.dev) (version X.X.X): Required for developing and running the mobile app components.

### Installation

1. Clone this repository to your local machine using:

2. Change into the project directory:

3. Install the required dependencies:

### Development

To start the development server and run the web application, use:
To run the mobile app, use:

### Contributing

We welcome contributions from the community! If you'd like to contribute to [Project Name], please follow our [contribution guidelines](CONTRIBUTING.md) to get started.

### Issues and Support

If you encounter any issues or have questions, please open an issue on our [GitHub repository](https://github.com/username/project-name/issues). We'll be happy to help!

Thank you for choosing [Project Name]. Happy coding!

## Screenshots

![Homepage](https://github.com/diusazzad/PES-Peoples_Emergency_Services/blob/main/doc/screenshot/1.jpg?raw=true)

![Logiin](https://github.com/diusazzad/PES-Peoples_Emergency_Services/blob/main/doc/screenshot/2.jpg?raw=true)

![Register](https://github.com/diusazzad/PES-Peoples_Emergency_Services/blob/main/doc/screenshot/register.jpg?raw=true)

![UserDashboard](https://github.com/diusazzad/PES-Peoples_Emergency_Services/blob/main/doc/screenshot/user.jpg?raw=true)

![UserTask](https://github.com/diusazzad/PES-Peoples_Emergency_Services/blob/main/doc/screenshot/3.jpg?raw=true)

## Usage

### 1. Installation

Before using [PES], make sure you have [prerequisite software] installed on your system.


## Deployment

To deploy this project run

```bash
git clone https://github.com/username/pes.git
cd pes
composer install
composer update
php artisan key:generate 
php artisan migrate
npm install
npm run build 
npx vite --port=4000
php artisan serve
localhost:8000

```

