<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<h4 align="center">📱 Contact & 👨 Social</h4>
<p align="center">
<!-- <a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a> -->
<a href="mailto:anthonyobah37@gmail.com"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white"></a>
<a href="https://github.com/obahchimaobi"><img src="https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white"></a>
<a href="https://linkedin.com/in/obahchimaobi"><img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"></a>
</p>

<h4 align="center">🚀 Skills</h4>
<p align="center">
<a href=""><img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/livewire-%234e56a6.svg?style=for-the-badge&logo=livewire&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/MySQL-00000F?style=for-the-badge&logo=mysql&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white"></a>
</p>

<h4 align="center">💻 OS</h4>
<p align="center">
<a href=""><img src="https://img.shields.io/badge/Fedora-294172?style=for-the-badge&logo=fedora&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Kali-268BEE?style=for-the-badge&logo=kalilinux&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/-Zorin%20OS-%2310AAEB?style=for-the-badge&logo=zorin&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Pop!_OS-48B9C7?style=for-the-badge&logo=Pop!_OS&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/-Lubuntu-%230065C2?style=for-the-badge&logo=lubuntu&logoColor=white"></a>
<a href=""><img src="https://img.shields.io/badge/Debian-D70A53?style=for-the-badge&logo=debian&logoColor=white"></a>
</p>

# RoomEase - Student Accommodation Made Easy

RoomEase is a web application that simplifies the process of finding and listing student accommodations. It provides a seamless connection between students and landlords with user-friendly features.

## Features

- **Secure Authentication:** Supports password-based and passwordless login.
- **Separate Portals:** Dedicated portals for students and landlords.
- **Profile Management:** Users can update their profiles with necessary details.
- **Property Listings:** Landlords can list properties with descriptions and images.
- **Search & Filters:** Students can search based on location, price, and amenities.
- **Favorites:** Save properties for later viewing.
- **Notifications:** Get notified of new listings and updates.

## Installation

### Prerequisites

Ensure you have the following installed on your machine:

- PHP (>=8.0)
- Composer
- Laravel Framework
- MySQL or PostgreSQL
- Node.js & npm

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/obahchimaobi/RoomEase.git
   cd RoomEase
   ```

2. Install dependencies:
   ```bash
   composer install
   npm install
   ```

3. Set up the environment variables:
   ```bash
   cp .env.example .env
   ```
   Configure the database and mail settings in the `.env` file.

4. Generate the app key:
    ```bash
    php artisan key:generate
    ```

5. Run database migrations:
   ```bash
   php artisan migrate
   ```

6. Serve the application:
   ```bash
   php artisan serve
   ```

Access the application at `http://127.0.0.1:8000`

## Usage

### Student Portal
- Register/Login
- Browse available properties
- Save favorite listings
- Contact landlords

### Landlord Portal
- Register/Login
- Add new property listings
- Manage property details
- View student inquiries

## Contribution

We welcome contributions! To contribute:

1. Fork the repository.
2. Create a new branch for your feature.
3. Commit your changes.
4. Submit a pull request.

### Reporting Issues

If you encounter any issues, please report them via the [GitHub Issues](https://github.com/yourusername/roomease/issues) section.

## License

RoomEase is open-source and available under the [MIT License](LICENSE).

## Contact

For inquiries and support, reach out via [email@example.com](mailto:email@example.com).

