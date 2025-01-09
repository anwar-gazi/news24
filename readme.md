
# **News24 Application Setup with Docker**

This project provides a containerized development and production environment for the News24 application, which includes a **Next.js frontend**, **Laravel-based admin panel**, and an **e-paper module**. It uses **Docker Compose** to orchestrate services, including MySQL databases and phpMyAdmin for database management.

---

## **Services Overview**

### 1. **Frontend (`news`)**
- **Description**: A Next.js application for the News24 frontend.
- **Port**: Accessible at `http://localhost:3010`.
- **Features**:
  - Hot-reloading for development.
  - Node.js 20 environment.

---

### 2. **Admin Panel (`admin`)**
- **Description**: A Laravel-based admin panel for managing the News24 application.
- **Port**: Accessible at `http://localhost:8010`.
- **Features**:
  - PHP 8.3 with PHP-FPM for fast processing.
  - Composer integration for PHP dependency management.

---

### 3. **E-paper Module (`epaper`)**
- **Description**: Handles the e-paper functionalities of the News24 application.
- **Port**: Accessible at `http://localhost:8020`.
- **Features**:
  - PHP 8.3 with Apache for serving requests.
  - Composer integration.

---

### 4. **Database Services**
- **`news_db`**:
  - MySQL 8.0 database for the admin panel.
  - Accessible on port `3307`.
- **`epaper_db`**:
  - MySQL 5.7 database for the e-paper module.
  - Accessible on port `3308`.

---

### 5. **phpMyAdmin**
- **Description**: Database management tool for MySQL databases.
- **Port**: Accessible at `http://localhost:8080`.
- **Features**:
  - Connects to both `news_db` and `epaper_db`.
  - Use root credentials to log in.

---

## **Setup Instructions**

### Prerequisites
- Docker and Docker Compose installed on your system.
- A `.env` file containing the following variables:
  ```env
  MYSQL_ROOT_PASSWORD=droid273
  MYSQL_USER=newsadmin
  MYSQL_PASSWORD=droid273
  MYSQL_DATABASE=newsadmin

  EPAPER_DB_ROOT_PASSWORD=droid273
  EPAPER_DB_NAME=mrnetdoptor_epaper2
  EPAPER_DB_USER=mrnetdoptor_epaper2
  EPAPER_DB_PASSWORD=droid273
  ```

---

### Steps to Run the Project

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/your-repo/news24.git
   cd news24
   ```

2. **Start the Services**:
   Run the following command to build and start all containers:
   ```bash
   docker-compose up --build
   ```

3. **Access the Services**:
   - **Frontend**: [http://localhost:3010](http://localhost:3010)
   - **Admin Panel**: [http://localhost:8010](http://localhost:8010)
   - **E-paper Module**: [http://localhost:8020](http://localhost:8020)
   - **phpMyAdmin**: [http://localhost:8080](http://localhost:8080)

---

### Database Configuration
- **Admin Database** (`news_db`):
  - **Host**: `news_db`
  - **Port**: `3307`
- **E-paper Database** (`epaper_db`):
  - **Host**: `epaper_db`
  - **Port**: `3308`

---

## **Project Structure**
```plaintext
.
├── admin/
│   ├── docker/8.3/Dockerfile      # Dockerfile for the admin panel
│   ├── ...                        # Laravel project files
├── frontend/
│   ├── ...                        # Next.js project files
├── epaper/
│   ├── docker/Dockerfile          # Dockerfile for the e-paper module
│   ├── ...                        # Laravel project files
└── docker-compose.yml             # Compose configuration for all services
```

---

## **Common Commands**

- **Stop Containers**:
  ```bash
  docker-compose down
  ```

- **Rebuild Services**:
  ```bash
  docker-compose up --build
  ```

- **Access phpMyAdmin**:
  Visit [http://localhost:8080](http://localhost:8080) and use the root credentials from the `.env` file.

---

## **Notes**
- Update the `.env` file with your desired credentials before running the project.
- For production, configure the services to use secure credentials and SSL.

---
